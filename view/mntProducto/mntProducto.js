var tabla;

function init(){
    $('#producto_form').on('submit',function(e){
        guardarEditar(e);
    });
}

$(document).ready(function(){

    tabla = $('#productos_data').dataTable({
        "aProcessing": true, //Activa el prosedamietno del datatables
        "aServerSide": true, //Paginacion y filtrado realizados por el servidor
        dom: 'Bfrtip', //Definimos los elementos del control de tabla
        buttons:[
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
                ],
        "ajax":{
          url: '../../controller/ProductoController.php?opcion=listar', //Obtener los valores desde url
          type: "get",
          dataType: "json", //Datos codificados mediante json
          error:function(e){
            console.log(e.responseText);
          }
        },
           
        "bBestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 20, //Paginacion de X en X registros.
        "order": [[0, "desc"]], //Ordenar (columna,orden).
        "language": {
            "decimal": ",",
            "thousands": ".",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoPostFix": "",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "processing": "Procesando...",
            "search": "",
            "searchPlaceholder": "Término de búsqueda",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "aria": {
                "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            //only works for built-in buttons, not for custom buttons
            "buttons": {
                "create": "Nuevo",
                "edit": "Cambiar",
                "remove": "Borrar",
                "copy": "Copiar",
                "csv": "fichero CSV",
                "excel": "tabla Excel",
                "pdf": "documento PDF",
                "print": "Imprimir",
                "colvis": "Visibilidad columnas",
                "collection": "Colección",
                "upload": "Seleccione fichero...."
            },
            "select": {
                "rows": {
                    _: '%d filas seleccionadas',
                    0: 'clic fila para seleccionar',
                    1: 'una fila seleccionada'
                }
            }
        } 
      }).DataTable();

});

function guardarEditar(e){
    e.preventDefault();
    var formData = new FormData($("#producto_form")[0]);
    $.ajax({
        url: "../../controller/ProductoController.php?opcion=editarGuardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){

            $('#producto_form')[0].reset();
            $("#modalmantenimiento").modal('hide');
            $('#productos_data').DataTable().ajax.reload();

            swal.fire(
                'Registro!',
                'Correcto!',
                'success'
            )
        }
    });
}

function editar(prod_id){

    $('#mdltitulo').html('Editar Registro');
    
    $('#modalmantenimiento').modal('show');

    $.post('../../controller/ProductoController.php?opcion=mostrar',{prod_id:prod_id},function(data){

        data = JSON.parse(data);

        $('#prod_id').val(data.prod_id);

        $('#prod_nombre').val(data.prod_nombre);

        $('#prod_descripcion').val(data.prod_descripcion);

    });

    
}

function eliminar(prod_id){
    Swal.fire({
        title: 'Eliminar',
        text: "Estas Seguro de Eliminar el Registro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Eliminalo!'
      }).then((result) => { 
        if (result.isConfirmed) {
            
            $.post('../../controller/ProductoController.php?opcion=eliminar',{prod_id:prod_id},function(data){

            });
;
            $('#productos_data').DataTable().ajax.reload();	

          Swal.fire(
            'Eliminado!',
            'El Registro Fue Eliminado con Exito.',
            'success'
          )
        }
      })
}

$(document).on("click","#btnNuevoRegistro", function(){
    $('#mdltitulo').html('Nuevo Registro');
    $('#producto_form')[0].reset();
    $('#prod_id').val('');
    $('#modalmantenimiento').modal('show');
});

$(document).on("click","#btnCerrarModal", function(){
    $('#modalmantenimiento').modal('hide');
});

init();