<?php

if (isset($_GET['success'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡El registro fue exitoso!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['error'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al registar!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorData'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Debe ingresar todos los campos!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
}if (isset($_GET['successDelete'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡La eliminación fue exitosa!","Eliminación");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorDelete'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al eliminar!","Eliminación");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['successCreate'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡El usuario se registró con éxito!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorCreate'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al registrar el usuario!","Registro");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorUpdate'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al actualizar!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
}