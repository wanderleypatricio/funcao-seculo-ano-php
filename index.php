<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript">
            $(document).on('click', "#btnEnviarDados", function () {
               var ano = $("#ano").val();
               
                // criando as variáveis
                var url = "seculoAno.php";
                var data = {ano:ano};

                $.post(
                 url, //Required URL of the page on server
                 data,
                 function(response,status)
                 {
                   // tratando o status de retorno. Sucesso significa que o envio e retorno foi executado com sucesso.
                   if(status == "success")
                   {
                      // pegando os dados jSON
                      var obj = jQuery.parseJSON(response);
                      
                     $("#result").html(
                       "Século: " + obj
                     );
                   }    	
                 }
                );
            });
        </script>
    </head>
    <body>
        
        <h2>Informe o ano para saber a qual século ele pertence</h2>
        <form id="form">
            <label>Ano:</label>
            <input id="ano" type="number" name="ano"/>
            <input id="btnEnviarDados" type="button" value="Enviar"/>
        </form>
        
        <span id="result"></span>
    </body>

</html>
