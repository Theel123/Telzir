
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
        $( document ).ready(function() {
            $("#formId").submit(function(e){
                e.preventDefault();

                //var data = {}
                var json = ConvertFormToJSON("#formId");
                var Form = this;

                alert(json );


                //Save Form Data........
                $.ajax({
                    cache: false,
                    url : 'http://uol.com.br/',
                    type: "POST",
                    dataType : "json",
                    data : json,
                    context : Form,
                    success : function(callback){
                        //Where $(this) => context == FORM
                        console.log(JSON.parse(callback));
                        $(this).html("Success!");
                    },
                    error : function(){
                        $(this).html("Error!");
                    }
                });
            });
        });


        function ConvertFormToJSON(form){
            console.log('ConvertFormToJSON invoked!');
            var array = jQuery(form).serializeArray();
            var json = {};

            jQuery.each(array, function() {
                json[this.name] = this.value || '';
            });

            console.log('JSON: '+json);
            return json;
        }
    </script>

</head>

<body>

<div id="container">

<div class="row justify-content-start">
  <div class="col-3">

    <form id="formId">
        <table>
            <tr> 
                <td>Nome:</td>
                <td>
                  <select name="editoras" id="editoras">
                    <option>Selecione sua Origem</option>

                    <?php
                       $lista =  $livro->arrayOrigens();
                       foreach ($lista as $item):?>

                       <option value=<?php print $item['origem'];?> ><?php print $item['origem'];?></option>

                    <?php endforeach;?>
                        </select><
                      </td>
            </tr>
            <tr> 
                <td>Email:</td>
                <td><input type="text" size=100 id="inputEmailId" /></td>
            </tr>
            <tr> 
                <td>CPF:</td>
                <td><input type="text" size=100 id="inputCpfId" /></td>
            </tr>
            <tr><td><input type="submit" value="Submit" /></td></tr>
    
        </table>

    </form>
</div>
</div>

<div class="row justify-content-right">
<div class="col-3">
  <table class="table table-bordered">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Origem</th>
      <th scope="col">Destino</th>
      <th scope="col">Tempo</th>
      <th scope="col">Plano FaleMais</th>
      <th scope="col">Com FaleMais</th>
      <th scope="col">Sem FaleMais</th>

    </tr>
  </thead>
  <tbody>


             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    
             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    
             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    

             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    
             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    
             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    

             <td> 

            <a href="#">[EDITAR]</a>
            <a href="#">[DELETAR]</a>
        </td>
    
  </tbody>
</table>
</div>
</div>

</body>
</html>