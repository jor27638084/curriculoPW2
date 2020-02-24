

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
        body{
            background-color: cyan;
        }
    </style>
    <body>
    <div class="jumbotron">
                <header style="text-align: center;">
                    <h1>Curriculo</h1>
                </header>
                <div class="navbar-header">
                    
                </div>
            </div>
        <div class="container">
            
            
            <div class="row">
                <div class="col-md-12">
                <h1>Cadastre já seu curriculo</h1>
                    <form class-="form-horizontal" action="require.php" method="post" >
                        <div class="form-group">
                        <label for="nome">
                        Dados Pessoais
                        </label>
                           <br> <input class="form-control" type="text" name="nome" id="nome" placeholder="nome" style="width:50%; display:inline-Block;">
                                Nascimento: <input class="form-control" type="date" name="nascimento" placehouder="Data de nascimento" style="width:15%; display:inline-Block;">
                        <div class="radio">
                            <label for="sexo" >
                                Sexo:<br>
                            
                                <input type="radio" name="options" value="1"> masculino<br>
                                <input type="radio" name="options" value="2"> feminino
                            </label>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label for="contato">
                        Contato
                        </label>
                            <input class="form-control" type="tel" name="contato" style="width:30%; display:inline-Block;" placeholder="Celular/Telefone">
                            <input class="form-control" type="email" name="email" style="width:50%; display:inline-Block;" placeholder="Email">
                        </div>
                        <div class="form-group">
                        
                        <div class="form-group" style="display:inline-Block;">
                        <label for="rua">
                        Endereço<br>
                        </label>
                            <input class="form-control" type="text" name="rua" placeholder="Rua" style="width:50%; display:inline-Block;">
                            <input class="form-control" type="number" name="numero" placeholder="N°" style="width:10%; display:inline-Block;">
                            <input class="form-control" type="text" name="bairro" placeholder="Bairro">
                            <input class="form-control" type="text" name="cep" placeholder="Cep">
                            <input class="form-control" type="text" name="cidade" placeholder="Cidade">
                            <input class="form-control" type="text" name="estado" placeholder="Estado">
                        </div>
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
                            
                        </div>
                        <div class="form-group">
                        <label for="">
                        Experiências Profissionais:
                        </label>
                            <input class="form-control" type="text" name="emprego" placeholder="Empresa">  
                            <input class="form-control" type="text" name="função" placeholder="Função Desenvolvida" >
                            Inicio: 
                            <input class="form-control" type="date" name="inicio_emprego" style="width:30%; display:inline-Block;">
                            Términio: 
                            <input class="form-control" type="date" name="terminio_emprego" style="width:30%; display:inline-Block;">
                            <textarea name="observações_emprego" class="form-control" placeholder="Observações"></textarea>
                            <button type="button" class="btn btn-primary" onclick="adcExperiencia()">Adicionar mais uma experência</button>
                        </div>
                        <div class="form-group">
                            <label for="">
                            Referencias: 
                            </label>
                            <input class="form-control" type="text" name="nome_ref" placeholder="Nome">
                            <input class="form-control" type="tel" name="contato_ref" placeholder="Contato">
                            <input class="form-control" type="email" name="email_ref" placeholder="email">
                        </div>
                        <button class="btn btn-danger" type="submit">Cadastrar</button>
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
