<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="bg-secondary">
    <div id="app">
        <div class="wrapper">
                <h1 class="text-center text-white mt-5">TodoList</h1>
                <h4 class="text-center text-white">Crea e modifica la tua lista</h4>
                <h3 class="text-center text-white mt-4"><i class="fa-solid fa-arrow-down"></i></h3>
                <div class="container d-flex align-items-center justify-content-center">
                <div class="card mt-4">
                    <div class="card-header d-flex gap-3">
                        <input type="text" class="form-control" placeholder="Inserisci Ingrediente..." aria-describedby="button-add" v-model="todoItem" @keyup.enter="updateItem">
                        <button @click="updateItem" class="btn btn-outline-primary ms-3" type="button" id="button-add">Aggiungi</button>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                            <ul class="list-unstyled">
                    
                        
                                <li  class="d-flex justify-content-between align-items-center gap-5 mt-2" v-for="(item, index) in todoList">
                                    <p @click="complete(index)" :class="item.complete ? 'text-decoration-line-through': '' ">{{item.text}}</p>
                                    <button @click="deleteTask(index)" type="button" class="btn btn-outline-primary ms-3 fs-6">Cancella</button>
                                </li>
                                
                            </ul>
                    </div>
                        
                </div>    
                </div>   s
                
                
                
            </div>            

    </div>







  
   

    <script src="./js/script.js"></script>
</body>
</html>