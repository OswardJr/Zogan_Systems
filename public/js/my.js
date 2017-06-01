function buscar_prov(){
 var id=$("#id").val();
 $.ajax({
  url: '/vehiculos/index',
  type: 'GET',
  data: {'id':id},
  dataType: 'json',
  success: function(data) {
    swal(data.msj)
  },
});
}

//DB::table('propietarios')->where('id', 7)->update(['status' => 'inactivo']);