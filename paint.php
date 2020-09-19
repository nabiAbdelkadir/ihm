<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>paint</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">

</head>


  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini" style="bacground:red">

      <?php include("sing.php") ?>
      <?php include("navbar.php"); ?>
    <div class="wrapper">
        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                     <li>
                        <a href="javascript:void(0)" class="drawable" draw-type="18">
                            <i class="fa fa-mouse-pointer"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="drawable" draw-type="1">
                           <i class="fas fa-chart-line"></i>
                            <span>Çizgi</span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle"></i>
                            <span>Çember</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#" class="drawable" draw-type="3">
                                    <i class="fa fa-circle"></i>
                                    <span>Çember</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="drawable" draw-type="21">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Diamater Circle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-retweet"></i>
                            <span>Dörtgen</span>

                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="5">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Dikdörtgen</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="12">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Açılı Dikdörtgen</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-caret-up"></i>
                            <span>Üçgen</span>

                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="2">
                                    <i class="fa fa-caret-up"></i>
                                    <span>Üçgen</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="6">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>İkizkenar Üçgen</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="7">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Eşkenar Üçgen</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="8">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Sağ Üçgen</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-connectdevelop"></i>
                            <span>Çokgen</span>

                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="9">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Poligon</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="10">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Düzenli Poligon</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="11">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Düzenli 2. Poligon</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="15">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Pen Tool</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="drawable" draw-type="13">
                            <i class="fa fa-angle-right"></i>
                            <span>Açı Ölçer</span>
                        </a>
                    </li>
                     <li>
                        <a href="javascript:void(0)" class="drawable" draw-type="17">
                            <i class="fa fa-paint-brush"></i>
                            <span>İşaretli Nokta</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)">
                            <i class="fa fa-ellipsis-h"></i>
                            <span>Elips</span>

                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="16">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Elips</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="drawable" draw-type="14">
                                    <i class="fa fa-circle-thin"></i>
                                    <span>Parabol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="drawable" draw-type="19">
                            <i class="fa fa-anchor"></i>
                            <span>Arc Defined By Tree Points</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="drawable" draw-type="20">
                            <i class="fas fa-fill"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="drawable" title="smoothed line" draw-type="22">
                             <i class="fas fa-bezier-curve"></i>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <!-- <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="#">Layout</a>
                    </li>
                    <li class="active">Collapsed Sidebar</li>
                </ol> -->
                <div class="flex-container">
                    <select id="selectZoom" class="custom-select" style="width:120px;font-size:11px">
                        <option value="90">90%</option>
                        <option value="100">100%</option>
                        <option value="110">110%</option>
                        <option value="120">120%</option>
                        <option value="130">130%</option>
                        <option value="140">140%</option>
                        <option value="150">150%</option>
                        <option value="200" selected="selected">200%</option>
                        <option value="300">300%</option>
                        <option value="400">400%</option>
                        <option value="500">500%</option>
                    </select>
                    <select id="selectLine" class="custom-select" style="width:120px">
                        <option value="none">line</option>
                        <option value="5,5">Kesik line</option>
                    </select>
                    <select id="selectWidth" class="custom-select" style="width:120px;font-size:11px">
                        <option value="1" selected="selected">1pt</option>
                        <option value="0.5">0.5pt</option>
                        <option value="2">2pt</option>
                    </select>
                    <input type="color" value="#000000" id="lineColor" title="line color">
                    <input type="color" value="#00c0ef" id="brushColor" title="fırça rengi">
                    <input type="button" value="Rotate" id="rotate">
                </div>
                <div class="flex-container">
                    <i class="fa fa-th" style="font-size:24px;cursor: pointer;" title="Grid"></i>
                    <i class="fa fa-paint-brush  " id="auto-point"  style="font-size: 24px;" title="Auto Point"></i>
                    <i class="fa fa-times point-type" point-type="1" style="font-size: 24px;" title="No Grid"></i>
                    <i class="fa fa-th-large point-type" point-type="2" style="font-size: 24px;" title="Use Grid"></i>
                    <i class="fa fa-code point-type point-selected" point-type="3" style="font-size: 24px;" title="Use Geometrically Aware Drawing"></i>

                   <i class="fa fa-adjust layer-type" layer-type="1" style="font-size: 24px;" title="Bring to front"></i>
                   <i class="fas fa-layer-group layer-type" layer-type="2" style="font-size: 24px;" title="Send to back"></i>
                   <i class="fas fa-clone layer-type" layer-type="3" style="font-size: 24px;" title="Bring forward"></i>
                   <i class="fas fa-eye-slash layer-type" layer-type="4" style="font-size: 24px;" title="Send backward"></i>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- <canvas id="glcanvas" width="620" height="620"></canvas> -->
                <!-- <div id="drawing"></div> -->
            <div id="svg-wrapper" style="width:1150px;height:600px;overflow:auto !important">
                <svg id="drawing"   width="299.773mm" height="299.773mm" viewBox="0 0 1133 1133" oncontextmenu="event.preventDefault();" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.2">

                    <!-- <defs>
                        <marker id="arrow" viewBox="0 0 10 10" markerWidth="20" markerHeight="20" refX="0" refY="3" orient="auto">
                            <path d="M0,0 L0,6 L9,3 z" fill="#f00" />
                        </marker>
                    </defs> -->

                </svg>
            </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->


</body>



    <script  src="js/index.js"></script>
    <script  src="js/jquery-2.1.1.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <script  src="js/main.js"></script>





</html>
