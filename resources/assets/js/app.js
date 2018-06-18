
require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

var app = new Vue({
  el: '#app',
  data: {}
});

$(document).ready(function() {
  $('#rightMenu').on('click', function() {
    $(this).toggleClass('is-open');
  });
});
