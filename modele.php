<?php
function patientsList ()
{
    $bdd = dbConnect();
    // Pagination variables
    $nPerPage = 5;
    $page = 1;
    if (isset($_GET['page']) AND !empty($_GET['page'])) 
    {
        $page = $_GET['page'];
    }
    $offset = ($nPerPage * $page)-$nPerPage;

    // List items
    $reponse = $bdd->prepare("SELECT patients.id, lastname, firstname, birthdate, phone, mail FROM patients LIMIT :lim OFFSET :offs"); 
    $reponse->bindValue('lim', $nPerPage, PDO::PARAM_INT);
    $reponse->bindValue('offs', $offset, PDO::PARAM_INT);
    $reponse->execute();
    $data = $reponse->fetchAll();
    $reponse->closeCursor();

    // Count items
    $countStatement = $bdd->query("SELECT COUNT(*) FROM patients"); 
    $count = $countStatement->fetch();
    $nbpages = ceil(intval($count[0]) / $nPerPage);

    return [
        "data" => $data,
        "count" => $count["COUNT(*)"],
        "nbpages" => $nbpages
    ];
}

function appointmentsList (){

    $bdd = dbConnect();
    $reponse = $bdd->query("SELECT appointments.id, lastname, firstname, phone, DATE_FORMAT(dateHour, '%d-%m-%Y %Hh:%imin') AS dateHour FROM patients 
    JOIN appointments ON patients.id = appointments.idPatients"); 
    $data = $reponse->fetchAll();
    $reponse->closeCursor();
    return $data;
}

function dbConnect ()
{
      try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost:3308;dbname=hospitale2n;charset=utf8', 'root', '');
        return $bdd;
    } catch (Exception $e)
    {

        die('Erreur : ' . $e->getMessage());
    }  
}

?>