const app = new Vue({
    el: "#app",
    data: () => ({
        disc: [],
    }),
    mounted() {
        axios.get('http://localhost/PHP/php-ajax-dischi/controller.php').then((response) => {
            this.disc = response.data.results;
            console.warn(response);
        }).catch((error) =>{
            console.warn(error);
        });
    }
});