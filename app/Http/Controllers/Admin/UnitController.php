<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Unit;
use App\Models\UnitGallery;
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
        $units = Unit::query()->with('project')->get();

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
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        $properties = Property::query()->get();
        return view('admin.unit.create', compact('projects','finishTypes','unitTypes','properties'));
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
            $unit->unit_type_id = $request->unit_type_id;
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
            if ($unitGallery && count($unitGallery) && is_array($unitGallery)){
                foreach ($unitGallery as $image){
                    $unit->gallery()->create([
                        'image' => $image
                    ]);
                }
            }
            $finish_type_ids = $request->finish_type_ids;
            foreach ($finish_type_ids as $finish_type_id){
                    $unit->finishType()->create([
                        'finish_type_id' => $finish_type_id
                    ]);
            }
            $properties = $request->properties;
            foreach ($properties as $property_id => $value)
            {
                if ($value){
                    $unit->property()->create([
                        'property_id' => $property_id,
                        'value' => $value
                    ]);
                }
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
        $unit = Unit::query()->where('id', $id)->first();
        $projects = Project::query()->get();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        $properties = Property::query()->get();

        return view('admin.unit.show', compact('unit',
            'districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes','projects','properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::query()->with('property')->where('id', $id)->first();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        $projects = Project::query()->get();
        $properties = Property::query()->get();
        return view('admin.unit.edit', compact('unit',
            'districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes','projects','properties'));
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
            $unit = Unit::query()->where('id', $id)->first();
            $unit->project_id = $request->project_id;
            $unit->unit_type_id = $request->unit_type_id;
            $unit->area = $request->area;
            $unit->from_price = $request->from_price;
            $unit->to_price = $request->to_price;
            $unit->image = $request->image;

            $unit->fill([
                'en' => [
                    'name' => $request->english_name,
                    'description' => $request->arabic_description
                ],
                'ar' => [
                    'name' => $request->arabic_name,
                    'description' => $request->arabic_description
                ]
            ]);
            $unit->save();
            $finish_type_ids = $request->finish_type_ids;
            if (count($finish_type_ids)) {
                $unit->finishType()->delete();
                foreach ($finish_type_ids as $finish_type_id) {
                    $unit->finishType()->create([
                        'finish_type_id' => $finish_type_id
                    ]);
                }
            }
            $properties = $request->properties;
            $unit->property()->delete();
            foreach ($properties as $property_id => $value)
            {
                if ($value){
                    $unit->property()->create([
                        'property_id' => $property_id,
                        'value' => $value
                    ]);
                }
            }
            return redirect(route('unit.edit', $id));
        } catch (\Exception $e) {
            \Log::info($e->getTraceAsString());
            return redirect(route('unit.edit',$unit->id));
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
        Unit::query()->where('id', $id)->delete();
        return redirect(route('unit.index'));
    }

    public function deleteImage($imageId)
    {
        try {
            UnitGallery::query()->where('id',$imageId)->delete();
            return redirect()->back();
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
        }
    }
}
