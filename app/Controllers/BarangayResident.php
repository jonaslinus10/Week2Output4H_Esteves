<?php

namespace App\Controllers;

class BarangayResident extends BaseController
{

       /* To report a suspicious person*/
    public function reportPerson()
    {
        echo 'Person Reported';
    }
        /* To view the reported person list*/
    public function viewReportedPerson()
    {
        echo 'List of Reported Person:';
    }
        /* To delete a reported person in the list*/
    public function deleteReportedPerson()
    {
        echo 'Reported Person Deleted.';
    }
        /* To change details of a reported person in the list*/
    public function changeReportedPerson()
    {
        echo 'Change Applied Successfully.';
    }
}
