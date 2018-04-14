<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Course forms</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>SE</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>panel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
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
              <img src="icon.PNG" class="img-circle" alt="User Image">
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
              <a href="admin.php">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
            
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Registration</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="course.php"><i class="fa fa-circle-o"></i>Course Registration Form</a></li>
				<li><a href="teacher.php"><i class="fa fa-circle-o"></i>Teacher Registration Form</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Routine</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 <li><a href="coursein.php"><i class="fa fa-circle-o"></i>Routine Submision</a></li>
              </ul>
            </li>
            
            <li>
              <a href="mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow"></small>
              </a>
            </li>
            
        </section>
        <!-- /.sidebar -->
      </aside>
		<div class="content-wrapper">
	    
        <!-- Content Header (Page header) -->
     <section class="content">  
	 <!--this section use for course registration---->
	   <div>
	    <div class="col-md-6">
		 
		   
		     <div class="box box-default" style="border: 30px solid white">
<?php
//connect query include
include_once("connect.php");
if(isset($_POST['submit']))
{
	//take value from html page
	$course_name=$_POST['course_name'];
	$course_short_name=$_POST['course_short_name'];
	$course_code=$_POST['course_code'];
	$course_type=$_POST['Course_type'];
	$credit=$_POST['credit'];
	$teacher_name=$_POST['teacher_name'];
	$teacher_short_name=$_POST['teacher_short_name'];
	$teacher_id=$_POST['teacher_id'];
	$class_per_week=$_POST['class_per_week'];
//insert into database
	$sql = "INSERT INTO course_registration(course_name,course_short_name,course_code,course_type,credit,teacher_name,teacher_short_name,teacher_id,class_per_week)
	VALUES('$course_name','$course_short_name','$course_code','$course_type','$credit','$teacher_name','$teacher_short_name','$teacher_id','$class_per_week')";

	if ($conn->query($sql) === TRUE)
		{
		echo "New record created successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

?>
   <!----course registration from----->
  
           <form action="course.php" method="post">
                 
                    <label>Course name</label>
                 </br><input type ="text" name="course_name" required="required" placeholder="course name" /></br></br></br>
				 <label>Course short name</label>
                 </br><input type ="text" name="course_short_name" required="required" placeholder="course short name" /></br></br></br>
					
                  
				  
                    <label>Course code</label>
					</br><input type ="text" name="course_code" required="required" placeholder="course code" /></br></br></br>
                  
				  
                    <label>Course type</label>
				   </br><select name="Course_type" required="required"/>
				   <option>Lab</option>
				   <option>Theory</option>
				   
				   </select>
				   </br></br></br>
				   <label>Credit</label>
					</br><input type ="text" name="credit" required="required" placeholder="Credit" /></br></br></br>
                 
				   
                    <label>Teacher name</label>
					</br><input type ="text" name="teacher_name" required="required" placeholder="Teacher name"  /></br><br><br>
					<label>Teacher short name</label>
                 </br><input type ="text" name="teacher_short_name" required="required" placeholder="Teacher short name" /></br></br></br>
					
                  
				  
                    <label>Teacher id</label>
					</br><input type ="text" name="teacher_id"  required="required" placeholder="Teacher id" /></br></br></br>
					
					
                  
				  
                    <label>class per week</label>
					</br><input type ="text" name="class_per_week" required="required" placeholder="class per week" /></br></br></br>
                  
				
                  
				  <input type="submit" value="Save" name="submit">
				  
		
            </form> 
			<!----course registration from close----->
			</div>
           </div>			
			</div>
			</div><!-- ./wrapper -->
			</section>
			</div>
			<!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
			    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
		</body>

</html>