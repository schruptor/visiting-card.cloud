<?php

namespace App\Http\Controllers;
use Illuminate\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(Factory $view): View
    {
        return $view->make('dashboard');
    }
}
