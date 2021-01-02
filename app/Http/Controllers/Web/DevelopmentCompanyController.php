<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\Project;

class DevelopmentCompanyController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        $development_companies = DevelopmentCompany::all();

        return view_front('web.developer.index',compact('development_companies'));
    }

    public function developerPage($slug)
    {
        $developer = DevelopmentCompany::query()->where('slug',$slug)->first();
        $development_companies = DevelopmentCompany::query()->inRandomOrder()->get();
        $projects = Project::query()->where('development_company_id',$developer->id)->inRandomOrder()->get();
        return view_front('web.developer.view',compact('developer','development_companies','projects'));
    }
}
