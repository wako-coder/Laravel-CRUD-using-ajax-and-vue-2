<template>
    <aside class="star">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3">
                    <h2 class="mb-8">members of our group</h2>
                </div>
                <div class="w-full md:w-1/2 px-3" v-for="ad in ads" :key="ad.id">
                    <a target="_blank" :href="ad.link">
                        <div class="star-card">
                            <div class="star-card-img">
                                <img :src="ad.image_path" :alt="ad.title" :title="ad.title">
                            </div>
                            <div class="star-card-text">
                                <h3>{{ ad.title }}</h3>
                                <p class="star-card-sub">{{ ad.sub_title }}</p>
                                <p>{{ ad.description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</template>

<script>
    export default {
        data() {
            return {
                ads: [
                    {
                        id: 1,
                        title: 'wakoya kumsa Leta',
                        image_path: 'images/form.png',
                        sub_title: 'ID: A/ur14337/10.',
                        description: 'computer science and engineering',
                    },
                    {
                        id: 2,
                        title: 'Bilisuma Tadesse Firew  ',
                        image_path: 'images/codolog.png',
                        sub_title: 'ID: A/UR14779/10',
                        description: 'computer science and engineering',
                    },
                     {
                        id: 3,
                        title: 'Nesru Sadik Mohammed',
                        image_path: 'images/codolog.png',
                        sub_title: 'ID: A/ur14678/10.',
                        description: 'electronics and communication engineering',
                    },
                     {
                        id: 3,
                        title: 'MALDA MOTUMA HIRPASSA',
                        image_path: 'images/form.png',
                        sub_title: 'ID: A/UR14276/10.',
                        description: 'computer science and engineering',
                    }
                ]
            }
        }
    }
</script>