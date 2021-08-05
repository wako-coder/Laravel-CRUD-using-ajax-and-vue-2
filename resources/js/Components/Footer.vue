<template>
    <footer>
        <div class="footer">
            <div class="container">
                <hr>
                <div class="flex flex-wrap mt-8">
                    <div class="w-full md:w-1/2">
                        <p class="copy">&copy; ASTU {{ date }}</p>
                    </div>
                    <div class="w-full md:w-1/2">
                        <p>Made by <a href="https://github.com/wako-coder/Laravel-CRUD-using-ajax-and-vue-2/tree/master">@wako-coder</a>. All the code is <a href="https://github.com/wako-coder/Laravel-CRUD-using-ajax-and-vue-2/tree/master">EIC</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        computed: {
            date() {
                return new Date().getFullYear();
            }
        }
    }
</script>
