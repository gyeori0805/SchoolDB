<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$major_id = $_POST['major_id'];

	// MySQL 드라이버 연결 
	include("./SQLconstants.php"); 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 책 삭제 실행 	
	$query = "delete from major_list where major_id = '".$major_id."';";
	$result = mysqli_query( $conn, $query );
	if( $result ) 
	{	
		$message = "담당자번호가 (".$major_id.")인 담당자의 정보를 삭제하였습니다."; 
	} 
	else 
	{
		$message = "담당자번호가 (".$major_id.")인 담당자의 정보를 찾을 수 없습니다. 삭제시 담당자명이 아닌 담당자번호를 입력해주세요."; 
	} 
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./searchMNG.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo str_replace("'", "", $message);?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>

