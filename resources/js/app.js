import './bootstrap';
import { createApp } from 'vue';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import  App  from '../App.vue';
import  router  from './router';
import  store  from './store';

library.add(fas);

const app = createApp(App);

app.use(router);
app.use(store);
app.mount('#app');

