<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private AdminController $adminController;

    private UserController $userController;

    /**
     * @param AdminController $adminController
     * @param UserController $userController
     */
    public function __construct(AdminController $adminController, UserController $userController)
    {
        $this->adminController = $adminController;
        $this->userController = $userController;
    }


    public function home(){
        if (session('is_admin'))
        {
            return $this->adminController->getAllAttendance();
        } else {
            return $this->userController->getUserAttendance();
        }
    }
}
