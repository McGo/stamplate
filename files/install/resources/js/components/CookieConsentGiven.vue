<script>
import CookieHandling from "./CookieHandling";
export default {
    mixins: [CookieHandling],
    data() {
        return {
            did_give_consent: false
        }
    },
    created() {
        this.did_give_consent = this.getCookie('statamicwebsite-cookie-consent-given') !== '';
    }
}
</script>
<template>
    <div  v-if="did_give_consent">
    <scope></scope>
    </div>
</template>
