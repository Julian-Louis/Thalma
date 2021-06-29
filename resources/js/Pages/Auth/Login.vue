<template>
    <jet-authentication-card>
        <template #logo>
            <jet-authentication-card-logo/>
        </template>

        <jet-validation-errors class="mb-4"/>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>


        <div class="block mt-2 ">

            <label class="flex items-center flex-col">
                <div class="text-white text-4xl mb-8"> Connexion !</div>


                <a         class=" inline-flex items-center text-xl bg-primary text-sm  justify-center px-8 py-1 leading-6 text-white border-2 border-primary rounded font-up  shadow-sm outline-none focus:shadow-none transition duration-300 ease-out hover:bg-transparent "
                           href="auth/discord"
                >

                    Connexion avec discord
                    <img class="h-6 w-6" src="/img/discord.png"/>
                </a>

                <inertia-link class="mt-4 text-gray-300 hover:underline" href="/">
                    Retourner à l'accueil
                </inertia-link>
            </label>
        </div>


    </jet-authentication-card>
</template>

<script>
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
import JetButton from '@/Jetstream/Button'
import JetInput from '@/Jetstream/Input'
import JetCheckbox from '@/Jetstream/Checkbox'
import JetLabel from '@/Jetstream/Label'
import JetValidationErrors from '@/Jetstream/ValidationErrors'

export default {
    components: {
        JetAuthenticationCard,
        JetAuthenticationCardLogo,
        JetButton,
        JetInput,
        JetCheckbox,
        JetLabel,
        JetValidationErrors
    },

    props: {
        canResetPassword: Boolean,
        status: String
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ...data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post(this.route('login'), {
                    onFinish: () => this.form.reset('password'),
                })
        }
    }
}
</script>
