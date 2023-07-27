<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogActivityController extends Controller
{
    public function index(Request $request)
    {
        $logs = Activity::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.log_activity', compact('logs'));
    }
}
