<?php $title = 'Hospital Management'; ?>

<?php ob_start(); ?>
<h2 class="alert alert-info text-center" role="alert">Appointments'list</h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Date hour</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        foreach ($aptList as $donnees) {
        ?>
        <tbody>
            <tr>
                <td> <?php echo $donnees['lastname']; ?></td>
                <td><?php echo $donnees['firstname']; ?></td>
                <td><?php echo $donnees['phone']; ?></td>
                <td><?php echo $donnees['dateHour']; ?></td>
                <td><a href="rendezvous.php?id=<?php echo $donnees['id'] ?>"><i
                            class="fas fa-exchange-alt text-primary"></i></a></td>
                <td><a href="liste-rendezvous.php?delete_id=<?php echo $donnees['id'] ?>"><i
                            class="far fa-trash-alt text-danger"></i></a></td>
            </tr>

            <?php           
        }
?>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__.'/template.php'); ?>  