require('./bootstrap');
window.Vue = require('vue');
Vue.config.productionTip = false
window.Fire = new Vue();
import Vue from 'vue';


//Main pages
Vue.component('role', require('./components/role.vue').default);
Vue.component('app', require('./views/app.vue').default);

import Swal from 'sweetalert2'
window.swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.toast = Toast;


const app = new Vue({
    el: '#app',
});

