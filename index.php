
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
  <title>A gridstack.js dashboard</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.0/lodash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.all.js"></script>
  <style>
  /*grid layouts*/
.grid-property {
    padding          : 1.5em 0;
    background-color : #fff;
    border           : 2px solid #888;
    border-radius    : 3px;
}
.grid-section {
    margin-top : 77px;
}
.grid-section h3 {
    margin-left : 15px;
}
/*grid layout responsive*/
@media only screen and (max-width : 768px) {
    .grid-selection2 {
        margin-top : 22px;
    }
}
@media only screen and (max-width : 425px) {
    .grid-selection1 {
        margin-top : 22px;
    }
}
/*grid-stack*/
.grid-stack-item-content {
    background : url('brick-wall.png');
    color      : #2c3e50;
    text-align : center;
    font-size  : 20px;
}
.grid-stack-item-content .fa {
    font-size : 64px;
    display   : block;
    margin    : 20px 0 10px 0;
}
.grid-stack > .grid-stack-item > .grid-stack-item-content {
    cursor : move;
}
  </style>
    <!-- end of page level css-->
</head>

<body class="skin-default">

<div class="wrapper row-offcanvas row-offcanvas-left">
        
    <aside class="right-side">
        <section class="content">
            <!--main content-->
                <!--grif stack-->
                <div class="col-md-12 ">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="ti-layout-grid3"></i> Gridstack
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid-stack" data-gs-width="12" data-gs-animate="yes">
                                        <div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4"
                                             data-gs-height="2">
                                            <div class="grid-stack-item-content">1</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
            
            <!--main content ends-->
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<script type="text/javascript" >
"use strict";
$(document).ready(function () {
    $(function () {
        $('.grid-stack').gridstack({
            width: 12,
            alwaysShowResizeHandle: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            resizable: {
                handles: 'e, se, s, sw, w'
            }
        });
    });
});</script>
<!-- end of page level js -->
</body>

</html>
