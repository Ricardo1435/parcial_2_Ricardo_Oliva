/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');
import $ from 'jquery';
require('./bootstrap');

window.Vue = require('vue').default;

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el: '#crud',
    created: function(){
        this.getBooks();
    },
    data: {
        books:[],
        newIsbn: '',
        newName: '',
        newDate: '',
        newEdition:'',
        newDescription: '',
        fillBook: {
            'id': '',
            'isbn': '',
            'name': '',
            'date': '',
            'edition': '',
            'description': ''
        },
        errors: []
    },
    methods:{

        getBooks: function (){
            var urlBooks ="books";
            axios.get(urlBooks).then(response => {
                this.books = response.data
            });
        },

        createBook: function() {
            var url = 'books';
            axios.post(url, {
                isbn: this.newIsbn,
                name: this.newName,
                date: this.newDate,
                edition: this.newEdition,
                description: this.newDescription
            }).then(response => {
                this.getBooks();
                this.newIsbn = '';
                this.newName = '';
                this.newDate = '';
                this.newEdition = '';
                this.newDescription = '';
                this.errors = [];
                // document.getElementById('close-modal').click();
                $('#create').modal('hide');
                // alert('Nueva categoria creada con exito');
            }).catch(error => {
                this.errors = error.response.data
            });
        }
    }

});
