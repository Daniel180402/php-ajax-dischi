const app = new Vue({
    el: "#app",
    data: () => ({
        dischi: [],
    }),
    created() {
        axios.get("/data.php").then((res) => {
            this.dischi = res.data;
        });
    },
});