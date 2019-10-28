import '../bootstrap';
import Vue from 'vue';

import Routes from './routes/routes.js';

import App from './components/App'


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App)
});

export default app;
