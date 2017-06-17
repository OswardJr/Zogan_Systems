function buscar_prop(){
 var id=$("#datos").val();
 $.ajax({
  url: '/vehiculos/buscar_propietarios',
  type: 'GET',
  data: {'rif':rif},
  dataType: 'json',
  success: function(data) {
    swal(data.msj)
  },
});
}
/*$('.hola').on('click', function(e){
    e.preventDefault();
    var url = $(this).attar('href');
    $.getJSON(url, function(response){
        $.each(response, function(key, value){
            // loop... you may use $(this) or value
        });
    });
});
*/

/*function buscar_prop(){

  var prop=$("#datos").val();
      if(prop == "1")
    {
      var url="buscar_propietarios/"+prop+"";
    }
   $.get(url,function(resul){
    $("#form").html(resul);  
  })

}
*/

/*$(document).ready(function(){
  $ajaxSetup({
  headers : {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }  
  });
});

$('#form_ope').on('submit',function(e){
  e.preventDefault();
    var url = $(this).attr('action');
    var post = $(this).attr('method');
    var data = $(this).serialize('');

    $.ajax({
      type : post,
      url : url,
      data : {'cedula':cedula,
              'nombre':nombre,
              'apellido':apellido,
              'telefono':telefono,
              'celular':celular,
              'email':email,
              'tipo':tipo,
              'direccion':direccion},

        success:function(data){
          console.log(data)
        }      
              
    })
  

})
*/
function buscarusuario(){

  var $rif=$("#dato_buscado").val();
      if($rif == "")
    {
      var url="buscar_usuarios";
    }
    else
    {
      var url="buscar_usuarios/"+$rif+"";
    }
  
    $("#page-content-wrapper").html();
      $.get(url,function(resul){
       $("#page-content-wrapper").html(resul);  
  })

}


function buscarusuario(){
  var $id=$("#dato_buscado").val();
      if($id == "")
    {
      var url="/vehiculos/create/buscar_usuarios";
    }
    else
    {
      var url="/vehiculos/create/buscar_usuarios/"+$id+"";
    }
  
  $("#page-content-wrapper").html($("#panel-body").html());
 $.get(url,function(resul){
    $("#page-content-wrapper").html(resul);  
  })

}