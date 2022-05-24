<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Estate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function managerHome()
    {
        return view('manager');
    }

    public function ownerHome()
    {
        return view('owner.index');
    }

    public function tenantHome()
    {
        return view('welcome');
    }

    public function main()
    {
        $estates = Estate::all();
        $todayAppointments = Appointment::where('date', '=', Carbon::today())->get();

        $appointments = Appointment::where('status', 'available')->where('date', '!=', Carbon::today())->get();
        return view('welcome', compact('appointments', 'todayAppointments', 'estates'));
    }

}
