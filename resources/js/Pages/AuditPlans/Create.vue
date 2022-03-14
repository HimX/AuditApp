<template>
    <jet-app-layout :title="__('audit_plans.new')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('audit_plans.new') }}
            </h2>
        </template>

        <div>

        </div>
    </jet-app-layout>
</template>
<script>
import {defineComponent} from "vue";
import JetAppLayout from "@/Layouts/AppLayout";

export default defineComponent({
    components: {
        JetAppLayout,
    }
});
</script>
