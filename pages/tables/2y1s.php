<!DOCTYPE html>
<?php
                $connection = mysql_connect('localhost', 'root', '') or die("not connected"); //The Blank string is the password
                mysql_select_db('db_cse');

               
			   
			  
			  
			   

               //echo "<table>"; // start a table tag in the HTML


             ?> 
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2-1 Updated Class Routine</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
       
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
           <div class="btn-group btn-group-justified">
			  <a href="1y1s.php" class="btn btn-primary">1-1</a>
			  <a href="1y2s.php" class="btn btn-primary">1-2</a>
			  <a href="2y1s.php" class="btn btn-primary">2-1</a>
			  
			  <a href="2y2s.php" class="btn btn-primary">2-2</a>
			  <a href="3y1s.php" class="btn btn-primary">3-1</a>
			  <a href="3y2s.php" class="btn btn-primary">3-2</a>
			  
			  <a href="4y1s.php" class="btn btn-primary">4-1</a>
			  <a href="4y2s.php" class="btn btn-primary">4-2</a>

         </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Main menu</li>
            <li>
              <a href="http://127.0.0.1/projects/project/">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Registration</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
                <li><a href="../forms/advanced.php"><i class="fa fa-circle-o"></i>Student Registration Forms</a></li>
               
              </ul>
            </li>
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-table"></i> <span>Routine</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="1y1s.php"><i class="fa fa-circle-o"></i>Updated Class Routine</a></li>
                <li><a href="data.html"><i class="fa fa-circle-o"></i>Class Routine</a></li>
              </ul>
            </li>
           
            <li>
              <a href="../mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Sent Mail</span>
              </a>
            </li>
			<li>
              <a href="http://mbstu.ac.bd/index.html">
                <i class="fa fa-home"></i> <span>MBSTU Home</span>
              </a>
            </li>
             </ul>
			 
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <h5 class="text-center "> <storng>Second year first semester</strong><h5>

        <!-- Main content -->
         <section class="content">
		
          <div class="container-fluid">
 <!--day and time for input updated routine--->
  <div class="row">
    <div class="col-md-1" style="background-color:lavender;">day</div>
    <div class="col-md-1" style="background-color:lavenderblush;">8-8:50</div>
    <div class="col-md-1" style="background-color:lavender;">9-9:50</div>
	<div class="col-md-1" style="background-color:lavender;">10-10:50</div>
    <div class="col-md-1" style="background-color:lavenderblush;">11-11:50</div>
    <div class="col-md-1" style="background-color:lavender;">12-12:50</div>
	<div class="col-md-1" style="background-color:lavender;">lunch</div>
    <div class="col-md-1" style="background-color:lavenderblush;">1-1:50</div>
    <div class="col-md-1" style="background-color:lavender;">2-2:50</div>
	<div class="col-md-1" style="background-color:lavender;">3-3:50</div>
    <div class="col-md-1" style="background-color:lavenderblush;">4-4:50</div>
    
  </div>
  <div class="row">
  
    <div class="col-md-1" style="background-color:lavender;">
	Saturday
	</div>
	
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='8:00-8:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }					    		 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='9:00-9:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='10:00-10:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='11:00-11:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='12:00-11:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	lunch
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='1:00-1:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='2:00-2:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='3:00-3:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Saturday' && $time=='4:00-4:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	
 </div>
 <div class="row">
  
    <div class="col-md-1" style="background-color:lavender;">
	Sunday
	</div>
	
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='8:00-8:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='9:00-9:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='10:00-10:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='11:00-11:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='12:00-11:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	lunch
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='1:00-1:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='2:00-2:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='3:00-3:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Sunday' && $time=='4:00-4:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	
 </div>
 <div class="row">
  
    <div class="col-md-1" style="background-color:lavender;">
	Manday
	</div>
	
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='8:00-8:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='9:00-9:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='10:00-10:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='11:00-11:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='12:00-12:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	lunch
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='1:00-1:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='2:00-2:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='3:00-3:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Monday' && $time=='4:00-4:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	
 </div>
 <div class="row">
  
    <div class="col-md-1" style="background-color:lavender;">
	Tuesday
	</div>
	
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='8:00-8:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='9:00-9:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='10:00-10:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='11:00-11:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='12:00-11:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	lunch
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='1:00-1:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='2:00-2:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='3:00-3:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Tuesday' && $time=='4:00-4:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	
	</div>
	
 </div>
 <div class="row">
  
    <div class="col-md-1" style="background-color:lavender;">
	Wednesday
	</div>
	
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='8:00-8:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='9:00-9:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='10:00-10:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			  
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='11:00-11:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }			 
				  }
		}
		
		
			   ?>
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='12:00-11:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	lunch
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='1:00-1:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='2:00-2:50' && $semester=='2-1')
			      {
				$query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
	<div class="col-md-1" style="background-color:lavender;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='3:00-3:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }				 
				  }
		}
		
		
			   ?>
	
	</div>
    <div class="col-md-1" style="background-color:lavenderblush;">
	<?php
	$query = "SELECT * FROM course_in"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
  while( $row = mysql_fetch_array($result))
		{
			
			   
			   $course_name=$row['course_name'];
			   $day=$row['day'];
			   $time=$row['time'];
			   $room=$row['room_no'];
			   $semester=$row['semester'];
			   if($day=='Wednesday' && $time=='4:00-4:50' && $semester=='2-1')
			      {
				 $query2="SELECT * FROM course_registration";
                 $result2=mysql_query($query2);
                   while($row2=mysql_fetch_array($result2))
				   {
					 $course_name2=$row2['course_name'];
					 $course_short_name=$row2['course_short_name'];
					 $course_code=$row2['course_code'];
					 $teacher_short_name=$row2['teacher_short_name'];
					 if($course_name==$course_name2)
					 {
						echo $course_short_name."<br>".$course_code."<br>".$teacher_short_name;
						 
					 }
					 
				   }		 		 
				  }
		}
		
		
			   ?>
	
	</div>
	
 </div>
 
 
 
</div>
<br><br>
<div class="row">
            <div class="col-md-12">
			
              <div class="box box-primary" style="border: 30px solid aliceblue">
			  <h2 class="text-center"> <strong> Teacher and Course</strong></h2>
			   <?php
                $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
                mysql_select_db('db_cse');

                $query = "SELECT * FROM course_registration"; //You don't need a ; like you do in SQL
               $result = mysql_query($query);
			  
			   

               //echo "<table>"; // start a table tag in the HTML


             ?>     
 <table class="table table-bordered"  >
 <thead>
<tr>
    <th>Course name</th>
	<th>Course short name</th>
	<th>Courese code</th>
	<th>course type</th>
	<th>Creadit</th>
	<th>Teacher name</th>
	<th>Teacher short name</th>
	<th>Teacher  id</th>
	 
	
	<th>class/week</th>
</tr>
</thead>
<tbody>
<?php
while($row = mysql_fetch_array($result)) //Creates a loop to loop through results
     {   
	 
	
     echo "<tr><td>" . $row['course_name'] . "</td><td>" . $row['course_short_name'] . "</td><td>" . $row['course_code'] . "</td><td>" . $row['course_type'] . "</td><td>" . $row['credit'] . "</td><td>" . $row['teacher_name'] . "</td><td>" . $row['teacher_short_name'] . "</td><td>" . $row['teacher_id'] . "</td><td>" . $row['class_per_week'] . "</td></tr>";  //$row['index'] the index here is a field name
     }

      

       mysql_close();
	 
?>
</tbody>

</table>
			  </div>
			</div>
		 </div>
		 

        </section><!-- /.content -->
		
     

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
