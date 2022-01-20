<template>
    <div class="bg-fixed " style='background-image: url("+ src +")'></div>
</template>
<script>
export default {
    props: {
        src: {
            type: String,
            required: true,
        },
        alt: {
            type: String,
            required: false,
            default: ''
        },
    }
}
</script>
