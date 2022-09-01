Vue.config.devtools = true;

const app = new Vue({
  el: "#app",
  data: {
      discs: [],
      selection:"Seleziona un genere",
    },
    methods: {
        fetchDiscs() {
          console.log("call");
        axios
        .get(`../API/Discs/index.php`)
        .then((res) => {
          this.discs = res.data;
        });
    }
  },
    mounted() {
       this.fetchDiscs()
      },
});
