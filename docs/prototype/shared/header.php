<?
  require_once($_SERVER["DOCUMENT_ROOT"] . "/csim-sis/prototype/configuration.php");

//  $course_id = $_GET["course_id"];

  $link = mysql_pconnect(HOST, DB_USER, DB_PASS) or trigger_error(mysql_error(), E_USER_ERROR);
  $charset = "SET NAMES 'utf8'";
  mysql_query($charset) or die("mysql error: " . mysql_error());
  mysql_select_db(DB_NAME, $link);

//  if( !isset( $_SESSION ) ) {
//	  session_start();
//  }

//  if( !isset( $_SESSION["studentID"] ) ) {
//	  header( "Location: login.php?course_id=" . $course_id );
//  }

  //	echo $_SESSION["student_id"] . "<br />";
  //	echo $_SESSION["course_id"] . "<br />";
  //	echo $_SESSION["studentID"] . "<br />";
  //	echo $_SESSION["student_name"] . "<br />";
  //	echo $_SESSION["student_surname"] . "<br />";
?>

<html>
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	<title>XXX</title>
</head>

<body>

<div align = "center">
	<h2>Welcome <? //echo $_SESSION["studentID"]; ?></h2>
	<?
//		$course_name_sql = "SELECT name FROM course WHERE id = " . $_SESSION["course_id"];
//		$course_name_result = mysql_query( $course_name_sql ) or die( mysql_error() );
//		$course_name_row = mysql_fetch_array( $course_name_result, MYSQL_ASSOC );
	?>
	<h4>Course: <? //echo $course_name_row["name"]; ?></h4>
	<!--a href = "main.php?action=selected_paper">Your Papers</a>&nbsp;|&nbsp;<a href = "main.php?action=evaluation">Evaluation</a>&nbsp;|&nbsp;<a href = "main.php?action=view_feedback">View Your Feedbacks</a>&nbsp;|&nbsp;<a href = "logout.php">Logout</a-->
</div>
<br />
