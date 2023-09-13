import "primevue/resources/themes/lara-light-indigo/theme.css";
import "primevue/resources/primevue.min.css";
import 'primeicons/primeicons.css';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import 'primeflex/primeflex.css';

import { createApp } from 'vue'
import App from './App.vue'
//import VueCookies from 'vue3-cookies'
import router from './router'
import store from './store'
import PrimeVue from 'primevue/config'
import ToastService from 'primevue/toastservice'
import ConfirmationService from 'primevue/confirmationservice'
import ConfirmPopup from 'primevue/confirmpopup'


import Button from "primevue/button"
import Card from "primevue/card"
import Dialog from "primevue/dialog"
import DataTable from 'primevue/datatable'
import Column from 'primevue/column'
import Row from 'primevue/row'
import InputText from 'primevue/inputtext'
import Textarea from 'primevue/textarea'
import InputNumber from 'primevue/inputnumber'
import Dropdown from 'primevue/dropdown'
import Toast from 'primevue/toast'
import Menubar from 'primevue/menubar'
import Toolbar from 'primevue/toolbar'
import Tooltip from 'primevue/tooltip'
import SelectButton from 'primevue/selectbutton'
import ProgressSpinner from 'primevue/progressspinner'

import DataView from 'primevue/dataview'
import DataViewLayoutOptions from 'primevue/dataviewlayoutoptions'

import PrimePreloader from '@/components/common/PrimePreloader.vue'
import httpClient from "@/services/http.service";
import {getCookie, setCookie} from "@/utils/helpers/cookies.helpers";


const app = createApp(App);

app.component('Button', Button)
app.component('Card', Card)
app.component('ConfirmPopup', ConfirmPopup)
app.component('Dialog', Dialog)
app.component('DataTable', DataTable)
app.component('Column', Column)
app.component('Row', Row)
app.component('InputText', InputText)
app.component('Textarea', Textarea)
app.component('InputNumber', InputNumber)
app.component('Dropdown', Dropdown)
app.component('Toast', Toast)
app.component('Menubar', Menubar)
app.component('Toolbar', Toolbar)
app.component('SelectButton', SelectButton)
app.component('ProgressSpinner', ProgressSpinner)
app.component('DataView', DataView)
app.component('DataViewLayoutOptions', DataViewLayoutOptions)


app.component('PrimePreloader', PrimePreloader)


app.directive('tooltip', Tooltip)
app.use(ConfirmationService)
app.use(ToastService)
app.use(router)
app.use(store)
app.use(PrimeVue)


// app.use(VueCookies, {
//     expireTimes: "20min",
//     path: "/",
//     domain: "",
//     secure: true,
//     sameSite: "None"
// });

app.config.productionTip = false;

// Устанавливаем интервал для обновления токена каждые 15 минут (900000 миллисекунд)
// const tokenRefreshInterval = 900000;
const tokenRefreshInterval = 900000;

// Функция для обновления токена
async function refreshToken() {
    try {
        const response = await httpClient.post('/refresh', {
            token: getCookie('ACCESS_TOKEN'), // Получаем старый токен из локального хранилища
        });
        const newToken = response.data.access_token;
        setCookie('ACCESS_TOKEN', newToken, 1200); // Сохраняем новый токен в локальное хранилище
        console.log('Токен успешно обновлен.');
    } catch (error) {
        console.error('Ошибка при обновлении токена:', error);
    }
}

// Устанавливаем интервал для вызова функции обновления токена
setInterval(refreshToken, tokenRefreshInterval);




app.mount('#app')
//createApp(App).use(store).use(router).use(PrimeVue).mount('#app')