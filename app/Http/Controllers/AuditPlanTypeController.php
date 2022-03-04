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
     * @return void
     */
    public function store(StoreAuditPlanTypeRequest $request)
    {
        $auditPlanType = AuditPlanType::create($request->all());
        redirect()->route('audit_plan_type.update', ['planType' => $auditPlanType]);
    }

    public function show(AuditPlanType $planType)
    {
        return Inertia::render('AuditPlanTypes/Show', [
            'audit_plan_type' => $planType
        ]);
    }
}
