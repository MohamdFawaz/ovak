<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\NewsletterSubscription;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\Unit;
use App\Models\UnitType;
use App\Models\User;
use App\Models\UserAsking;
use App\Models\UserCalculationLog;
use App\Models\UserFilterLog;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }


    public function home()
    {
//        dd(\Auth::check());
        $project_types = PropertyType::all();
        $districts = District::all();
        $development_companies = DevelopmentCompany::all();
        $finish_types = FinishType::all();
        $unit_types = UnitType::all();

        $featured_projects = Project::all();
        $projects = Project::query()->with(['developer:id,slug,image', 'district', 'propertyType'])->inRandomOrder()->get();

        return view('web.home.home', compact('project_types',
            'districts', 'development_companies', 'finish_types', 'unit_types',
            'featured_projects', 'projects'));
    }

    public function filter()
    {
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();

        $filterUnitsQuery = Unit::query();
        if ($projectTypeId = request()->get('project_type')){
            $filterUnitsQuery->with(['project' => function($q) use ($projectTypeId) {
                $q->where('property_type_id',$projectTypeId);
            }])->whereHas('project', function($q) use ($projectTypeId) {
                $q->where('property_type_id',$projectTypeId);
            });
        }
        if ($developerId = request()->get('development_company')){
            $filterUnitsQuery->with(['project' => function ($q) use ($developerId) {
                $q->where('development_company_id',$developerId);
            }])->whereHas('project',function ($q) use ($developerId) {
                $q->where('development_company_id',$developerId);
            });
        }else{
            $filterUnitsQuery->with('project.developer');
        }

        if ($districtId = request()->get('district_id')){
            $filterUnitsQuery->with(['project.district' => function ($q) use ($districtId) {
                $q->where('id',$districtId);
            }])->whereHas('project.district',function ($q) use ($districtId) {
                $q->where('id',$districtId);
            });
        }
        if ($finishTypeId = request()->get('finishing_type_id')){
            $filterUnitsQuery->with(['project.finishType' => function ($q) use ($finishTypeId) {
                $q->where('id',$finishTypeId);
            }])->whereHas('project.finishType',function ($q) use ($finishTypeId) {
                $q->where('id',$finishTypeId);
            });
        }
        if ($unitTypeId = request()->get('unit_type_id')){
            $filterUnitsQuery->with(['project.unitType' => function ($q) use ($unitTypeId) {
                $q->where('id',$unitTypeId);
            }])->whereHas('project.unitType',function ($q) use ($unitTypeId) {
                $q->where('id',$unitTypeId);
            });
        }
        $units = $filterUnitsQuery->get();
        if(\Auth::check())
        {
            UserFilterLog::query()->create(['user_id' => \Auth::user()->id]);
        }
        return view('web.filter_result', compact('development_companies', 'units'));
    }

    public function about()
    {
        return view('web.about');
    }

    public function consultancy()
    {
        $districts = District::query()->get();
        $projects = Project::query()->get();
        return view('web.consultancy', compact('districts', 'projects'));
    }

    public function contactUs(Request $request)
    {
        Contact::query()->create($request->except('_method', '_token'));
        return redirect()->back();
    }

    public function logUserCalculation(Request $request)
    {
        UserCalculationLog::query()->create($request->all());
        return response()->json('success');
    }

    public function logUserAsking(Request $request)
    {
        UserAsking::query()->create($request->all());
        return response()->json('success');
    }

    public function subscribeToNewsletter(Request $request)
    {
        NewsletterSubscription::query()->create($request->except('_token','_method'));
        return redirect()->back();
    }
}
