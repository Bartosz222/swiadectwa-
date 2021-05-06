<DOCTYPE html>
<html>
<head>
  <title>Vue Demo #1: The Box App</title>
  <meta charset='utf-8' />
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
</head>
<body>
  <div id="vapp">
    <select v-model="selected">
      <option v-for="option in options" v-bind:value="option.value">
        {{ option.text }}
      </option>
    </select>
    <button @click="wypisz">Wypisz</button>
    <select v-model="second" v-show="show">
      <option v-for="student in students" v-bind:value="student.value">
        {{ student.text }}
      </option>
    </select>
    <button @click="close" v-show="show">&#10006</button>
    <div v-if="second != ''">
      <button v-show="show">Dodaj Świadectwo</button>
      <button v-show="show">Zobacz Świadectwo</button>
    </div>

  </div>

<script>
const vueApp = new Vue({
  el: '#vapp',
  data: { 
    show:false,
    extra:false,
    selected: '',
    second:'',
    options: [
      <?php include 'rocznik.php'?>
    ],
    students:[],
  },
  methods:{
      wypisz(){
          console.log(this.selected);
          this.show = true;
          axios.get('search.php?gfs='+this.options.value).then(response=>{
            this.students.text = response.data
            console.log(response.data);
          });
      },
      close(){
          this.show = false;
          this.second= '';
      }
  }
})
</script>
</body>
</html>