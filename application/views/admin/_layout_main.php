<?php echo "<pre>";var_dump($user);die();?>
<?php $this->load->view('admin/components/page_head');?>
<!-- Morris Charts CSS -->
<link href="<?php echo base_url('css/plugins/morris.css');?>" rel="stylesheet">
<!-- Custom Fonts -->
<link href="<?php echo base_url('font-awesome-4.1.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin/dashboard');?>"><?php echo $meta_title;?></a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <!-- Envolp look in the orignal theme -->
            <!-- Bell look in the orignal theme -->
            <!-- Current logged in user -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user->username;?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo site_url('admin/user/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="<?php echo site_url('admin/dashboard')?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/pages');?>"><i class="fa fa-fw fa-bar-chart-o"></i> Pages</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/user');?>"><i class="fa fa-fw fa-users"></i> Users</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php $this->load->view('admin/components/page_tail');?>