<script>
export default {
    data() {
        return {
            open: false
        }
    },
    watch: {
        open: function (val) {
            if (val) {
                document.body.classList.add("navigation-opened");
            } else {
                document.body.classList.remove("navigation-opened");
            }
        }
    },
    methods: {
        toggle() {
            this.open = !this.open

        }
    }
}
</script>
