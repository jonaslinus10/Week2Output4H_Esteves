<?php

namespace App\Controllers;

class User extends BaseController
{
       /* To change the password of the User*/
    public function changePassword()
    {
        echo 'Password Changed';
    }

       /* To view the Profile of the User*/
    public function viewProfile()
    {
        echo 'Welcome User Jonas';
    }

       /* To delete a selected User*/
    public function deleteUser()
    {
        echo 'Selected user deleted.';
    }

       /* To add a User*/
    public function addUser()
    {
        echo 'User added';
    }
}
