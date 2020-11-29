<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use App\Models\District;
use App\Models\PropertyType;
use App\Models\UnitType;
use Illuminate\Http\Request;

class UnitTypeController extends Controller
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
        $unitTypes = UnitType::query()->paginate(5);

        return view('admin.unit_type.index',compact('unitTypes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unit_type.create');
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
            $unit_type = new UnitType();
            $unit_type->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $unit_type->save();
            return redirect(route('unitType.index'));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('unitType.index'));
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
        $unitType = UnitType::query()->where('id',$id)->first();
        return view('admin.unit_type.show',compact('unitType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unitType = UnitType::query()->where('id',$id)->first();
        return view('admin.unit_type.edit',compact('unitType'));
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
            $unitType = UnitType::query()->where('id', $id)->first();
            $unitType->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $unitType->save();
            return redirect(route('unitType.edit', $id));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('unitType.index'));
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
        UnitType::query()->where('id',$id)->delete();
        return redirect(route('unitType.index'));
    }
}
