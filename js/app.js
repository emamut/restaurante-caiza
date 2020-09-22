var app = new Vue({
  el: '#app',
  data() {
    return {
      menuArray: [],
    };
  },
  mounted() {
    var self = this;

    axios
      .get('http://localhost/restaurante/wp-json/menu/v1/get')
      .then(function (response) {
        self.menuArray = response.data;
      });
  },
});
