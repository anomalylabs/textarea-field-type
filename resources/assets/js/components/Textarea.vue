<template>
    <textarea
        :name="name"
        :value="value"
        :placeholder="placeholder"/>
</template>

<script>
import autosize from 'autosize';

export default {
    props: {
        name: String,
        value: String,
        placeholder: String,
        autogrow: Boolean,
    },
    mounted() {
        
        if (this.autogrow) {
            autosize(this.$el);
        }
    },
};
</script>
