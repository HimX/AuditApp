<?php

namespace Tests\Feature;

use App\Models\AuditPlanType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\Assert;
use Tests\TestCase;

class CreateAuditPlanTypeTest extends TestCase
{
    use RefreshDatabase;

    public function test_audit_plan_type_form_can_be_displayed()
    {
        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        $response = $this->get('audit_plan_types/create');

        $response->assertInertia(function (Assert $page) {
            return $page
                ->component('AuditPlanTypes/Create');
        });
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_audit_plan_type_can_be_created()
    {
        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        $data = AuditPlanType::factory()->raw();
        $response = $this->post('/audit_plan_types', $data);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'name',
            'description',
            'default_flow_key',
            'state',
        ]);
    }
}
