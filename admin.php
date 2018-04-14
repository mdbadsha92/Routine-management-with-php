<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
	<style type="text/css">
	h1
	  {color:667D5E;
	  font-family:arial;text-align:center;
	  background-position:12% 1.5px;
	  }
	  body
	  {
	  background-image:url(uvlogo.png);
	  background-repeat:no-repeat; 
	  background-position:12% 1.5px;
	  }
	  div.picture
	  {
	  width:900px;
      height:500px;
      background-image:url(cse_img.PNG);
	  background-repeat:no-repeat; 
      margin:0; 
      padding:0;
      }
	  
	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body class="hold-transition skin-blue sidebar-mini">
 
   <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a class="logo">
          <span class="logo-lg"><b>Admin</b>panel</span>
        </a>
	   <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
							  <!-- Sidebar toggle button-->
							   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
								  <span class="sr-only">Toggle navigation</span>
							  </a>
							  <div class="pos">
							    <i class="fa fa-desktop icon-align" aria-hidden="true"></i>
								 <h1 class="text-h1"> Computer science and Engineering<br><h1><h6 class="text-center">Routine management System<h6>
							 </div>
						</nav>
	 </header>
      <!-- Left side column. contains the logo and sidebar -->
     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/icon.PNG" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Mostafa Kamal Nasir</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
					<li class="header">Main menu</li>
					<li>
						  <a href="http://127.0.0.1/projects/project/admin.php">
							<i class="fa fa-home"></i> <span>Home</span>
						  </a>
					</li>
					<li class="treeview">
						  <a href="#">
							<i class="fa fa-edit"></i> <span>Registration</span>
							<i class="fa fa-angle-left pull-right"></i>
						  </a>
						  <ul class="treeview-menu">
								<li><a href="http://127.0.0.1/projects/project/pages/forms/course.php"><i class="fa fa-circle-o"></i>Course Registration Form</a></li>
								<li><a href="http://127.0.0.1/projects/project/pages/forms/teacher.php"><i class="fa fa-circle-o"></i>Teacher Registration Form</a></li>
						 </ul>
					</li>
					<li class="treeview active">
					  <a href="#">
						<i class="fa fa-table"></i> <span>Routine</span>
						<i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						 <li><a href="http://127.0.0.1/projects/project/pages/forms/coursein.php"><i class="fa fa-circle-o"></i>Routine Submision</a></li>
						 <li class="active"><a href="pages/tables/1y1s.php"><i class="fa fa-circle-o"></i>Updated Class Routine</a></li>
						 <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Class Routine</a></li>
					  </ul>
					</li>
				   
					<li>
					   <a href="pages\mailbox\mailbox.html">
						<i class="fa fa-envelope"></i> <span>Mailbox</span>
					  </a>
					</li>
					 
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
	 
	   <div class="content-wrapper">
						<!-- Content Header (Page header) -->
					 <section class="content">
						  <!-- Info boxes -->
						 <div class="row">
						 <!----slider----->
							  <div class="col-md-10">
									<div id="myCarousel" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel" data-slide-to="1"></li>
												<li data-target="#myCarousel" data-slide-to="2"></li>
												<li data-target="#myCarousel" data-slide-to="3"></li>
											</ol>

												<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
														  <div class="item active">
															   <img src="img/cse6.jpg" alt="Chania" width="900" height="500">
														  </div>

														  <div class="item">
															   <img src="img/cse8.jpg" alt="Chania" width="900" height="500">
														  </div>
															
														  <div class="item">
															<img src="img/cse9.jpg" alt="Flower" width="900" height="500">
														  </div>

														  <div class="item">
															<img src="img/cse_img.jpg" alt="Flower" width="900" height="500">
														  </div>
											</div>

													<!-- Left and right controls -->
													<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
														  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
														  <span class="sr-only">Previous</span>
													</a>
													<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
														  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
														  <span class="sr-only">Next</span>
													</a>
								   </div>
							 </div>	
							 <!---slider close---->
						 <!--- logout button + notice and exam notice---->
							   <div class="col-md-2">
									<div class="logout-style">
														 
									   <a href="index.php" class="btn btn-info btn-logout" role="button">Logout</a>
								  </div>
							        <div class="notice-bord">
									  <ul class="header">Notice</ul>
									  <a href="s_pages/new_notice.html"><li >New Notice</li></a>
									  <a href="s_pages/previous_notice.html"><li >Previous Notice</li></a>
									</div>
									<div class="notice-bord">
									  <ul class="header">Exam</ul>
									  <a href="s_pages/exam_notice.html"><li >Exam Notice</li></a>
									 <a href="s_pages/exam_routine.html"><li >Exam Routine</li></a>
									 <a href="s_pages/exam_result.html"> <li >Exam Result</li></a>
									  
									</div>
							  </div>
						   </div>	 

									 
							
									 
							<div class="row">	
							<!--- Academic calender--->
							  <div class="col-md-10">
									  <div class="">
										  <i class="fa fa-calendar"></i>
										  Academic Calendar
										  <div id="calendar" style="width: 100%"></div>
									  </div>
							
							  </div>
							  <div class="col-md-2">
									<div class="notice-bord2">
									 <ul class="header">Semester</ul>
									 <a href="s_pages/semester_start.html"> <li>Semester Start</li></a>
									 <a href="s_pages/semester_end.html"> <li >Semester End</li></a>
									  <a href="s_pages/mid_semester_break.html"> <li >Mid Semester break</li></a>
									 <a href="s_pages/summer_vacation.html"> <li >Summer vacation</li></a>
									 <a href="s_pages/winter_vacation.html"> <li >Winter vacation</li></a>
									 <a href="s_pages/eid-ul-fitor-vacation.html"> <li >Eid-ul-fetor vacation</li></a>
									 <a href="s_pages/eid-ul-adha-vacation.html"> <li >Eid-ul-Adha vacation</li></a>
									  
									</div>
							  </div>
							</div>

						  <!-- /.box --> 
					  </section>
					 
				</div>
	 
	              <!----footer------>
		
					<footer class="main-footer">
						  <strong>
								<p align="center">
									Copy right 2016 @ Computer Scince and Engineering,MBSTU.All rights
									reserved.
							   </p>
								</br>
						  </strong>
							<p>
								<h6 align="center">
								   This site design and developed by Md Suzauddin & Partha saha(C.S.E,MBSTU)
								</h6>
							</p>
					</footer>
	 
	    
	  </body>

      <!-- Content Wrapper. Contains page content -->
   
     

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading"></h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"></h4>
                    <p></p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"></h4>
                    <p></p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"></h4>
                    <p></p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"></h4>
                    <p></p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading"></h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    
                    <span class="label label-danger pull-right"></span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    
                    <span class="label label-success pull-right"></span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                   
                    <span class="label label-warning pull-right"></span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    
                    <span class="label label-primary pull-right"></span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">t</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading"></h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                 
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                 
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
               
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                 
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                 
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
		   <aside class="control-sidebar control-sidebar-dark">
          </aside>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
