<?php
if (@session_start() == false) {
    session_start();
    if (!isset($_SESSION["userName"])) {
        header('location: ./login.php');
    }
} else {
    if (!isset($_SESSION["userName"])) {
        header('location: ./login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../Resources/Icons/FOTO AROMAS.jpg" type="image/x-icon">
        <title>Café Aromas</title>

        <!-- Bootstrap -->
        <link href="../StyleAdmin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../StyleAdmin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../StyleAdmin/vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../StyleAdmin/js/ValidationJS/ValidateFiledsAdmin.js" type="text/javascript"></script>
    </head>

    <body class="nav-md">
        <?php
        include './reusableMenu.php';
        include_once '../BusinessAdmin/DescriptiveSheetCoffeeAdminBusiness.php';
        $descriptiveSheetCofeeBusiness = new DescriptiveSheetCofeeAdminBusiness();
        $result = $descriptiveSheetCofeeBusiness->getAllTBDescriptiveSheetCofees();
        ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">                       

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Café Aromas<small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>                                         
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="bs-docs-section">
                                    <h1 id="glyphicons" class="page-header">Administrar información</h1>
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">

                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Ficha descriptiva del café</a>
                                            </li>  
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                <ul>
                                                    <form id="frmInformation" method="POST" action="../BusinessAdmin/DescriptiveSheetCoffeeAction.php">
                                                        <input type="hidden" name="idDescriptiveSheetCofee" value="<?php echo $result->getIdDescriptiveSheetCofee(); ?>">
                                                        <li>Región del café</li>
                                                        <input name="coffeeRegion" id="coffeeRegion" value="<?php echo $result->getCofeeRegion(); ?>" />
                                                        <li>Caracteristicas de la región</li>
                                                        <textarea name="characteristicRegion" id="characteristicRegion"><?php echo $result->getCharacteristicRegion(); ?></textarea>
                                                        <li>Altura</li>
                                                        <input type="text" name="heigth" id="heigth" value="<?php echo $result->getHeight(); ?>" />
                                                        <li>Variedades de café</li>
                                                        <textarea name="varietiesCoffee" id="varietiesCoffee"><?php echo $result->getVarietiesCofee(); ?></textarea>
                                                        <li>Periodo de cosecha</li>
                                                        <textarea id="harvestPeriod" name="harvestPeriod"><?php echo $result->getHarvestPeriod(); ?></textarea>
                                                        <li>Tipo de secado</li>
                                                        <textarea name="driedType" id="driedType"><?php echo $result->getDriedType(); ?></textarea><br>
                                                        <label style="color: #BA2121;" id="txtError"></label><br>
                                                        <br><br>
                                                        <input type="submit" value="Actualizar" name="update" id="update" onclick="return validateFieldsDescriptiveSheetCoffee()" /><br>
                                                        <div class="separator"></div>
                                                    </form>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Café Aromas
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<!-- Modal
            ============================================= -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
        </div>

    </div>
</div>

<!-- jQuery -->
<script src="../StyleAdmin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../StyleAdmin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../StyleAdmin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../StyleAdmin/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../StyleAdmin/build/js/custom.min.js"></script>

<?php
if (isset($_GET['success'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡La actualización fue exitosa!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['error'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Error al actualizar!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
} else if (isset($_GET['errorData'])) {
    echo '<script>                
            $(document).ready(function(){
                modalSelect("¡Debe ingresar todos los campos!","Actualización");
                $("#myModal").modal("show");
            });
        </script>';
}
?>
<script>
    function modalSelect(modalMessage, modalTitle) {
        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
        document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
    }
</script>
</body>
</html>
