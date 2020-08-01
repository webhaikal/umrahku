import { library } from '@fortawesome/fontawesome-svg-core'
import { faGlobe, faBars, faAngleDown, faPlane, faHotel, faStar } from '@fortawesome/free-solid-svg-icons'
import { faStar as faStarRegular } from '@fortawesome/free-regular-svg-icons'
import { MonthPickerInput } from 'vue-month-picker';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Fontawesome Fonts
 */
library.add(faGlobe, faBars, faAngleDown, faPlane, faHotel, faStar, faStarRegular)

Vue.component('ficon', FontAwesomeIcon)
Vue.use(MonthPickerInput)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('home-booking', require('./components/HomeBookingPicker.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
