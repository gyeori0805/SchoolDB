<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$major_id = $_POST['major_id'];
	$major_name = $_POST['major_name'];
	$major_lab = $_POST['major_lab'];
	$major_phonenumber = $_POST['major_phonenumber'];
	$major_manager = $_POST['major_manager'];
	$message = "";

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO major_list( major_id, major_name, major_lab, major_phonenumber, major_manager ) VALUES ( '".$major_id."', '".$major_name."', '".$major_lab."', '".$major_phonenumber."', '".$major_manager."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "(".$major_manager.") 담당자를 추가하였습니다."; 
	} 
	else 
	{
		$message = "명단에 추가할 수 없습니다."; 
	} 
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./searchMNG.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
