<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$studentid = $_POST['studentid'];

	// MySQL 드라이버 연결 
	include("./SQLconstants.php"); 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 책 삭제 실행 	
	$query = "delete from student where studentid = '".$studentid."';";
	$result = mysqli_query( $conn, $query );
	if( $result ) 
	{	
		$message = "학번이 (".$studentid.")인 학생의 정보를 삭제하였습니다."; 
	} 
	else 
	{
		$message = "학번이 (".$studentid.")인 학생정보를 찾을 수 없습니다. 삭제시 학생 명이 아닌 학번을 입력해주세요."; 
	} 
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./main.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo str_replace("'", "", $message);?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>

