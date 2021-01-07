<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevelopmentCompany;
use App\Models\NewsletterSubscription;
use App\Models\Project;
use App\Models\Unit;
use App\Models\User;
use App\Models\UserAsking;
use App\Models\UserCalculationLog;
use App\Models\UserConsultation;
use App\Models\UserFilterLog;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users_count = User::query()->count();
        $developers_count = DevelopmentCompany::query()->count();
        $projects_count = Project::query()->count();
        $units_count = Unit::query()->count();
        $user_askings_count = UserAsking::query()->count();
        $user_consultation_count = UserConsultation::query()->count();
        $user_calculation_count = UserCalculationLog::query()->count();
        $user_newsletters = NewsletterSubscription::query()->count();

        $latest_user_filers = UserFilterLog::query()->with(['propertyType','district','developer','unitType'])
            ->latest()->limit(5)->get();

        return view('admin.dashboard',compact('users_count','developers_count',
            'projects_count','units_count','user_askings_count','user_consultation_count','user_calculation_count',
        'user_newsletters','latest_user_filers'));
    }

    public function userAuthentications()
    {
        $this_week_authentications = [];
        $last_week_authentications = [];
        $users = User::query()->get();

        $this_week = Carbon::now()->subWeek();

        $last_week = Carbon::now()->subWeeks(2);

        $current = Carbon::now();

        $currentWeekPeriod = CarbonPeriod::create($this_week,$current);

        $lastWeekPeriod = CarbonPeriod::create($last_week,$this_week);

        foreach ($currentWeekPeriod as $weekDay => $period){
            $this_week_authentications[$period->toDate()->format("Y-m-d")] = 0;
            foreach ($users as $user){
                $this_week_authentications[$period->toDate()->format("Y-m-d")] += $user->authentications()
                    ->whereDate('login_at',$period)->sum("id");
            }
        }

        foreach ($lastWeekPeriod as $weekDay => $period){
            $last_week_authentications[$period->toDate()->format("Y-m-d")] = 0;
            foreach ($users as $user){
                $last_week_authentications[$period->toDate()->format("Y-m-d")] += $user->authentications()
                    ->whereDate('login_at',$period)->sum("id");
            }
        }
        return response()->json(['this_week_authentications' => $this_week_authentications,
            'last_week_authentications' => $last_week_authentications]);
    }
}
