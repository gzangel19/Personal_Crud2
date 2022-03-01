<!DOCTYPE html>

<html lang="es">
    
    <head>

        <?php require_once("../Layourt/mainHeader.php"); ?>

        <title> Mantenimiento Producto </title>

    </head>

    <body class="sb-nav-fixed">
        
        <?php require_once("../Layourt/mainNavBar.php"); ?>
        
        <div id="layoutSidenav">
            
            <div id="layoutSidenav_nav">

                <?php require_once("../Layourt/mainMenu.php"); ?>
                
            </div>

            <div id="layoutSidenav_content">
                
                <main>

                    <div class="br-pagebody mt-4">

                        <div class="br-section-wrapper">
                            
                            <div class="card-header">
                                    
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> <i class="fas fa-table me-1"></i> Mantenimiento de Productos </h6>
                               
                                <button class="btn btn-outline-primary btn-block mg-b-10" id="btnNuevoRegistro"> <i class="fas fa-plus"></i> Nuevo Registro </button>
                            
                            </div>
                            
                            
                            <div class="card-body">
                                
                                <table id="productos_data" class="table display responsive nowrap">
                                        
                                    <thead>
                                            
                                        <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Fecha de Creacion</th>
                                                <th></th>
                                            
                                        </tr>
                                        
                                    </thead>

                                        
                                    <tfoot>
                                            
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Fecha de Creacion</th>
                                            <th></th>

                                            
                                        </tr>
                                        
                                    </tfoot>
                                        
                                    <tbody>
                                            
                                        <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                            
                                        </tr>
                                            
                                    </tbody>
                                    
                                </table>
                                
                            </div>
                    
                        </div>

                    </div>

                </main>

                <?php require_once("../Layourt/mainFooter.php"); ?>
                
            </div>
        </div>
        
        <?php require_once("modalMantenimiento.php"); ?>

        <?php require_once("../Layourt/mainJs.php"); ?>
        
        <script type="text/javascript" src="mntProducto.js"> </script>

    </body>

</html>
