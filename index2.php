

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
                    <form class-="form-horizontal" action="requireteste.php" method="post" >
                        
                        <div class="form-group" id="campo_formacao">
                        <label>
                        Formação
                        </label>
                            <input class="form-control" type="text" name="formação[]" placeholder="Instituição de ensino">  
                            Inicio: 
                            <input class="form-control" type="date" name="inicio[]" style="width:30%; display:inline-Block;">
                            Términio
                            <input class="form-control" type="date" name="terminio[]" style="width:30%; display:inline-Block;">
                           
                            <textarea name="msg[]" class="form-control" placeholder="Observações"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary formacao">Adicionar mais uma formação</button>
                        <div class="form-group" id="campo_emprego">
                        <label for="">
                        Experiências Profissionais:
                        </label>
                            <input class="form-control" type="text" name="emprego[]" placeholder="Empresa">  
                            <input class="form-control" type="text" name="função[]" placeholder="Função Desenvolvida" >
                            Inicio: 
                            <input class="form-control" type="date" name="inicio_emprego[]" style="width:30%; display:inline-Block;">
                            Términio: 
                            <input class="form-control" type="date" name="terminio_emprego[]" style="width:30%; display:inline-Block;">
                            <textarea name="observações_emprego[]" class="form-control" placeholder="Observações"></textarea>
                            
                        </div>
                            <button type="button" class="btn btn-primary emprego">Adicionar mais uma experência</button>
                    
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
    <script>
    var escolaridade = 1;
    var empregos_trabalhados = 1;
    $(document).on('click','.formacao',function(){
        escolaridade++;
        let campo = '<div class="form-group"><label>';
            campo +=           'Formação';
            campo +=            '</label>';
            campo +=            '<input class="form-control" type="text" name="formação[]" placeholder="Instituição de ensino">';
            campo +=              'Inicio:'; 
            campo +=             '<input class="form-control" type="date" name="inicio[]" style="width:30%; display:inline-Block;">';
            campo +=               'Términio';
            campo +=              '<input class="form-control" type="date" name="terminio[]" style="width:30%; display:inline-Block;">';             
            campo +=                '<textarea name="msg[]" class="form-control" placeholder="Observações"></textarea>';
            campo +=            '</div>';
        $('#campo_formacao').append( escolaridade + campo );
    });
    $(document).on('click','.emprego',function(){
        empregos_trabalhados++;
        let campo_funcao = '<div class="form-group" id="campo_emprego">'+
                                '<label for="">'+
                               ' Experiências Profissionais:' +
                                '</label>' +
                                    '<input class="form-control" type="text" name="emprego[]" placeholder="Empresa">'+  
                                    '<input class="form-control" type="text" name="função[]" placeholder="Função Desenvolvida" >'+
                                    'Inicio:'+ 
                                    '<input class="form-control" type="date" name="inicio_emprego[]" style="width:30%; display:inline-Block;">'+
                                    'Términio: '+
                                    '<input class="form-control" type="date" name="terminio_emprego[]" style="width:30%; display:inline-Block;">'+
                                    '<textarea name="observações_emprego[]" class="form-control" placeholder="Observações"></textarea>'+
                                    
                                '</div>';
        $('#campo_emprego').append(empregos_trabalhados + campo_funcao);
    });
    
    </script>
</html>
