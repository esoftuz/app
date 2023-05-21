<?php

namespace Controllers;

use Esoftuz\Framework\Controller;
use Esoftuz\Framework\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $data = $request->all();

        dd($data, "test");
    }

    public function console($args)
    {
        dd($args);
    }
}