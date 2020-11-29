<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use App\Models\FinishType;
use Illuminate\Http\Request;

class FinishTypeController extends Controller
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
        $finish_types = FinishType::query()->paginate(5);

        return view('admin.finish_type.index',compact('finish_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.finish_type.create');
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
            $finish_type = new FinishType();
            $finish_type->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $finish_type->save();
            return redirect(route('finishType.index'));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('finishType.index'));
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
        $finish_type = FinishType::query()->where('id',$id)->first();
        return view('admin.finish_type.show',compact('finish_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finish_type = FinishType::query()->where('id',$id)->first();
        return view('admin.finish_type.edit',compact('finish_type'));
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
            $finish_type = FinishType::query()->where('id', $id)->first();
            $finish_type->fill([
                'en' => [
                    'name' => $request->english_name
                ],
                'ar' => [
                    'name' => $request->arabic_name
                ]
            ]);
            $finish_type->save();
            return redirect(route('finishType.edit', $id));
        }catch (\Exception $e){
            \Log::info($e->getTraceAsString());
            return redirect(route('finishType.index'));
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
        FinishType::query()->where('id',$id)->delete();
        return redirect(route('finishType.index'));
    }
}
