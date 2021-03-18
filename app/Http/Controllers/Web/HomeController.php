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
use App\Models\UserConsultation;
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
        $project_types = PropertyType::all();
        $districts = District::all();
        $development_companies = DevelopmentCompany::all();
        $finish_types = FinishType::all();
        $unit_types = UnitType::all();

        $delivery_dates = Project::query()->selectRaw('YEAR(delivery_date) as date')->groupBy('date')->get();
        $featured_projects = Project::all();
        $projects = Project::query()->with(['developer:id,slug,image', 'district', 'propertyType'])
            ->inRandomOrder()->limit(15)->get();

        return view('web.home.home', compact('project_types',
            'districts', 'development_companies', 'finish_types', 'unit_types',
            'featured_projects', 'projects','delivery_dates'));
    }

    public function filter()
    {
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();

        $query = Unit::query();
        if ($projectTypeId = request()->get('project_type_id')){
            $query->where('property_type_id',$projectTypeId);
        }
        if ($developerId = request()->get('development_company_id')){
            $query->with(['project' => function ($q) use ($developerId) {
                $q->where('development_company_id',$developerId);
            }])->whereHas('project',function ($q) use ($developerId) {
                $q->where('development_company_id',$developerId);
            });
        }else{
            $query->with('project.developer');
        }

        if ($districtId = request()->get('district_id')){
            $query->with(['project.district' => function ($q) use ($districtId) {
                $q->where('id',$districtId);
            }])->whereHas('project.district',function ($q) use ($districtId) {
                $q->where('id',$districtId);
            });
        }
        if ($finishTypeId = request()->get('finishing_type_id')){
            $query->with(['finishType' => function ($q) use ($finishTypeId) {
                $q->where('finish_type_id',$finishTypeId);
            }])->whereHas('finishType',function ($q) use ($finishTypeId) {
                $q->where('finish_type_id',$finishTypeId);
            });
        }
        if ($unitTypeId = request()->get('unit_type_id')){
            $query->with(['unitType' => function ($q) use ($unitTypeId) {
                $q->where('id',$unitTypeId);
            }])->whereHas('unitType',function ($q) use ($unitTypeId) {
                $q->where('id',$unitTypeId);
            });
        }
        if ($deliveryDate = request()->get('delivery_date')){
            $query->with(['project' => function ($q) use ($deliveryDate) {
                $q->whereYear('delivery_date',$deliveryDate);
            }])->whereHas('project',function ($q) use ($deliveryDate) {
                $q->whereYear('delivery_date',$deliveryDate);
            });
        }
        $fromPrice = !is_null(request()->get('price_from')) ? request()->get('price_from') : 0;
        $toPrice = !is_null(request()->get('price_to')) ? request()->get('price_to') : PHP_INT_MAX;
        if ($fromPrice && $toPrice){
            $query->where('from_price','>=', $fromPrice)
                ->where('to_price','<=', $toPrice);
        }

        $areaFrom = !is_null(request()->get('area_from')) ? request()->get('area_from') : 0;
        $areaTo = !is_null(request()->get('area_to')) ? request()->get('area_to') : PHP_INT_MAX;
        if ($areaFrom && $areaTo){
            $query->whereBetween('area',[$areaFrom,$areaTo]);
        }
        if(\Auth::check())
        {
            $units = $query->get();
            UserFilterLog::query()->create([
                'user_id' => \Auth::user()->id,
                'property_type_id' => $projectTypeId,
                'district_id' => $districtId,
                'development_company_id' => $developerId,
                'unit_type_id' => $unitTypeId
            ]);
        }else{
            $units = $query->limit(3)->get();
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
        $propertyTypes = PropertyType::query()->get();
        return view('web.consultancy', compact('districts', 'projects','propertyTypes'));
    }

    public function submitConsultancy(Request $request)
    {
        UserConsultation::query()->create($request->except('_token'));
        return response()->json('success');
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
        if ($request->entity_type === 'project'){
            $request->merge(['project_id' => $request->entity_id]);
            $request->request->remove('entity_type');
            $request->request->remove('entity_id');
        }else{
            $request->merge(['unit_id' => $request->entity_id]);
            $request->request->remove('entity_type');
            $request->request->remove('entity_id');
        }
        if (!UserAsking::query()->where($request->all())->exists()){
            UserAsking::query()->create($request->all());
        }
        return response()->json('success');
    }

    public function subscribeToNewsletter(Request $request)
    {
        if (!NewsletterSubscription::query()->where($request->except('_token','_method'))->exists()){
            NewsletterSubscription::query()->create($request->except('_token','_method'));
        }
        return redirect()->back();
    }

    public function switchLocale($lang)
    {
        \Session::put('locale',$lang);
        \Session::save();
        return redirect()->back();
    }
}
