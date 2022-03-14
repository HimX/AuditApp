<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuditPlanController extends Controller
{
    public function create(Request $request)
    {
        return Inertia::render('AuditPlans/Create');
    }
}
