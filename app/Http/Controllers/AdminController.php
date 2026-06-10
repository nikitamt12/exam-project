<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $applications = Application::with('user')->get();

        return view(
            'admin.index',
            compact('applications')
        );
    }

    public function changeStatus(Request $request, $id)
    {
        $application = Application::findOrFail($id);

        $application->status = $request->status;

        $application->save();

        return back();
    }
}