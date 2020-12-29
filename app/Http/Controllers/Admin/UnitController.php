<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Models\PropertyType;
use App\Models\Unit;
use App\Models\UnitType;
use App\Models\Utility;
use Illuminate\Http\Request;

class UnitController extends Controller
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
        $units = Unit::query()->paginate(5);

        return view('admin.unit.index', compact('units'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::query()->get();
        return view('admin.unit.create', compact('projects'));
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
            $unit = new Unit();
            $unit->project_id = $request->project_id;
            $unit->area = $request->area;
            $unit->from_price = $request->from_price;
            $unit->to_price = $request->to_price;
            $unit->image = $request->image;
            $unit->fill([
                'en' => [
                    'name' => $request->english_name,
                    'description' => $request->english_description
                ],
                'ar' => [
                    'name' => $request->arabic_name,
                    'description' => $request->arabic_description
                ]
            ]);
            $unit->save();
            $unitGallery = $request->unit_gallery;
            foreach ($unitGallery as $image){
                $unit->gallery()->create([
                    'image' => $image
                ]);
            }
            return redirect(route('unit.index'));
        } catch (\Exception $e) {
            return redirect(route('unit.index'));
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
        $property = Project::query()->where('id', $id)->first();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        return view('admin.unit.show', compact('property',
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
        $property = Unit::query()->where('id', $id)->first();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        return view('admin.unit.edit', compact('property',
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
            $property = Project::query()->where('id', $id)->first();
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
            return redirect(route('unit.edit', $id));
        } catch (\Exception $e) {
            \Log::info($e->getTraceAsString());
            return redirect(route('unit.index'));
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
        Project::query()->where('id', $id)->delete();
        return redirect(route('unit.index'));
    }
}
