<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$grade = $_POST['grade'];
	$studentid = $_POST['studentid'];
	$name = $_POST['name'];
	$birth = $_POST['birth'];
	$gender = $_POST['gender'];
	$studentrecord = $_POST['studentrecord'];
	$phonenumber = $_POST['phonenumber'];
	$message = "";

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 추가 실행 	
	$query = "INSERT INTO student( grade, studentid, name, birth, gender, studentrecord, phonenumber ) VALUES ( '".$grade."', '".$studentid."', '".$name."', '".$birth."', '".$gender."', '".$studentrecord."', '".$phonenumber."');"; 
	$result = mysqli_query( $conn, $query );
	if( $result ) 
	{	
		$message = "(".$name.") 학생을 추가하였습니다."; 
	} 
	else 
	{
		$message = "명단에 추가할 수 없습니다."; 
	} 
	// MySQL 드라이버 연결 해제
	mysqli_close( $conn );
	// 메시지 창에 메시지 출력
	echo "<script>alert(\"$message\");</script>";
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

<!-- search 페이지로 복귀 -->
<form name = "frm" method = "post" action = "./searchSTD.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
