<?php

namespace Controllers;

use Lawana\Controller\BaseController,
    Lawana\Utils\Request;
use Models\Example;

class ExampleController extends BaseController
{

    public function index(Request $request)
    {
        Example::get();
        return view('home.welcome-page');
    }
}
