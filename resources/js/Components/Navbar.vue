<template>
    <nav class="navbar navbar-fixed">
        <div class="container">
            <div class="navbar-main">
                <div class="navbar-brand">
                    <router-link :to="{ name: 'items.index' }">
                        <p>ASTU-EIC WEB-DEVELOPMENT WORKSHOP</p>
                    </router-link>
                </div>
                <ul class="navbar-menu">
                    <li>
                        <a target="_blank" class="button github" href="https://github.com/wako-coder/Laravel-CRUD-using-ajax-and-vue-2">
                            <Fa :icon="['fab', 'github']" /> <span class="text-md">Fork on GitHub</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" class="button github" href="https://github.com/wako-coder/Laravel-CRUD-using-ajax-and-vue-2">
                            <Fa :icon="['fas', 'star']" /> <span class="text-md">Give us star</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
