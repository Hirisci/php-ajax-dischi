var app = new Vue({
  el: '#app',
  data: {
    albums: [],
    genreList: [],
    filter: 'all',
  },
  created() {
    axios
      .get('http://localhost/Esercizi/php-ajax-dischi/server/listalbum.php', {
        params: {
          genre: 'all',
        },
      })
      .then((response) => {
        // handle success
        this.albums = response.data;
        this.generateGenreList();
      })
      .catch((error) => {
        // handle error
        console.log(error);
      });
  },
  methods: {
    generateGenreList() {
      this.albums.forEach((elm) => {
        if (!this.genreList.includes(elm.genre)) {
          this.genreList.push(elm.genre);
        }
      });
    },
    receiveList(filter) {
      axios
        .get('http://localhost/Esercizi/php-ajax-dischi/server/listalbum.php', {
          params: {
            genre: filter,
          },
        })
        .then((response) => {
          // handle success
          this.albums = response.data;
        })
        .catch((error) => {
          // handle error
          console.log(error);
        });
    },
  },
});
