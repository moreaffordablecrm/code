<template>
    <div>
        <div v-if="subscribed" class="h-12 text-xl text-green-800">
            Success! Now check your email to confirm your subscription.
        </div>
        <div v-else>
            <form>
                <input type="text" placeholder="Your email." v-model="form.email"
                       class="border border-gray-400 rounded w-full lg:w-1/2 h-12 px-4 focus:outline-none block lg:inline-block"
                       :class="{
                    'focus:border-red-700 focus:b-2': invalidEmail,
                    'focus:border-green-700 b-2': validEmail,
                    'border-red-700 b-2' : form.errors.any()
                }"
                >
                <button type="submit"
                        class="lg:ml-4 border rounded bg-blue-700 text-white h-12 px-4 focus:outline-none mt-4 lg:mt-0 lg:w-32 w-full"
                        :class="{'cursor-not-allowed opacity-50': isDisabled}"
                        @click.prevent="subscribe" :disabled="invalidEmail"
                >
                    Subscribe
                </button>
            </form>
            <span class="block pt-4 text-red-700" v-if="form.errors.any()">
                {{ form.errors.first('email') }}
            </span>
        </div>
    </div>
</template>

<script>
    import Form from 'form-backend-validation';

    export default {
        data() {
            return {
                form: new Form({
                    email: null,
                }),
                subscribed: false,
                processingForm: false
            }
        },

        computed: {
            isDisabled() {
                return this.invalidEmail || this.form.processing;
            },

            validEmail() {
                let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(this.form.email);
            },

            invalidEmail() {
                return !this.validEmail;
            }
        },

        methods: {
            subscribe() {
                this.form.post('/subscribe').then(response => this.subscribed = true);
            }
        }
    }
</script>
