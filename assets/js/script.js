

const app = new Vue({
    el: "#app",
    data : {
        apiUrl : 'http://localhost:8888/Esercitazioni_Boolean/php-ajax-dischi/assets/api/api.php',
        albums : [],
        error_msg : "",
        success: true,
    },
    mounted(){
        this.getAPI();
    },
    methods: {
        getAPI(){
            axios.get(this.apiUrl)
            .then(r =>{
                this.albums = r.data;
                console.log(this.albums);
            })
        }
    }
})