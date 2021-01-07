<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DevelopmentCompanyRepository;
use App\Models\DevelopmentCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $companies = $this->developmentCompanyRepository->all();

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
        $company->slug = Str::slug($request->english_name);
        $company->fill([
           'en' => [
               'name' => $request->english_name,
               'description' => $request->english_description
           ],
           'ar' => [
               'name' => $request->arabic_name,
               'description' => $request->arabic_description
           ]
        ]);
        $company->save();
        return redirect(route('development.index'));
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
        $company->slug = Str::slug($request->english_name);
        $company->fill([
            'en' => [
                'name' => $request->english_name,
                'description' => $request->english_description
            ],
            'ar' => [
                'name' => $request->arabic_name,
                'description' => $request->arabic_description
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
        $developer = DevelopmentCompany::query()->where('id',$id)->first();
        $projects = $developer->project()->get();
        foreach ($projects as $project)
        {
            $project->units()->delete();
        }
        $developer->project()->delete();
        $developer->delete();
        return redirect(route('development.index'));
    }
}
