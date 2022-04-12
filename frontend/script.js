const app = new Vue ({
    el: '#app',
    data: {
        discs: []
    },
    created() {
        axios.get('http://localhost:8888/json/api.php').then(response => this.discs = response.data)
    }
})