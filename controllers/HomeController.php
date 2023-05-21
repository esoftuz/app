<?php

namespace Controllers;

use Esoftuz\Framework\Controller;

class HomeController extends Controller
{
    public function index(): string
    {
        $message = "Salom dunyo";
        return view('home', compact('message'));
    }
}