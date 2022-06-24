var app = new Vue({
  el: '#app',
  data: {
    albums: [],
  },
  created() {
    axios
      .get('http://localhost/Esercizi/php-ajax-dischi/server/listalbum.php')
      .then(function (response) {
        // handle success
        this.albums = response.data;
        console.log(this.albums);
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      });
  },
});
