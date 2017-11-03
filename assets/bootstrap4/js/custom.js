$( document ).ready(function() {
  	 imprimeTablaUsuarios();
     
   function imprimeTablaUsuarios(){
     $.ajax({
          data: 'tabla=1',
          url: 'controller/vista1.php',
          type: 'post',
          beforeSend: function(){
             $("#tabla").html("Procesando, espere por favor...");
          },
          success: function(response){
              
              $("#tabla").html(response);
          }

        });
   }

    $( "#enviarUsuario" ).click(function() {
  		event.preventDefault();
  		 var data = $( "#fmUsuarios" ).serialize();
       console.log(data);

       $.ajax({
                data:  data, //datos que se envian a traves de ajax
                url:   'controller/vista1.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                  $("tabla").html("Procesando, espere por favor...");
                },
                success:  function () { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  imprimeTablaUsuarios();
                  $('#exampleModal').modal('toggle');
                  toastr.success('Have fun storming the castle!', 'Miracle Max Says')
                }
        });
	});

});