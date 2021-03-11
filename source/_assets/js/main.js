window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue');

// Lazyload
import LazyLoad from "vanilla-lazyload";

import Search from './components/Search.vue';
import PrimitiveForm from './components/PrimitiveForm.vue';
import ContactForm from "./components/ContactForm.vue";

const lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});

new Vue({
    components: {
        Search,
        PrimitiveForm,
        ContactForm
    },

    data: {
        partsToggleActive: false,
    },

    methods: {
        partsToggle() {
            console.log("clicked");
            this.partsToggleActive= !this.partsToggleActive;
        },
    },
    
}).$mount('#app');


// document.getElementById("navTrigger").addEventListener('click',function ()
//     {
//      alert("hello");
//      //validation code to see State field is mandatory.  
//     }  ); 



