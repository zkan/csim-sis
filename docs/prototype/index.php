<?
	require_once( "shared/header.php" );

	$sql = "SELECT c.code as ccode, c.name as cname, sg.grade, sg.credit, sg.semester, sg.year, sg.remark FROM `students` as s JOIN `student-grades` as sg ON s.id = sg.studentID JOIN `courses` as c ON c.id = sg.courseID ORDER BY sg.year";
	$result = mysql_query($sql);
//	$row = mysql_fetch_array($result, MYSQL_ASSOC);
//	echo $row["cname"];
?>

	<table align = "center" border = "1">
		<tr><th colspan = "7">Kan O.</th></tr>
		<tr>
			<th>c.code</th>
			<th>c.name</th>
			<th>grade</th>
			<th>credit</th>
      <th>semester</th>
      <th>year</th>
      <th>remark</th>
		</tr>
	<?
    $cgrade = 0.0;
    $credit = 0.0;
		while($row = mysql_fetch_array( $result, MYSQL_ASSOC)) {
	?>
			<tr>
				<td><? echo $row["ccode"]; ?></td>
				<td><? echo $row["cname"]; ?></td>
        <td><? echo $row["grade"]; ?></td>
        <td><? echo $row["credit"]; ?></td>
        <td><? echo $row["semester"]; ?></td>
        <td><? echo $row["year"]; ?></td>
        <td><? echo $row["remark"]; ?></td>
			</tr>
	<?
      $grade = 0.0;
      if($row["grade"] == "A") {
        $grade = 4.0;
      }
      else if($row["grade"] == "B+") {
        $grade = 3.5;
      }
      else if($row["grade"] == "B") {
        $grade = 3.0;
      }
      else if($row["grade"] == "C+") {
        $grade = 2.5;
      }
      else if($row["grade"] == "C") {
        $grade = 2.0;
      }
      else if($row["grade"] == "D+") {
        $grade = 1.5;
      }
      else if($row["grade"] == "D") {
        $grade = 1.0;
      }
      else if($row["grade"] == "F") {
        $grade = 0.0;
      }

      if($row["grade"] != "I" && $row["grade"] != "-") {
        $cgrade += $grade * $row["credit"];
        $credit += $row["credit"];
//        echo $grade * $row["credit"];
      }
		}
    $cgpa = $cgrade/$credit;
	?>
    <tr>
      <td colspan = "7">CGPA: <? echo $cgpa; ?></td>
    </tr>
	</table>
<?
	require_once("./shared/footer.php");
?>
