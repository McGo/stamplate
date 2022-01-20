<script>
import CookieHandling from "./CookieHandling";
export default {
    mixins: [CookieHandling],
    data() {
        return {
            cookie_analytics_checked: false,

            did_give_consent: false,
            hide_manually: false,
        }
    },
    created() {
        this.did_give_consent = this.getCookie('statamicwebsite-cookie-consent-given') !== '';
    },
    methods: {
        acceptCookie: function (cname) {
            this.setCookie(cname, 'accepted', 14);
            this.did_give_consent = this.getCookie('statamicwebsite-cookie-consent-given') !== '';
        }
    }
}
</script>
<template>
    <div class="absolute bottom-10 left-0  w-full text-xs text-black" v-if="! did_give_consent && ! hide_manually">
        <div class="m-10 bg-white p-2 rounded border ">
            <i class="fas fa-cookie-bite"></i> Wir nutzen Cookies auf unserer Webseite. Sie helfen uns das Nutzererlebnis zu verbessern (Analyse- und
        Marketingcookies)
        <button class="p-1 mx-2" @click="acceptCookie('statamicwebsite-cookie-consent-given')">akzeptieren</button>
        <button class="p-1" @click="hide_manually = true">verweigern</button>
    </div>
    </div>
</template>
