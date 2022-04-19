new Vue ({
    el: '#app',
    data: {
        apiUrl: 'http://localhost:8888/php-ajax-dischi/api',
        arrDischi: []
    },
    methods: {
        search(event) {
            axios.get(`${this.apiUrl}?search=${event.target.value}`)
            .then(response => this.arrDischi = response.data)
        }
    },
    created() {
        axios.get(this.apiUrl).then(response => this.arrDischi = response.data)
    }
})