import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/regular'
import '@fortawesome/fontawesome-free/js/brands'
import './prism.js';
import { createApp } from 'vue'
import App from './components/App.vue';
const app = createApp(App);
app.component('app', App);

app.component('header-images-animation', require('./components/HeaderImages.vue').default);
app.component('parallax-image', require('./components/ParallaxImage.vue').default);
app.component('prism-highlight', require('./components/PrismHighlight.vue').default);
app.component('cookie-consent', require('./components/CookieConsent.vue').default);
app.component('cookie-consent-given', require('./components/CookieConsentGiven.vue').default);
app.component('glightbox-image', require('./components/GlightboxImage.vue').default);
app.mount('#top');
