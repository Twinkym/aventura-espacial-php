<?php  

namespace App\Controllers;

class HomeController {
    public function index() {
        // Create a new instance of the HomeController class and attach it to the current controller instance.
        require_once 'views/home.php';
    }
}