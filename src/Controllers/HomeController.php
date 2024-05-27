<?php
namespace App\Controllers;

use App\Controller;
use App\Middleware\SessionMiddleware;
use App\Models\Journal;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        SessionMiddleware::check();
    }
    public function index()
    {
        $journals = [
            new Journal('Journal 1', '2024'),
            new Journal('Journal 2', '2025'),
            new Journal('Journal 3', '2026'),
            new Journal('Journal 4', '2027'),
            new Journal('Journal 5', '2028')
        ];
        //
        $this->render('home', ['journals' => $journals]);
    }
}