<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema De Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color: gray;
            

        }
        .sistem{
            width: 100%;
            height:100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }h3{
            text-align: center;
        }

    </style>
</head>
<body>
    
    <div class ="sistem">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
           <div class ="card">
         <div class = "card-body">
         <div class = "card-body">
            <h3>Login</h3>
         </div>
         <form action="login.php" method = "POST">
                <div>
                    <div class="mb-3">
                        <label>Usúario</label>
                        <input type="text"
                        name ="usuario"
                        class ="form-control">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                    <label>Senha</label>
                    <input type="password"
                    name ="senha"
                    class ="form-control">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <button 
                        type = "submit"
                        class = "btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
         </div>
           </div>

        </div>
    </div>
 </div>
    </div>
 

  


</body>
</html>