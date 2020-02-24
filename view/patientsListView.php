<?php $title = 'Hospital Management'; ?>

<?php ob_start(); ?>
    <body>
</div>
<h2 class="alert alert-info text-center" role="alert"> Patients' List</h2>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Details</th>
            <th scope="col">Delete</th>
        </tr>

    </thead>


    <?php
        foreach ($listData["data"] as $donnees) {
        ?>
    <tbody>
        <tr>
            <td> <?php echo $donnees['lastname']; ?></td>
            <td><?php echo $donnees['firstname']; ?></td>
            <td><?php echo $donnees['birthdate']; ?></td>
            <td><a href="profil-patients.php?id=<?php echo $donnees['id'] ?>"><i
                        class="fas fa-folder-plus text-warning"></i></a></td>
            <td><a href="liste-patients.php?delete_id=<?php echo $donnees['id'] ?>"><i
                        class="far fa-trash-alt text-danger"></i></a></td>
        </tr>
    </tbody>
    <?php
    }
    // $listData
    //     - data
    //     - count
    //     - nbpages
    ?>

</table>

<nav aria-label="Page navigation example" class="d-flex justify-content-center">
    <ul class="pagination">
        <?php

            
       for($i=1;$i<=$listData["nbpages"] ; $i++)  {
        ?>
        <li class="page-item"><a class="page-link" href="controller/patientsListController.php?page=<?= $i ?>"><?= $i ?></a></li>
        <?php    
        }
       ?>
    </ul>
</nav>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__.'/template.php'); ?>  