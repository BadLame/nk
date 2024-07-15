import './bootstrap';

import { createApp } from 'vue';
import LeadsTable from "./components/LeadsTable.vue";

createApp({})
    .component('LeadsTable', LeadsTable)
    .mount('#app')
