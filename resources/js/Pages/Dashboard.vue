<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
                Dashboard
            </h2>
        </template>

        <div class="py-12 lg:flex items-center justify-center w-full">
            <Card v-for="audit_plan in auditPlans" :key="audit_plan.id" :title="audit_plan.link">
                <template #title>
                    <InertiaLink :href="route('audit_plan_types.show', {id: audit_plan.id})">
                        {{ audit_plan.name }}
                    </InertiaLink>
                </template>
                <template #description>
                    {{ audit_plan.description }}
                </template>
            </Card>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import {InertiaLink} from '@inertiajs/inertia-vue3'
import Card from '../Shared/Card'
import JetNavLink from "@/Jetstream/NavLink";

export default defineComponent({
    components: {
        AppLayout,
        Card,
        InertiaLink,
        JetNavLink,
    },
    props: ["audit_plans"],
    computed: {
        auditPlans() {
            return this.audit_plans;
        }
    }
})
</script>
