<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Property;
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

        $featured_projects = Property::all();
        return view('web.home',compact('project_types',
            'districts','development_companies','finish_types','unit_types',
            'featured_projects'));
    }
}
