<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$year = $_POST['year'];
	$stu_id = $_POST['stu_id'];
	$name = $_POST['name'];
	$birth = $_POST['birth'];
	$gender = $_POST['gender'];
	$stat = $_POST['stat'];
	$phone = $_POST['phone'];
	$message = "";

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO student( year, stu_id, name, birth, gender, stat, phone ) VALUES ( '".$year."', '".$stu_id."', '".$name."', '".$birth."', '".$gender."', '".$stat."', '".$phone."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "(".$name.") 학생을 추가하였습니다."; 
	} 
	else 
	{
		$message = "명단에 추가할 수 없습니다."; 
	} 

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $result );
	mysqli_close( $conn );
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./search.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
