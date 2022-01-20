<script>
export default {
    props: {
        duration: {
            type: Number,
            required: false,
            default: 5000,
        }
    },
    data() {
        return {
            visibleItem: null,
            items: [],
        }
    },
    methods: {
        showNextItem() {
            [].forEach.call(this.$refs.root.children, function(el) {
                el.classList.remove("visible");
            });

            if (this.items.length > 1) {
                if (this.visibleItem !== null && this.items.length > 0) {
                    if (this.visibleItem === this.items.length - 1) {
                        this.visibleItem = 0;
                    } else {
                        this.visibleItem = this.visibleItem + 1;
                    }
                } else {
                    this.visibleItem = 0;
                }
                this.$refs.root.children[this.visibleItem].classList.add('visible');
            } else {
                this.$refs.root.children[0].classList.add('visible');
            }
        }
    },
    mounted() {
        this.items = this.$refs.root.children;

        this.interval = setInterval(() => this.showNextItem(), this.duration);
        setTimeout(() => this.showNextItem(), 10);
    },
}
</script>
<template>
    <div class="header-images-animation w-full relative" ref="root">
        <slot></slot>
    </div>
</template>
<style>
.header-images-animation {
    position: relative !important;
}
.header-images-animation > * {
    position: absolute !important;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 0.5s ease-in;

}
.header-images-animation .visible {
    opacity: 100;
    transition: opacity 0.5s ease-out;
}
.header-images-animation .custom-headerimage {
    transition: 5s ease-out;
}
.header-images-animation .visible .custom-headerimage {
    transform: scale(1.03);
}
</style>
