<script>
import axios from 'axios';


export default{

  data(){
    return {
      movies:[],
    }
  },
  mounted(){
    axios.get('http://localhost:8000/api/v1/movie/all')
      .then(res => {
        const data = res.data;
        const success = data.success;
        const movies = data.response;
        if(success){
          this.movies = movies;
        }
        console.log(movies);
      })
      .catch(err => console.error(err));
  },
}
</script>

<template>
   <h1>Movies</h1>
    <ul>
      <li v-for="movie in movies" :key="movie.id">
        {{ movie.name }}
      </li>
    </ul>

</template>

<style scoped>


</style>