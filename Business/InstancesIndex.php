<?php

include './Business/OrganizationBusiness.php';
include './Business/CharacteristicBusiness.php';
include './Business/ProductBusiness.php';
include './Business/DescriptiveSheetCofeeBusiness.php';
include './Business/AchievementBusiness.php';
include './Business/PhoneBusiness.php';
include './Business/EmailBusiness.php';
include './Business/CoffeeTourBusiness.php';
include './Business/ImageProductBusiness.php';
include './Business/ImageBusiness.php';
include_once './Business/ValidatePHP.php';

$organizationBusiness = new OrganizationBusiness();
$organization = $organizationBusiness->getAllTBOrganizations();

$characteristicsBusiness = new CharacteristicBusiness();
$characteristics = $characteristicsBusiness->getAllTBCharacteristics();

$productBusiness = new ProductBusiness();
$products = $productBusiness->getAllTBProducts();

$imageProductBusiness = new ImageProductBusiness();
$descriptiveSheetCofeeBusiness = new DescriptiveSheetCofeeBusiness();

$descriptives = $descriptiveSheetCofeeBusiness->getAllTBDescriptiveSheetCofees();

$achievementBusiness = new AchievementBusiness();
$achievements = $achievementBusiness->getAllTBTBAchievements();

$phoneBusiness = new PhoneBusiness();
$phones = $phoneBusiness->getAllTBPhones();

$emailBusiness = new EmailBusiness();
$emails = $emailBusiness->getAllTBEmails();

$coffeeTourBusiness = new CoffeeTourBusiness();
$coffeeTours = $coffeeTourBusiness->getAllTBCoffeeTours();

$imageBusiness = new ImageBusiness();
$allImages = $imageBusiness->getAllTBImages();
