<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuditPlanTypeRequest;
use App\Models\AuditPlanType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuditPlanTypeController extends Controller
{
    /**
     * Index for audit plan types
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('AuditPlanTypes/Index', [
            'audit_plan_types' => AuditPlanType::all()->map(function ($planType) {
                return [
                    'id' => $planType->id,
                    'name' => $planType->name,
                    'description' => $planType->description,
                ];
            })
        ]);
    }

    /**
     * @param Request $request
     * @return \Inertia\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('AuditPlanTypes/Create');
    }

    /**
     * Creates a new audit plan type
     *
     * @param StoreAuditPlanTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAuditPlanTypeRequest $request)
    {
        $auditPlanType = AuditPlanType::create($request->only([
            'name', 'description', 'default_flow_key', 'state'
        ]));
        return redirect()->route('audit_plan_types.edit', ['audit_plan_type' => $auditPlanType]);
    }

    public function show(AuditPlanType $audit_plan_types)
    {
        return Inertia::render('AuditPlanTypes/Show', [
            'audit_plan_type' => $audit_plan_types
        ]);
    }

    public function edit(AuditPlanType $audit_plan_type)
    {
        return Inertia::render('AuditPlanTypes/Edit', [
            'audit_plan_type' => $audit_plan_type
        ]);
    }
}
