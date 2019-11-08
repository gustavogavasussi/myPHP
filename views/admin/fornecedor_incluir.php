<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>My PHP | Cadastrar</title>
    <?php require_once("dist/css/css.php"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- INICIO Navbar -->
        <?php require_once("layout/navbar.php"); ?>
        <!-- FIM navbar -->

        <!-- INICIO Main Sidebar Container -->
        <?php require_once("layout/mainSideBar.php"); ?>
        <!-- FIM Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cadastrar Fornecedor</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="fornecedor.php">Fornecedor</a></li>
                                <li class="breadcrumb-item active">Cadastrar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>CNPJ/CPF - NOME/RazaoSocial -
                                        EndereçoCompleto - Telefone/Email - Status</h5>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <label>Estabelecimento</label>
                                                    <div class="form-check">
                                                        <input id="pf" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pf" class="form-check-label">Pessoa Física</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="pj" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pj" class="form-check-label">Pessoa Juridica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md 3" id="divTipoDocumento">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md 3" id="divNomeRazaoSocial">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md 3" id="divNomeFantasia">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md 3" id="divInscricaoEstadual">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input type="text" class="form-control" id="cep">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Rua</label>
                                                    <input type="text" class="form-control" id="rua">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="text" class="form-control" id="numero">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" id="bairro">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" class="form-control" id="cidade">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>UF</label>
                                                    <input type="text" class="form-control" id="uf">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>IBGE</label>
                                                    <input type="text" class="form-control" id="ibge">
                                                </div>
                                            </div>


                                        </div>
                                </div>
                                <div class="card-footer">
                                    este é o fotter
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php require_once("layout/controlSideBar.php"); ?>
        <!-- /.control-sidebar -->

        <!-- #region Footer -->
        <?php require_once("layout/footer.php"); ?>
        <!-- #endregion Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php require_once("dist/js/javascript.php");?>
    <script src="dist/js/pages/fornecedor/fornecedor_incluir.js"></script>
    <script src="dist/js/viacep.js"></script>
</body>

</html>