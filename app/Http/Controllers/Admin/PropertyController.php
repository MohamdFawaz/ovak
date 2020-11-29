<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\UnitType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $properties = Property::query()->paginate(5);

        return view('admin.property.index', compact('properties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        return view('admin.property.create', compact('districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return mixed|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $property = new Property();
            $property->district_id = $request->district_id;
            $property->property_type_id = $request->property_type_id;
            $property->development_company_id = $request->development_company_id;
            $property->finish_type_id = $request->finish_type_id;
            $property->unit_type_id = $request->unit_type_id;
            $property->area = $request->area;
            $property->price = $request->price;
            $property->delivery_date = $request->delivery_date;
            $property->image = $request->image;

            $property->fill([
                'en' => [
                    'name' => $request->english_name,
                    'description' => $request->arabic_description
                ],
                'ar' => [
                    'name' => $request->arabic_name,
                    'description' => $request->arabic_description
                ]
            ]);
            $property->save();
            return redirect(route('property.index'));
        } catch (\Exception $e) {
            \Log::info($e->getTraceAsString());
            return redirect(route('property.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::query()->where('id', $id)->first();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        return view('admin.property.show', compact('property',
            'districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::query()->where('id', $id)->first();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        return view('admin.property.edit', compact('property',
            'districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $property = Property::query()->where('id', $id)->first();
            $property->district_id = $request->district_id;
            $property->property_type_id = $request->property_type_id;
            $property->development_company_id = $request->development_company_id;
            $property->finish_type_id = $request->finish_type_id;
            $property->unit_type_id = $request->unit_type_id;
            $property->area = $request->area;
            $property->price = $request->price;
            $property->delivery_date = $request->delivery_date;
            $property->image = $request->image;

            $property->fill([
                'en' => [
                    'name' => $request->english_name,
                    'description' => $request->arabic_description
                ],
                'ar' => [
                    'name' => $request->arabic_name,
                    'description' => $request->arabic_description
                ]
            ]);
            $property->save();
            return redirect(route('property.edit', $id));
        } catch (\Exception $e) {
            \Log::info($e->getTraceAsString());
            return redirect(route('property.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::query()->where('id', $id)->delete();
        return redirect(route('property.index'));
    }
}
