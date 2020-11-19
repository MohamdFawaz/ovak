<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
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
        $districts = District::query()->paginate(5);

        return view('admin.districts.index',compact('districts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.districts.create');
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
            $district = new District();
            $district->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $district->save();
            return redirect(route('district.index'));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('district.index'));
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
        $district = District::query()->where('id',$id)->first();
        return view('admin.districts.show',compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $district = District::query()->where('id',$id)->first();
        return view('admin.districts.edit',compact('district'));
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
            $district = District::query()->where('id', $id)->first();
            $district->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $district->save();
            return redirect(route('district.edit', $id));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('district.index'));
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
        District::query()->where('id',$id)->delete();
        return redirect(route('district.index'));
    }
}
