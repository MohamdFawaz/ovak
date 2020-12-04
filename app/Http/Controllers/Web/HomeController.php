<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\UnitType;

class HomeController extends Controller
{
    public function __construct()
    {

    }


    public function home()
    {
        $project_types = PropertyType::all();
        $districts = District::all();
        $development_companies = DevelopmentCompany::all();
        $finish_types = FinishType::all();
        $unit_types = UnitType::all();

        $featured_projects = Project::all();
        $projects = Project::query()->with(['developer:id,slug,image','district','propertyType'])->inRandomOrder()->get();

        return view('web.home',compact('project_types',
            'districts','development_companies','finish_types','unit_types',
            'featured_projects','projects'));
    }

    public function filter()
    {
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();
        return view('web.filter_result',compact('development_companies'));
    }

    public function about()
    {
        return view('web.about');
    }

    public function counsultancy()
    {
        require view('web.counsultancy');
    }
}
