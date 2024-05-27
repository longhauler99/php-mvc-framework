<?php
namespace App\Controllers;

use App\Controller;
use App\Core\Connection;

class LoginController extends Controller
{
    protected $db;
    public function __construct($config)
    {
        parent::__construct();
        $this->db = Connection::connect($config);
    }
    public function index(): void
    {
        $this->render('login');
    }

    public function register(): void
    {

        if(isset($_POST['signup-button']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['pwd']);

            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute())
            {
                header("Location: /");
                exit;
            }
            else
            {
                echo "Error: " . $stmt->errorInfo()[2];
            }
        }
    }

    public function login(): void
    {
        if(isset($_POST['login-button'])) {
            $username = $_POST['username'];
            $password = md5($_POST['pwd']);

            $sql = "SELECT UserName, Password FROM `users` WHERE UserName = '$username' AND Password = '$password'";
            $stmt = $this->db->query($sql);

            if($stmt->rowCount() > 0)
            {
                session_start();
                $_SESSION['acc_login'] = md5($username.$password);
                header("Location: /home");
            }
            else
            {
                echo "User not found.";
            }
        }
    }

    public function logout(): void
    {
        session_start();
        if(isset($_POST['logout-btn']))
        {
            session_destroy(); // or unset($_SESSION['acc_login']);

            header("Location: /");
            exit;
        }
    }
}