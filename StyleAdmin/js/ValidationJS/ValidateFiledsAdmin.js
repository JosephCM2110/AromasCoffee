
function validateFieldsAdministrator() {

    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);
    var count = document.getElementById('countAdmin').value;

    for (var i = 0; i < count; i++) {
        var fieldUserName = document.getElementById('txtName' + i);
        var fieldPassword = document.getElementById('txtPassword' + i);
        var fieldEmail = document.getElementById('txtEmail' + i);

        if (fieldEmail.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
        if (fieldUserName.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
        if (fieldPassword.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
    }

    return true;
}

function validateFieldsAdministratorCreate() {

    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);

    var fieldUserName = document.getElementById('txtUserName');
    var fieldPassword = document.getElementById('password');
    var fieldEmail = document.getElementById('txtEmail');

    if (fieldEmail.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }
    if (fieldUserName.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }
    if (fieldPassword.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }


    return true;
}


function validateFieldsHistory() {

    var fieldHistoryEs = document.getElementById('txtHistory');

    if (fieldHistoryEs.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }
    return true;
}

function validateFieldsMission() {

    var fieldMissionEs = document.getElementById('txtMission');

    if (fieldMissionEs.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }

    return true;
}

function validateFieldsView() {

    var fieldView = document.getElementById('txtView');

    if (fieldView.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }

    return true;
}

function validateFieldsCharacteristics() {

    var cont = document.getElementById('contChara').value;
    for (var i = 0; i <= cont; i++) {
        var fieldCharacteristics = document.getElementById('txtCharacteristic' + i);

        if (fieldCharacteristics.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
    }

    return true;
}

function validateFieldsProducts() {

    var cont = document.getElementById('contProduct').value;
    for (var i = 0; i < cont; i++) {

        var fieldNameProduct = document.getElementById('txtNameProduct' + i);
        var fieldDescriptionProduct = document.getElementById('txtDescriptionProduct' + i);

        if (fieldNameProduct.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
        if (fieldDescriptionProduct.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
    }
    return true;

}
function validateFieldsProductsCreate() {

    var fieldNameProduct = document.getElementById('txtNameProduct');
    var fieldDescriptionProduct = document.getElementById('txtDescriptionProduct');

    if (fieldNameProduct.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }
    if (fieldDescriptionProduct.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }

    return true;

}
function validateFieldsAchievementCreate() {

    var fieldAchievement = document.getElementById('txtAchievement');

    if (fieldAchievement.value.length < 2) {
        document.getElementById('txtError').innerHTML = "*espacio vacío";
        document.getElementById('txtError').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtError').style.visibility = "hidden";
    }

    return true;

}

function validateFieldsAchievement() {

    var cont = document.getElementById('contAchievement').value;
    for (var i = 0; i <= cont; i++) {
        var fieldAchievement = document.getElementById('txtAchievement' + i);

        if (fieldAchievement.value.length < 2) {
            document.getElementById('txtError').innerHTML = "*espacio vacío";
            document.getElementById('txtError').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtError').style.visibility = "hidden";
        }
    }

    return true;
}