function deleteImageGalery(idImage, path) {

    var parametros = {
        "idImage": idImage,
        "deleteGalery": 'deleteGalery',
        "path": path
    };
    $.ajax({
        data: parametros,
        url: '../BusinessAdmin/ImagesAction.php',
        type: 'post',
        beforeSend: function () {

        },
        success: function (response) {            
            modalSelect("¡La eliminación fue exitosa!", "Eliminación");
            $("#myModal").modal("show");
            location.reload(true);
        },
        error: function () {            
            modalSelect("¡Error al eliminar!", "Eliminación");
            $("#myModal").modal("show");
            location.reload(true);
        }
    });
}

function deleteImageProduct(idImage, path) {

    var parametros = {
        "idImage": idImage,
        "deleteProduct": 'deleteProduct',
        "path": path
    };
    $.ajax({
        data: parametros,
        url: '../BusinessAdmin/ImagesAction.php',
        type: 'post',
        beforeSend: function () {

        },
        success: function (response) {            
            modalSelect("¡La eliminación fue exitosa!", "Eliminación");
            $("#myModal").modal("show");
            location.reload(true);
        },
        error: function () {            
            modalSelect("¡Error al eliminar!", "Eliminación");
            $("#myModal").modal("show");
            location.reload(true);
        }
    });
}

function modalSelect(modalMessage, modalTitle) {
    document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
    document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
    
}