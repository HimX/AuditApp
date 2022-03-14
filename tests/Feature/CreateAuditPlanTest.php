<?php

namespace Tests\Feature;

use App\Models\AuditPlan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class CreateAuditPlanTest extends TestCase
{
    use RefreshDatabase;

    public function test_audit_plan_form_can_be_displayed()
    {
        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        $response = $this->get('/audit_plans/create');

        $response->assertInertia(function (Assert $page) {
            return $page
                ->component('AuditPlans/Create');
        });
    }

    public function test_audit_plan_can_be_created()
    {
        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        $data = AuditPlan::factory()->raw();
        $response = $this->post('/audit_plan', $data);

        $response->assertStatus(200);
    }
}
