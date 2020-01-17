/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('product-list-item',require('./components/ProductListItem.vue').default);
Vue.component('product-detail-holder',require('./components/ProductDetailHolder.vue').default);
Vue.component('cart-item',require('./components/CartItem.vue').default);
Vue.component('cart-image',require('./components/CartImage.vue').default);
Vue.component('cart-item-description',require('./components/CartItemDescription.vue').default);
Vue.component('cart-list',require('./components/CartList.vue').default);

Vue.component('checkout-form',require('./components/CheckoutForm.vue').default);

Vue.component('nav-bar',require('./components/NavBar.vue').default);
Vue.component('nav-item',require('./components/NavItem.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
