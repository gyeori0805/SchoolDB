<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$prof_id = $_POST['prof_id'];
	$prof_name = $_POST['prof_name'];
	$prof_lab = $_POST['prof_lab'];
	$prof_phonenumber = $_POST['prof_phonenumber'];
	$major = $_POST['major'];
	$message = "";

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO prof( prof_id, prof_name, prof_lab, prof_phonenumber, major ) VALUES ( '".$prof_id."', '".$prof_name."', '".$prof_lab."', '".$prof_phonenumber."', '".$major."');"; 
	$result = mysqli_query( $conn, $query );
	if( $result ) 
	{	
		$message = "(".$prof_name.") 교수를 추가하였습니다."; 
	} 
	else 
	{
		$message = "명단에 추가할 수 없습니다."; 
	} 

	mysqli_close( $conn );
	echo "<script>alert(\"$message\");</script>";
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./searchPRF.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
