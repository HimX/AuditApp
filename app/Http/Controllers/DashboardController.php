<?php

namespace App\Http\Controllers;

use App\Models\AuditPlanType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Retrieves information to build the dashboard view
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('Dashboard', [
            'audit_plans' => AuditPlanType::all()->map(function ($planType) {
                return [
                    'id' => $planType->id,
                    'name' => $planType->name,
                    'description' => $planType->description,
                ];
            })
        ]);
    }
}
