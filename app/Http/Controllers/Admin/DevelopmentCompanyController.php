<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use Illuminate\Http\Request;

class DevelopmentCompanyController extends Controller
{
    private $developmentCompanyRepository;

    public function __construct(DevelopmentCompanyRepository $developmentCompanyRepository)
    {
        $this->developmentCompanyRepository = $developmentCompanyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $companies = $this->developmentCompanyRepository->paginate(5);

        return view('admin.development_companies.index',compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.development_companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new DevelopmentCompany();
        $company->image = $request->image;
        $company->fill([
           'en' => [
               'name' => $request->english_name
           ],
           'ar' => [
               'name' => $request->arabic_name
           ]
        ]);
        $company->save();
        return redirect(route('development_companies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = DevelopmentCompany::query()->where('id',$id)->first();
        return view('admin.development_companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = DevelopmentCompany::query()->where('id',$id)->first();
        return view('admin.development_companies.edit',compact('company'));
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
        $company = DevelopmentCompany::query()->where('id',$id)->first();
        $company->image = $request->image;
        $company->fill([
            'en' => [
                'name' => $request->english_name
            ],
            'ar' => [
                'name' => $request->arabic_name
            ]
        ]);
        $company->save();
        return redirect(route('development.edit',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DevelopmentCompany::query()->where('id',$id)->delete();
        return redirect(route('development.index'));
    }
}
