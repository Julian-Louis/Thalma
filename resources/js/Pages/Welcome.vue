<template>
    <div class="min-h-screen bg-dark font-montse">
        <section class="relative w-full px-8 text-gray-700 ">
            <div
                class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
                <a class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-white select-none"
                   href="#_">
                    <img class="h-14 w-14 mr-2" src="/img/logo.png"/>
                    Thalma</a>

                <nav
                    class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">

                </nav>
                <svg class="block absolute h-6 w-6 right-2 text-white md:hidden top-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <div class="hidden md:flex relative z-10 inline-flex items-center space-x-8  md:ml-5">

                    <a class="relative font-medium text-sm leading-6 text-gray-200 transition duration-150 ease-out hover:text-gray-400"
                       href="#_"
                       x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span class="block">Accueil</span>

                    </a>
                    <a class="relative font-medium text-sm leading-6 text-gray-200 transition duration-150 ease-out hover:text-gray-400"
                       href="#_"
                       x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span class="block">Contact</span>

                    </a>
                    <a class="relative font-medium text-sm leading-6 text-gray-200 transition duration-150 ease-out hover:text-gray-400"
                       href="#_"
                       x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span class="block">A propos</span>

                    </a>
                    <DiscordButton/>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-col md:px-2 lg:px-64 py-24 lg:flex-row  items-center">

                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <div class="text-gray-400 mb-6"><span
                        class="bg-primary rounded-lg text-white text-sm px-2 py-1   mr-2">{{ info.badge }}</span>

                        <img :src=info.image class="w-8 inline">
                        {{ info.text }}
                    </div>
                    <h1 class="font-semibold sm:text-4xl text-3xl mb-4 text-white uppercase">Thalma

                    </h1>
                    <p class="mb-8 leading-relaxed text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="flex justify-center">
                        <DiscordButton/>
                    </div>
                </div>
                <div class="hidden lg:block lg:max-w-lg lg:w-full md:w-1/2 w-5/6">

                    <img alt="Phone" class="object-cover object-center mx-auto  rounded h-bgs phone-anim " ondragstart="return false;" src="/img/iphone12.png">
                </div>
            </div>
        </section>


        <footer>


        </footer>





    </div>
</template>

<style scoped>

</style>

<script>
import DiscordButton from '@/Components/DiscordButton';
import RightImg from '@/Components/RightImg';
import NProgress from "nprogress";

export default {

    components: {
        DiscordButton,
        RightImg
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },

    data() {
        return {
            info: {}
        }
    },

    created() {
        axios.get('/api/info')
            .then(response => {
                this.info = response.data;
                NProgress.done()
            })
            .catch(error => console.log(error));
    },
}
</script>
