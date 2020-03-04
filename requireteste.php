
<?php


// $nome = $_POST['nome'];
// $dt_nascimento = $_POST['nascimento'];
// $contato = $_POST['contato'];
// $sexo = $_POST['options'];
// $email = $_POST['email'];
// $rua = $_POST['rua'];
// $numero = $_POST['numero'];
// $bairro = $_POST['bairro'];
// $cep = $_POST['cep'];
// $cidade = $_POST['cidade'];
// $estado = $_POST['estado'];
$formação = $_POST['formação'];
$inicio_estudos = $_POST['inicio'];
$terminio_estudos = $_POST['terminio'];
$obs_estudos = $_POST['msg'];
$empresa = $_POST['emprego'];
$cargo = $_POST['função'];
$inicio_emprego = $_POST['inicio_emprego'];
$terminio_emprego = $_POST['terminio_emprego'];
$obs_emprego = $_POST['observações_emprego'];
// $nome_ref = $_POST['nome_ref'];
// $contato_ref = $_POST['contato_ref'];
// $email_ref = $_POST['email_ref']; 




$texto = "<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE-edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <title>AULA PHP ETEC</title>
        <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='css/normalize.css'>
        <link rel='stylesheet' type='text/css' href='css/estilo.css'>
        <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/responf/1.4.2/respond.min.js'></script>
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
    <div class='jumbotron'>
                <header style='text-align: center;'>
                <h1>  ".$nome." </h1>
                </header>
                <div class='navbar-header'>
                    

                </div>
            </div>
        <div class='container'>
            
            
            <div class='row'>
                <div class='col-md-4'>
                 
                 
                <h2><b>Contato</b></h2>
                <p>Telefone: ".$contato."</p>
                <p>E-Mail: ".$email."</p>
                <h2><b>Endereço</b></h2>
                <p>Rua: ".$rua.", Nº ".$numero.",<p>
                <p>CEP: ".$cep.",</p>
                <p>Bairro: ".$bairro.", Cidade: ".$cidade.",</p>
                <p>Estado: ".$estado."<p>
            
                <h2><b>Referência</b></h2>       
                <p>Nome: ".$nome_ref."</p>
                <p>Telefone: ".$contatp_ref."</p>
                <p>Email: ".$email_ref."</p>          
                </div>
            
            <div class='col-md-4'>
            <h2><b>Formação</b><br></h2>";

            for($x = 0; $x <= $formação; $x++){
              $texto .= "<p> Instituição de Ensino: ".$formação[$x]."</p>
                <p>Período: ".$inicio_estudos[$x]. "- ".$terminio_estudos[$x]."</p>
                <p>Observações: ".$obs_estudos[$x]."</p><br>"; }

            
           
                for($i = 0; $i <= $empresa; $i++){
                $texto .="<h2><b>Experiência Profissional</b></h2>
                <p>Nome da Empresa: ".$empresa[$i].",</p>
                                <p> Função: ".$cargo[$i]."</p>
                                <p>Período: ".$inicio_emprego[$i]."</p>
                                <p> Observações: ".$terminio_emprego[$i]."</p>";}
            
            $texto.= "</div>
            <div class='col-md-4'>
                <h1><b>Observações:</b> </h1>
                <p>".$obs_emprego."</p>
            </div>
            </div>
        </div>
        
    </body>
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>
    
</html>";
echo $texto;
    
?>
 



