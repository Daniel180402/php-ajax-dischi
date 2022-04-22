const app = new Vue({
    el: "#app",
    data: () => ({
        dischi: [],
    }),
    created() {
        axios.get('http://localhost/PHP/php-ajax-dischi/controller.php').then((result) => {
            this.dischi = result.data.results;
            console.warn(result);
        }).catch((error) =>{
            console.warn(error);
        });
    }
});