<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
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
        $propertyTypes = PropertyType::query()->paginate(5);

        return view('admin.property_type.index',compact('propertyTypes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $property_type = new PropertyType();
            $property_type->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $property_type->save();
            return redirect(route('propertyType.index'));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('propertyType.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $propertyType = PropertyType::query()->where('id',$id)->first();
        return view('admin.property_type.show',compact('propertyType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propertyType = PropertyType::query()->where('id',$id)->first();
        return view('admin.property_type.edit',compact('propertyType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $propertyType = PropertyType::query()->where('id', $id)->first();
            $propertyType->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $propertyType->save();
            return redirect(route('propertyType.edit', $id));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('propertyType.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PropertyType::query()->where('id',$id)->delete();
        return redirect(route('propertyType.index'));
    }
}
