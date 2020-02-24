<?php
require('controller/controller.php');

if (isset($_GET['action'])){
    if ($_GET['action'] == 'patientsList'){
        patientsListCtrl();
    }
    elseif ($_GET['action'] == 'appointmentsList'){
        appointmentsListCtrl();
    }
}
else{
    home();
}