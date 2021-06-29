<template>
    <inertia-link
        class="inline-flex items-center text-sm font-semibold uppercase justify-center px-8 py-1 leading-6 text-white border-2 border-primary rounded font-up  shadow-sm outline-none focus:shadow-none transition duration-300 ease-out hover:bg-primary "
        href="/login" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
        Rejoins nous
        <img class="h-6 w-6" src="/img/discord.png"/>
    </inertia-link>

</template>


