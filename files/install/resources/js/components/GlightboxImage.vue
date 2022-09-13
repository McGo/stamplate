<script>
import  "glightbox/dist/css/glightbox.css";
import  "glightbox/dist/js/glightbox.js";
import GLightbox from 'glightbox';
export default {

    mounted(){
        //lightbox settings
        this.lightbox = GLightbox({
            selector: ".glightbox"
        });

    }
}
</script>
<template>
    <div>

    </div>
</template>
