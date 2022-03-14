<template>
    <select
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <option value=""></option>
    </select>
</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
    props: {
        modelValue: {
            type: String
        }
    },
    emits: ['update:modelValue'],
    methods: {
        focus() {
            this.$refs.input.focus();
        }
    }
});
</script>
