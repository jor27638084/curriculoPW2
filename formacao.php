<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>AULA PHP ETEC</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/responf/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        input, button{
            margin: 5px;
        }
    </style>
    <body>
        <div class="container">
            <div class="jumbotron">
                <header style="text-align: center;">
                    <h1>Curriculo</h1>
                </header>
                <div class="navbar-header">
                    

                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <form class-="form-horizontal">
                        
                        <div class="form-group">
                        <label for="">
                        Formação
                        </label>
                            <input class="form-control" type="text" name="formação" placeholder="Instituição de ensino">  
                            Inicio: 
                            <input class="form-control" type="date" name="inicio" style="width:30%; display:inline-Block;">
                            Términio
                            <input class="form-control" type="date" name="terminio" style="width:30%; display:inline-Block;">
                           
                            <textarea name="msg" class="form-control" placeholder="Observações"></textarea>
                            <button type="button" class="btn btn-primary" onclick="adcFormacao()">Adicionar mais uma formação</button>
                            <?php
                             
                                   /*  function adcFormacao(){

                                        require "formacao.php";
                                    } */
                            ?>
                       
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
        
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>