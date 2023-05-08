const { createApp } = Vue;

createApp({
    data() {
        return {
        todoList : [],
        apiUrl: 'server.php',
        todoItem: ''
      }
    },
    methods: {
       createList (){
         axios.get(this.apiUrl).then((res)=> {
             //console.log(res.data)
             this.todoList = res.data;
         });
           
        },

        updateItem (){
            const data = {
                text: this.todoItem,
                complete : false

            }

            axios.post(this.apiUrl, data, { headers: {'Content-Type': 'multipart/form-data'} }).then((res)=>{
                   this.todoItem = '';
                   this.todoList = res.data
            });
        },

       complete (){
       
       },
    },
    mounted() {
        this.createList()
    },
   

}).mount('#app');
