<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Mail\NewsletterMail;
use App\Models\NewsletterSubscription;
use App\Models\User;
use App\Models\UserAsking;
use App\Models\UserCalculationLog;
use App\Models\UserConsultation;
use App\Models\UserFilterLog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $users = $this->userRepository->all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function calculationList()
    {
        $calculations = UserCalculationLog::query()->with('user')->get();
        return view('admin.user.calculationLogs',compact('calculations'));
    }

    public function askingList()
    {
        $askings = UserAsking::query()->with(['user','project','unit'])->get();
        return view('admin.user.askings',compact('askings'));
    }
    public function newsletterSubscription()
    {
        $newsletters = NewsletterSubscription::query()->get();
        return view('admin.user.newsletter',compact('newsletters'));
    }

    public function sendNewsletter(Request $request)
    {
        $emails = NewsletterSubscription::query()->pluck('email');
        foreach ($emails as $email){
            \Mail::to($email)->send(new NewsletterMail($request->email_content, $request->subject));
        }
        return redirect(route('user.newsletter'));
    }


    public function filtersList()
    {
        $user_filters = UserFilterLog::query()->with(['propertyType','district','developer','unitType'])
            ->latest()->get();
        return view('admin.user.filters',compact('user_filters'));
    }

    public function consultationList()
    {
        $user_consultations = UserConsultation::query()->with(['propertyType','district','developer','unitType'])
            ->latest()->get();
        return view('admin.user.consultations',compact('user_consultations'));
    }
}
