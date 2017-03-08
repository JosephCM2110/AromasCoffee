<?php

include_once '../BusinessAdmin/CharacteristicsAdminBusiness.php';
include_once '../Domain/Characteristic.php';


if (isset($_POST['update'])) {

    $idChara = $_POST['idCharacteristic'];
    $characteristi = $_POST['txtCharacteristic'];

    if (strlen($characteristi) > 2) {

        $characteristic = new Characteristic($idChara, $characteristi);
        $characteristicsBusiness = new CharacteristicsAdminBusiness();
        $result = $characteristicsBusiness->updateTBCharacteristic($characteristic);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationCharacteristics.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationCharacteristics.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationCharacteristics.php?errorData=error');
    }
} else if (isset($_POST['create'])) {

    $characetristic = $_POST['txtCharacteristic'];

    if (strlen($characetristic) > 2) {

        $characteristicsBusiness = new CharacteristicsAdminBusiness();
        $result = $characteristicsBusiness->insertTBCharacteristic($characetristic);

        if ($result) {
            header('location: ../PresentationAdmin/adminCreateDeleteCharacteristics.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteCharacteristics.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteCharacteristics.php?errorData=error');
    }
} else if (isset($_POST['delete'])) {

    $idChara = $_POST['idChara'];

    $characteristicsBusiness = new CharacteristicsAdminBusiness();
    $result = $characteristicsBusiness->deleteTBCharacteristic($idChara);

    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteCharacteristics.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteCharacteristics.php?errorDelete=error');
    }
}
