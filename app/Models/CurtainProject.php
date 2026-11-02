<?php

namespace App\Http\Controllers;

use App\Models\CurtainProject;
use Illuminate\Http\Request;

class CurtainProjectController extends Controller
{
    public function index()
    {
        $projects = CurtainProject::all();

        return view('gallery', compact('projects'));
    }
}
