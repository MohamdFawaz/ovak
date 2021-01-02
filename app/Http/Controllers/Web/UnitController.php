<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\Unit;
use App\Models\UnitType;

class UnitController extends Controller
{
    public function __construct()
    {

    }


    public function view($id)
    {
        $project_types = PropertyType::all();
        $districts = District::all();
        $development_companies = DevelopmentCompany::all();
        $finish_types = FinishType::all();
        $unit_types = UnitType::all();

        $unit = Unit::query()->with(['project','project.developer','property'])->where('id',$id)->first();
        return view_front('web.unit.view',compact('unit','finish_types',
            'project_types','development_companies','districts','unit_types'));
    }

    public function filter()
    {
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();
        $units = Unit::query()->with(['project','project.developer'])->get();
        $property_types = PropertyType::all();
        return view_front('web.filter_result',compact('development_companies','units','property_types'));
    }

    public function about()
    {
        return view_front('web.about');
    }

    public function consultancy()
    {
        return view_front('web.consultancy');
    }
}
