<template>
    <jet-form-section @submitted="createAuditPlanType">
        <template #title>
            {{ __('audit_plan_type.form.title') }}
        </template>

        <template #description>{{ __('audit_plan_type.form.description') }}</template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" :value="__('audit_plan_type.form.fields.name')"/>
                <jet-input id="name" type="text" class="block w-full mt-1" v-model="form.name" autofocus/>
                <jet-input-error :message="form.errors.name" class="mt-2"/>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="description" :value="__('audit_plan_type.form.fields.description')"/>
                <jet-textarea id="description" type="text" class="block w-full mt-1" v-model="form.description"/>
                <jet-input-error :message="form.errors.description" class="mt-2"/>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="default_flow_key" :value="__('audit_plan_type.form.fields.default_flow_key')"/>
                <jet-input id="default_flow_key" type="text" class="block w-full mt-1" v-model="form.default_flow_key"/>
                <jet-input-error :message="form.errors.default_flow_key" class="mt-2"/>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="state" :value="__('audit_plan_type.form.fields.state')"/>
                <jet-checkbox name="state" v-model:checked="form.state" value="1"/>
                <jet-input-error :message="form.errors.state"/>
            </div>
        </template>

        <template #actions>
            <jet-button :class="{'opacity-25': form.processing}" :disabled="form.processing">
                {{ __('audit_plan_type.form.actions.create') }}
            </jet-button>
        </template>
    </jet-form-section>
</template>
<script>
import {defineComponent} from "vue";
import JetFormSection from "@/Jetstream/FormSection";
import JetLabel from "@/Jetstream/Label";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetButton from "@/Jetstream/Button";
import JetTextarea from "@/Jetstream/Textarea";
import JetCheckbox from "@/Jetstream/Checkbox";

export default defineComponent({
    components: {
        JetFormSection,
        JetLabel,
        JetInput,
        JetInputError,
        JetButton,
        JetTextarea,
        JetCheckbox
    },
    props: {
        audit_plan_type: {
            type: Object,
            required: false,
            default: {
                name: '',
                description: '',
                default_flow_key: '',
                state: ''
            }
        }
    },
    data() {
        return {
            form: this.$inertia.form(this.audit_plan_type)
        }
    },
    methods: {
        createAuditPlanType() {
            this.form
                .transform((data) => {
                    return {
                        ...data,
                        state: this.form.state.checked ? '1' : '0'
                    }
                })
                .post(this.route('audit_plan_types.store'), {
                    onFinish: () => this.form.reset()
                });
        }
    }
});
</script>
