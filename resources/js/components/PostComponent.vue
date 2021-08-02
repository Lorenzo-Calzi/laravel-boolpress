<template>
    <div class="container d-flex flex-wrap">
        <div class="card text left" v-for="post in posts">

        </div>
    </div>
</template>

<script>
    const { default: Axios } = require('axios');
    export default {
        data() {
            return {
                posts: null,
            } 
        },
        mounted() {
             console.log('Component mounted.')
            Axios.get('/api/posts').then(resp =>{
                this.posts = resp.data.data
            }).catch(e => {
                console.error('Sorry!' + e);
            })
        }
    }
</script>
