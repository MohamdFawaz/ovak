<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\Project;
use App\Models\PropertyType;

class ProjectController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        $projects = Project::query()->with(['developer:id,slug,image','district','propertyType'])->get();
        $districts = District::all();
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();
        return view('web.project.index',compact('projects','development_companies','districts'));
    }

    public function projectPage($id)
    {
        $project = Project::query()->with(['district','developer','propertyType','property','amenity','utility'])->find($id);
        return view('web.project.view',compact('project'));
    }
}
