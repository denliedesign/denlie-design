<script setup>
import { onMounted, onBeforeUnmount, reactive, ref } from 'vue';

const props = defineProps({
    guard: String,
    turnstileEnabled: Boolean,
    siteKey: String,
    action: {
        type: String,
        required: true,
    },
});

const form = reactive({
    name: '',
    email: '',
    phone: '',
    studio: '',
    location: '',
    timeline: '',
    message: '',
    website_url: '',
});

const errors = ref({});
const success = ref('');
const isSubmitting = ref(false);
const guard = ref(props.guard);
const captcha = ref('');
const captchaContainer = ref(null);
let widget;
let poll;
let loadTimeout;

onMounted(() => {
    if (!props.turnstileEnabled) return;
    if (!props.siteKey) {
        errors.value = { form: ['Verification is temporarily unavailable. Please try again shortly.'] };
        return;
    }
    const script = document.createElement('script');
    script.src = 'https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit';
    script.async = true;
    script.onerror = () => { errors.value = { form: ['Verification could not load. Please refresh and try again.'] }; };
    document.head.appendChild(script);
    loadTimeout = window.setTimeout(() => {
        window.clearInterval(poll);
        if (widget === undefined) {
            errors.value = { form: ['Verification could not load. Please refresh and try again.'] };
        }
    }, 15000);
    poll = window.setInterval(() => {
        if (!window.turnstile) return;
        window.clearInterval(poll);
        window.clearTimeout(loadTimeout);
        widget = window.turnstile.render(captchaContainer.value, {
            sitekey: props.siteKey,
            action: 'studio_interest',
            callback: (token) => { captcha.value = token; },
            'expired-callback': () => { captcha.value = ''; },
            'error-callback': () => {
                captcha.value = '';
                errors.value = { form: ['Verification failed. Please try again.'] };
            },
        });
    }, 100);
});

onBeforeUnmount(() => {
    window.clearInterval(poll);
    window.clearTimeout(loadTimeout);
    if (widget !== undefined) window.turnstile?.remove(widget);
});

async function submitForm() {
    if (isSubmitting.value) return;
    errors.value = {};
    success.value = '';
    isSubmitting.value = true;

    try {
        const response = await window.axios.post(props.action, {
            ...form,
            _form_guard: guard.value,
            'cf-turnstile-response': captcha.value,
        }, {
            headers: {
                Accept: 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content,
            },
        });

        success.value = response.data.message;
        guard.value = response.data.guard;

        Object.keys(form).forEach((key) => {
            form[key] = '';
        });
    } catch (error) {
        if (error.response?.status === 422) {
            errors.value = error.response.data.errors;
        } else if (error.response?.status === 429) {
            errors.value = {
                form: ['Too many attempts. Please wait a little while before trying again. Your message is still here.'],
            };
        } else if (error.response?.status === 419) {
            errors.value = {
                form: ['Your session expired. Copy your message, refresh this page, and try again.'],
            };
        } else {
            errors.value = {
                form: ['Something went wrong while sending the form. Copy your message, refresh this page, and try again.'],
            };
        }
    } finally {
        captcha.value = '';
        if (widget !== undefined) window.turnstile?.reset(widget);
        isSubmitting.value = false;
    }
}
</script>

<template>
    <div v-if="success" class="alert alert-success font-sm" role="alert">
        {{ success }}
    </div>

    <div v-if="errors.form" class="alert alert-danger font-sm" role="alert">
        {{ errors.form[0] }}
    </div>

    <form class="row g-3" @submit.prevent="submitForm">
        <template v-for="key in ['form_security', '_form_guard', 'website_url', 'cf-turnstile-response']" :key="key">
            <div v-if="errors[key]" class="col-12">
                <div class="alert alert-danger" role="alert">{{ errors[key][0] }}</div>
            </div>
        </template>
        <div class="interest-honeypot" aria-hidden="true" inert>
            <label for="website_url">Leave this field empty</label>
            <input id="website_url" name="website_url" v-model="form.website_url" type="text" tabindex="-1" autocomplete="off">
        </div>
        <div class="col-12 col-md-6">
            <label for="name" class="form-label font-sm deep-charcoal">Name *</label>
            <input
                id="name"
                v-model="form.name"
                type="text"
                class="form-control form-control-lg"
                :class="{ 'is-invalid': errors.name }"
                required
            >
            <div v-if="errors.name" class="invalid-feedback">{{ errors.name[0] }}</div>
        </div>

        <div class="col-12 col-md-6">
            <label for="email" class="form-label font-sm deep-charcoal">Email *</label>
            <input
                id="email"
                v-model="form.email"
                type="email"
                class="form-control form-control-lg"
                :class="{ 'is-invalid': errors.email }"
                required
            >
            <div v-if="errors.email" class="invalid-feedback">{{ errors.email[0] }}</div>
        </div>

        <div class="col-12 col-md-6">
            <label for="phone" class="form-label font-sm deep-charcoal">Phone</label>
            <input
                id="phone"
                v-model="form.phone"
                type="tel"
                class="form-control form-control-lg"
                :class="{ 'is-invalid': errors.phone }"
            >
            <div v-if="errors.phone" class="invalid-feedback">{{ errors.phone[0] }}</div>
        </div>

        <div class="col-12 col-md-6">
            <label for="studio" class="form-label font-sm deep-charcoal">Studio name</label>
            <input
                id="studio"
                v-model="form.studio"
                type="text"
                class="form-control form-control-lg"
                :class="{ 'is-invalid': errors.studio }"
            >
            <div v-if="errors.studio" class="invalid-feedback">{{ errors.studio[0] }}</div>
        </div>

        <div class="col-12 col-md-6">
            <label for="location" class="form-label font-sm deep-charcoal">City / state</label>
            <input
                id="location"
                v-model="form.location"
                type="text"
                class="form-control form-control-lg"
                :class="{ 'is-invalid': errors.location }"
            >
            <div v-if="errors.location" class="invalid-feedback">{{ errors.location[0] }}</div>
        </div>

        <div class="col-12 col-md-6">
            <label for="timeline" class="form-label font-sm deep-charcoal">Ideal timeline</label>
            <select
                id="timeline"
                v-model="form.timeline"
                class="form-select form-select-lg"
                :class="{ 'is-invalid': errors.timeline }"
            >
                <option value="">Choose one</option>
                <option value="As soon as possible">As soon as possible</option>
                <option value="1-3 months">1-3 months</option>
                <option value="3-6 months">3-6 months</option>
                <option value="Just exploring">Just exploring</option>
            </select>
            <div v-if="errors.timeline" class="invalid-feedback">{{ errors.timeline[0] }}</div>
        </div>

        <div class="col-12">
            <label for="message" class="form-label font-sm deep-charcoal">What would you like help with?</label>
            <textarea
                id="message"
                v-model="form.message"
                class="form-control form-control-lg"
                :class="{ 'is-invalid': errors.message }"
                rows="5"
            />
            <div v-if="errors.message" class="invalid-feedback">{{ errors.message[0] }}</div>
        </div>

        <div v-if="turnstileEnabled" ref="captchaContainer" class="col-12"></div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark dd-cta font-md px-5 py-3" :disabled="isSubmitting || (turnstileEnabled && !captcha)">
                {{ isSubmitting ? 'Sending...' : 'Send interest form' }}
            </button>
        </div>
    </form>
</template>

<style scoped>
.interest-honeypot {
    position: absolute;
    width: 1px;
    height: 1px;
    overflow: hidden;
    clip-path: inset(100%);
    pointer-events: none;
}
</style>
