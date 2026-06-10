<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        Application::create([
            'user_id' => auth()->id(),
            'address' => $request->address,
            'repair_type' => $request->repair_type,
            'payment_type' => $request->payment_type,
            'repair_date' => $request->repair_date,
            'status' => 'Новая'
        ]);

        return redirect('/my-applications');
    }

    public function index()
    {
        $applications = Application::where(
            'user_id',
            auth()->id()
        )->get();

        return view(
            'applications.index',
            compact('applications')
        );
    }
}