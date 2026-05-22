import './bootstrap';
import { createApp } from 'vue';
import MtInterestForm from './components/MtInterestForm.vue';

const mount = document.getElementById('mt-interest-form');

if (mount) {
    createApp(MtInterestForm, {
        action: mount.dataset.action,
    }).mount(mount);
}
