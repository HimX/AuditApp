<template>
    <jet-app-layout :title="__('audit_plan_type.new')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('audit_plan_type.new') }}
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <create-audit-plan-type-form/>
            </div>
        </div>
    </jet-app-layout>
</template>

<script>
import {defineComponent} from "vue";
import JetAppLayout from "@/Layouts/AppLayout";
import CreateAuditPlanTypeForm from "@/Pages/AuditPlanTypes/Partials/CreateAuditPlanTypeForm";

export default defineComponent({
    components: {
        JetAppLayout,
        CreateAuditPlanTypeForm
    }
});
</script>
