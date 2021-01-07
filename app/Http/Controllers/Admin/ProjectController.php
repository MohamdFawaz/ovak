<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\FinishType;
use App\Models\Project;
use App\Models\ProjectAmenity;
use App\Models\ProjectGallery;
use App\Models\PropertyType;
use App\Models\UnitType;
use App\Models\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use mysql_xdevapi\Exception;

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
        $properties = Project::query()->with('developer')->paginate(5);

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
            if (isset($amenities['image'])) {
                foreach ($amenities['image'] as $key => $amenityImage) {
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
            }
            $utilities = $request->utilities;
            if($utilities && count($utilities) && is_array($utilities)) {
                foreach ($utilities as $utility) {
                    $project->utility()->create([
                        'utility_id' => $utility
                    ]);
                }
            }
            $projectGallery = $request->project_gallery;
            if($projectGallery && count($projectGallery) && is_array($projectGallery)) {
                foreach ($projectGallery as $image) {
                    $project->gallery()->create([
                        'image' => $image
                    ]);
                }
            }
            return redirect(route('project.index'));
        } catch (\Exception $e) {
            dd($e->getMessage());
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
        $property = Project::query()->where('id', $id)->with(['amenity','utility','gallery'])->firstOrFail();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        $utilities = Utility::query()->get();
        return view('admin.project.show', compact('property',
            'districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes','utilities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Project::query()->where('id', $id)->with(['amenity','utility','gallery'])->firstOrFail();
        $districts = District::query()->get();
        $propertyTypes = PropertyType::query()->get();
        $companies = DevelopmentCompany::query()->get();
        $finishTypes = FinishType::query()->get();
        $unitTypes = UnitType::query()->get();
        $utilities = Utility::query()->get();
        return view('admin.project.edit', compact('property',
            'districts',
            'propertyTypes',
            'companies',
            'finishTypes',
            'unitTypes','utilities'));
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
            $project = Project::query()->where('id', $id)->with('amenity')->first();
            $project->district_id = $request->district_id;
            $project->property_type_id = $request->property_type_id;
            $project->development_company_id = $request->development_company_id;
            $project->finish_type_id = $request->finish_type_id;
            $project->unit_type_id = $request->unit_type_id;
            $project->google_map_link = $request->google_map_link;
            $project->delivery_date = $request->delivery_date;
            $project->image = $request->image;

            $project->fill([
                'en' => [
                    'name' => $request->english_name,
                    'description' => $request->arabic_description
                ],
                'ar' => [
                    'name' => $request->arabic_name,
                    'description' => $request->arabic_description
                ]
            ]);
            $project->save();
            $amenities = $request->amenities_files;
            $count = 0;
            foreach ($amenities as $key => $amenity) {
                if (is_numeric($key)){
                    $projectAmenity = $project->amenity->where('id',$key)->first();
                    $projectAmenity->image = isset($amenity['image']) ? reset($amenity['image']) : null;
                    $projectAmenity->save();
                    $projectAmenity->update([
                        'name:ar' => $amenity['name']['ar'],
                        'name:en' => $amenity['name']['en']
                    ]);
                }else{
                    if (isset($amenities['image'][$count]) && isset($amenities['name']['ar'][$count])) {
                        $project->amenity()->create([
                            'image' => $amenities['image'][$count],
                            'ar' => [
                                'name' => $amenities['name']['ar'][$count]
                            ],
                            'en' => [
                                'name' => $amenities['name']['en'][$count]
                            ]
                        ]);
                        $count++;
                    }
                }

            }
            $utilities = $request->utilities;
            if($utilities && count($utilities) && is_array($utilities)) {
                $project->utility()->delete();
                foreach ($utilities as $utility_id) {
                    $project->utility()->create([
                        'utility_id' => $utility_id
                    ]);
                }
            }
            $projectGallery = $request->project_gallery;
            if ($projectGallery && count($projectGallery) && is_array($projectGallery)){
                foreach ($projectGallery as $image){
                    $project->gallery()->create([
                        'image' => $image
                    ]);
                }
            }
            return redirect(route('project.edit', $id));
        } catch (\Exception $e) {
            dd($e->getMessage());
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
        try {
            $project = Project::query()->where('id', $id)->first();
            $project->units()->delete();
            $project->delete();
            return redirect(route('project.index'));
        }catch (\Exception $e){
            \Log::error($e->getTraceAsString());
            return redirect(route('project.index'));
        }
    }

    public function deleteAmenity($amenityId)
    {
        try {
            ProjectAmenity::query()->where('id',$amenityId)->delete();
            return redirect()->back();
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
        }
    }
    public function deleteImage($imageId)
    {
        try {
            ProjectGallery::query()->where('id',$imageId)->delete();
            return redirect()->back();
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
        }
    }
}
