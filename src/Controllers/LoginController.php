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
        $sql = "SELECT * FROM `users`";
        $stmt = $this->db->query($sql);

        if($stmt->rowCount() > 0)
        {
            $results = $stmt->fetchAll();
            foreach($results as $result)
            {
                echo "id: " . $result["UserID"] . " - Name: " . $result["UserName"] . "<br>";
            }
        }
        else
        {
            echo "0 results found.";
        }

//        $this->render('login');
    }


}