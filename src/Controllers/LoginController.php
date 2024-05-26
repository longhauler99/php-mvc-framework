<?php
namespace App\Controllers;

use App\Controller;
use App\Core\Connection;

class LoginController extends Controller
{
    protected $db;
    public function __construct($config)
    {
        $this->db = Connection::connect($config);
    }
    public function index()
    {
        $this->render('login');
    }

    public function login()
    {
        if(isset($_POST['login-button']))
        {
            $username = $_POST['username'];
            $password = $_POST['pwd'];

            $sql = "SELECT UserName, Password FROM `users` WHERE UserName = '$username' AND Password = '$password'";
            $stmt = $this->db->query($sql);

            if($stmt->rowCount() > 0)
            {
                header("Location: /home");
            }
            else
            {
                echo "User not found.";
            }
        }
    }
}