<?php
require(__DIR__.'/../modele.php');

function home (){
   require(__DIR__.'/../view/affichageAccueilView.php'); 
}

function patientsListCtrl (){
    $listData = patientsList();
    require(__DIR__.'/../view/patientsListView.php');
}

function appointmentsListCtrl (){
    $aptList = appointmentsList();
    require(__DIR__.'/../view/appointmentsListView.php');
}


