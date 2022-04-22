const app = new Vue({
    el: "#app",
    data: () => ({
        dischi: [],
    }),
    created() {
        axios.get("http://localhost/PHP/php-ajax-dischi/controller.php").then((result) => {
            this.dischi = result.data.results;
        }).catch((error) =>{
            console.warn(error);
        });
    }
});