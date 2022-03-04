<template>
    <jet-form-section>
        <template #title>
            Create new audit plan type
        </template>

        <template #description>
            Create a new audit plan type to identify and classify audit plans
        </template>

        <template #form>
            <div class="col-span-6">

            </div>
        </template>
    </jet-form-section>
</template>

<script>
import {defineComponent} from "vue";
import JetFormSection from '@/Jetstream/FormSection'
import JetInput from '@/Jetstream/Input.vue'
import JetLabel from '@/Jetstream/Label.vue'

export default defineComponent({
    components: {
        JetFormSection,
        JetLabel,
        JetInput,
    }
});
</script>
