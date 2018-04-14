<!---connect query for my_sql---->
<?php
                $connection = mysql_connect('localhost', 'root', '') or die("not connected"); //The Blank string is the password
                mysql_select_db('db_cse');
               //echo "<table>"; // start a table tag in the HTML             ?> 
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>couse in</title>
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
				  <li class="active"><a href="1y1s.php"><i class="fa fa-circle-o"></i>Updated Class Routine</a></li>
				 <li><a href="data.html"><i class="fa fa-circle-o"></i>Class Routine</a></li>
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
	   <div>
	    <div class="col-md-6">
		 
		   
		     <div class="box box-default" style="border: 30px solid white">
	<!---insert value into database---> 		 
<?php
include_once("connect.php");
if(isset($_POST['submit']))
{
	//catch value from html table
	$valid=0;
	$course =$_POST['course'];
	$day =$_POST['day'];
	$time =$_POST['time'];
	$room_no =$_POST['room_no'];
	if($course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="")
	{
		
	$semester="1-1";	
	}
	
	else if($course=="Electronic Devices and Circuits" || $course=="Electronic Devices and Circuits Lab" || $course=="Structured Programming" || $course=="Structured Programming Lab" || $course=="Discrete Mathematics" || $course=="Physics" || $course=="Chemistry" || $course=="Mathematics II")
	{
		
	$semester="1-2";	
	}
	
	else if($course=="Object Oriented Programming" || $course=="Object Oriented Programming Lab" || $course=="Data Structure" || $course=="Digital Electronics" || $course=="Digital Electronics Lab" || $course=="Mathematics III" || $course=="Statistics" || $course=="Accounting")
	{
		
	$semester="2-1";	
	}
	
	else if($course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="")
	{
		
	$semester="2-2";	
	}
	
	
	
	else if($course=="Algorithm Design & Analysis" || $course=="Algorithm Design & Analysis Lab" || $course=="Computer Organization & Architecture" || $course=="Computer Based Numerical Methods" || $course=="Computer Based Numerical Methods Labs" || $course=="Object Oriented Analysis and Design" || $course=="Object Oriented Analysis and Design Lab" || $course=="Digital System Design" || $course=="Digital System Design Lab" || $course=="Mathematic IV" || $course=="Visual Programming Lab-I" || $course=="Visual Programming Lab-II")
	{
		
	$semester="2-2";	
	}
	
	
	else if($course=="Compiler Design" || $course=="Compiler Design Lab" || $course=="Computer Network" || $course=="Computer Network Lab" || $course=="Computer Peripheral & Interfacing" || $course=="Computer Peripheral & Interfacing Lab" || $course=="Relational Database Management System Lab" || $course=="Multimedia & Web Engineering" || $course=="Multimedia & Web Engineering Lab" || $course=="Communication Engineering")
	{
		
	$semester="3-2";	
	}
	
	
	else if($course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="" || $course=="")
	{
		
	$semester="4-1";	
	}
	
	else if($course=="Computer Graphics & Animation" || $course=="Computer Graphics & Animation Lab" || $course=="Neural Networks & Fuzzy System" || $course=="Neural Networks & Fuzzy System Lab" || $course=="Optional-II" || $course=="Optional-II Lab" || $course=="Optional-III" || $course=="Research Project")
	{
		
	$semester="4-2";	
	}
	$check="select day,time,semester from course_in";
	$result=mysql_query($check);
	while($row=mysql_fetch_array($result))
	{
		$day2=$row['day'];
		
		$time2=$row['time'];
		$semester2=$row['semester'];
		
		
		
		if($day==$day2 && $time==$time2 && $semester==$semester2)
		{
			$valid=1;
			
		}
		
	}
   //insert query
   if($valid==1)
   {
	  
	 echo "<script language='javascript'>
          
		   
			  alert('Sorry this portion is not valid---this portion is used by another teacher select another portion'); 
		   
            </script>
        ";  
	 
   }
   else if ($valid==0)
   {
	 $sql = "INSERT INTO course_in(course_name,day,time,room_no,semester)
	VALUES ('$course','$day','$time','$room_no','$semester')";  
	
	if ($conn->query($sql) === TRUE && $valid==0 )
	{
		echo "New record created successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	   
   }
	   
	
	
	

	

	$conn->close();
}

?>
<!---sent mail to the corresponding students when update routine or course in a paryicular time in a particular day---->
<?php
include_once 'PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST['submit']))
{
$send=0;
$course =$_POST['course'];
$day =$_POST['day'];
$time =$_POST['time'];
$room_no =$_POST['room_no'];
$email="SELECT Email from cse_student where Year='$semester'";
$recipent=mysql_query($email);
if($valid==0)
{
while($row=mysql_fetch_array($recipent))
{

$recipent_email=$row['Email'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'cseroutine@gmail.com';
$mail->Password = 'cse-mbstu';
$mail->setFrom('your@email-address.com');
$mail->addAddress($recipent_email);
$mail->Subject = 'Class routine';
$mail->Body = 'you have '.$course.' class on '.$day.' at '.$time;
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else
{
   $send++;
}
}
echo "<br>And Email successfully send to ".$send." student";
}
}
?>
  <!----routine submision form------>
           <form action="coursein.php" method="post">
                  <label>Course name</label>
				   </br>
				   <select name="course"/>
				   <!----course for 1st year 2nd semester and other same---->
				   <optgroup label="1-2">
				   <option>Electronic Devices and Circuits</option>
				   <option>Electronic Devices and Circuits Lab</option>
				   <option>Structured Programming</option>
				   <option>Structured Programming Lab</option>
				   <option>Discrete Mathematics</option>
				   <option>Physics</option>
				   <option>Chemistry</option>
				   <option>Mathematics II</option>
				   
				   </optgroup>
				   <optgroup label="2-1">
				   <option>Object Oriented Programming</option>
				   <option>Object Oriented Programming Lab</option>
				   <option>Data Structure</option>
				   <option>Data Structure Lab</option>
				   <option>Digital Electronics</option>
				   <option>Digital Electronics Lab</option>
				   <option>Mathematics III</option>
				   <option>Statistics</option>
				   <option>Accounting</option>
				   <option>Software Development Project-I & Industrial Tour</option>
				  
				   
				   </optgroup>
				   <optgroup label="2-2">
				   <option>Algorithm Design & Analysis</option>
				   <option>Algorithm Design & Analysis Lab</option>
				   <option>Computer Organization & Architecture</option>
				   <option>Computer Based Numerical Methods</option>
				   <option>Computer Based Numerical Methods Labs</option>
				   <option>Object Oriented Analysis and Design</option>
				   <option>Object Oriented Analysis and Design Lab</option>
				   <option>Digital System Design</option>
				   <option>Digital System Design Lab</option>
				   <option>Mathematic IV</option>
				   <option>Visual Programming Lab-I</option>
				   <option>Visual Programming Lab-II</option>
				   </optgroup>
				   
				   <optgroup label="3-2">
				   <option>Compiler Design</option>
				   <option>Compiler Design Lab</option>
				   <option>Computer Network</option>
				   <option>Computer Network Lab</option>
				   <option>Computer Peripheral & Interfacing</option>
				   <option>Computer Peripheral & Interfacing Lab</option>
				   <option>Relational Database Management System Lab</option>
				   <option>Multimedia & Web Engineering</option>
				   <option>Multimedia & Web Engineering Lab</option>
				   <option>Communication Engineering</option>
				   
				   
				   </optgroup>
				   <optgroup label="4-2">
				   <option>Computer Graphics & Animation</option>
				   <option>Computer Graphics & Animation Lab</option>
				   <option>Neural Networks & Fuzzy System</option>
				   <option>Neural Networks & Fuzzy System Lab</option>
				   <option>Optional-II</option>
				   <option>Optional-II Lab</option>
				   <option>Optional-III</option>
				   <option>Research Project</option>
				   </optgroup>
				   
				   </select>
				   </br></br></br>
                  
				  <!--- day select--->
                    <label>Day</label>
				   </br><select name="day"/>
				   <option>Saturday</option>
				   <option>Sunday</option>
				   <option>Monday</option>
				   <option>Tuesday</option>
				   <option>Wednesday</option>
				   
				
				   </select>
				   </br></br></br>
                 
				   <!---time select---->
                     <label>Time</label>
				   </br>
				   <select name="time"/>
				   <option>8:00-8:50</option>
				   <option>9:00-9:50</option>
				   <option>10:00-10:50</option>
				   <option>11:00-11:50</option>
				   <option>12:00-12:50</option>
				   <option>2:00-2:50</option>
				   <option>3:00-3:50</option>
				   <option>4:00-4:50</option>
				  
				
				   </select>
				   </br></br></br>
				   <!----room select --->
                    <label>Room No</label>
					</br>
				   <select name="room_no"/>
				   <option>210</option>
				   <option>211</option>
				   <option>212</option>
				   <option>213</option>
				   <option>214</option>
				   <option>215</option>
				   </select>
				   <br>
				   <br>
				   <!---click submit it save data in data base and send email--->
                   <input type="submit" value="Save" name="submit">
				  
		
            </form> 
			<!----from close--->
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