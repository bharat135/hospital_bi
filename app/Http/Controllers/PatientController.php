<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
   
    public function index()
    {
        $breadcrumbs = [
            ['link' => "/patient/index", 'name' => "Patients"]
        ];
        return view('/patient/index', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function create()
    {
        $breadcrumbs = [
            ['link' => "/patient/index", 'name' => "Patients"], ['name' => "Add Patients"]
        ];
        return view('/patient/create', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function details()
    {
        $breadcrumbs = [
            ['link' => "/patient/index", 'name' => "Patients"], ['name' => "Calls"]
        ];
        return view('/patient/details', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
