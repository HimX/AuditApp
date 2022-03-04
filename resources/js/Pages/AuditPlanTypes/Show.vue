<template>
    <app-layout :title="audit_plan_type.name">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ audit_plan_type.name }}
            </h2>
        </template>

        {{ audit_plan_type }}
    </app-layout>
</template>
<script>
import {defineComponent} from "vue";
import AppLayout from "@/Layouts/AppLayout";

export default defineComponent({
    components: {
        AppLayout
    },
    props: ["audit_plan_type"]
});
</script>
