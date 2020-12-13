<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return $projects;
    }
}
