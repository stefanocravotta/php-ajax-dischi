

const app = new Vue({
    el: "#app",
    data : {
        apiUrl : 'http://localhost:8888/Esercitazioni_Boolean/php-ajax-dischi/assets/api/api.php?genre=',
        albums : [],
        genre: ""
    },
    mounted(){
        this.getAPI();
    },
    methods: {
        getAPI(){
            axios.get(this.apiUrl + this.genre)
            .then(r =>{
                this.albums = r.data;
            })
        }
    }
})