<script>
export default {
    props: {
        language: {
            type: String,
            required: true
        },
        linenumber: {
            type: Boolean,
            required: false,
            default: true
        }
    }
}
</script>
<template>
    <pre><code :class="[{ 'line-numbers': linenumber }, 'language-' + language]"><slot></slot></code></pre>
</template>
