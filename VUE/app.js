Vue.config.devtools = true;

const app = new Vue({
  el: "#app",
  data: {
    discs: [],
    },
    mounted() {
        axios
          .get("http://localhost:8888/php-ajax-dischi/API/Discs/")
          .then((res) => {
            this.discs = res.data;
          });
      },
});
