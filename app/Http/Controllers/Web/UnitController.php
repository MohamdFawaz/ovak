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
        $delivery_dates = Project::query()->selectRaw('YEAR(delivery_date) as date')->groupBy('date')->get();

        $unit = Unit::query()->with(['project','project.developer','property'])->where('id',$id)->first();
        return view('web.unit.view',compact('unit','finish_types',
            'project_types','development_companies','districts','unit_types', 'delivery_dates'));
    }

    public function filter()
    {
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();
        $units = Unit::query()->with(['project','project.developer'])->get();
        $property_types = PropertyType::all();
        return view('web.filter_result',compact('development_companies','units','property_types'));
    }

    public function about()
    {
        return view('web.about');
    }

    public function consultancy()
    {
        return view('web.consultancy');
    }
}
