<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Departments;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // This allows us to pass the departments to each and every view for the header to be dynamically populated
    // using $departments_head as the var in order to avoid potential conflicts
    public function __construct(){
        $departments_head = Departments::all();

        View::share('departments_head', $departments_head);
    }
}
