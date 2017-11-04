 toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
$( document ).ready(function() {
 

 
 $("#mimodal").click(function(){
    $("#formulario").show();
    $("#contenido").hide();
  });

  $("#cancelModal").click(function(){
    $("#formulario").hide();
    $("#contenido").show();
  });

//toastr.success('Agregado Correctamente.');
     //imprimeTablaUsuarios();
     
   /*function imprimeTablaUsuarios(){
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
       var camp1 = $("#matricula").val();
       var camp2 = $("#nombre").val();
       var camp3 = $("#ap1").val();
       var camp4 = $("#ap2").val();
       var camp5 = $("#mail").val();
       var camp6 = $("#tel").val();
       var camp7 = $("#").val();
       var camp8 = $("#").val();
       var camp9 = $("#").val();
       console.log(camp1);
       if (camp1 == ""){
          $("#dMatricula").addClass('has-danger');
          return false;
          
       }
       var data = $( "#fmUsuarios" ).serialize();
       console.log(data);

       $.ajax({
                data:  data, 
                url:   'controller/vista1.php?task=add', 
                type:  'post', 
              }).done(function(data){
                $("#ModalAdd").modal('toggle');
                
                imprimeTablaUsuarios();
              });
    });


    $(document).on('click', '.update', function(){ 
      var idUsuario = $(this).attr("id");
      console.log(idUsuario);

    });*/


});