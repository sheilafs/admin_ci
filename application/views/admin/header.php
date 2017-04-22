<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/tema/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/tema/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>asset/tema/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                
            </div>
            <!-- Top Menu Items -->
			<?php 
				if($this->session->userdata('logged_in') != TRUE){
					echo "base_url('login')";
				} else {
					if($this->session->userdata('level') == 1){ ?>
					<ul class="nav navbar-right top-nav">
						<li class="dropdown">
							<a href="<?php echo base_url();?>admin/profilu" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hi, <?php echo $this->session->userdata('username');?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav side-nav">
							<li class="active"><a href="<?php echo base_url();?>admin/"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a></li>
							<li><a><i class="fa fa-fw fa-edit"></i>Progress</a></li>
						</ul>
					</div>
				<?php } else {
					echo "base_url('admin/')";
					}
				}
			?>
        </nav>