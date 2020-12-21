<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Models\PropertyType;
use App\Models\UnitType;
use App\Models\Utility;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
        $properties = Project::query()->paginate(5);

        return view('admin.project.index', compact('properties'));

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
        $utilities = Utility::query()->get();
        return view('admin.project.create', compact('districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes','utilities'));
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
            $project = new Project();
            $project->district_id = $request->district_id;
            $project->property_type_id = $request->property_type_id;
            $project->development_company_id = $request->development_company_id;
            $project->finish_type_id = $request->finish_type_id;
            $project->unit_type_id = $request->unit_type_id;
            $project->delivery_date = $request->delivery_date;
            $project->image = $request->image;
            $project->google_map_link = $request->google_map_link;
            $project->fill([
                'en' => [
                    'name' => $request->english_name,
                    'description' => $request->english_description,
                    'address' => $request->english_address
                ],
                'ar' => [
                    'name' => $request->arabic_name,
                    'description' => $request->arabic_description,
                    'address' => $request->arabic_address
                ]
            ]);
            $project->save();
            $amenities = $request->amenities_files;
            foreach ($amenities['image'] as $key => $amenityImage){
                $project->amenity()->create([
                    'image' => $amenityImage,
                    'ar' => [
                        'name' => $amenities['name']['ar'][$key]
                    ],
                    'en' => [
                        'name' => $amenities['name']['en'][$key]
                    ]
                ]);
            }
            $utilities = $request->utilities;
            foreach ($utilities as $utility){
                $project->utility()->create([
                    'utility_id' => $utility
                ]);
            }
            $projectGallery = $request->project_gallery;
            foreach ($projectGallery as $image){
                $project->gallery()->create([
                    'image' => $image
                ]);
            }
            return redirect(route('project.index'));
        } catch (\Exception $e) {
            return redirect(route('project.index'));
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
        return view('admin.project.show', compact('property',
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
        $property = Project::query()->where('id', $id)->first();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        return view('admin.project.edit', compact('property',
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
            return redirect(route('project.edit', $id));
        } catch (\Exception $e) {
            \Log::info($e->getTraceAsString());
            return redirect(route('project.index'));
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
        return redirect(route('project.index'));
    }
}
