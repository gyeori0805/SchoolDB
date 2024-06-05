<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$prof_id = $_POST['prof_id'];

	// MySQL 드라이버 연결 
	include("./SQLconstants.php"); 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 책 삭제 실행 	
	$query = "select * from prof where prof_id = '".$prof_id."';";
	$result = mysqli_query( $conn, $query );
	if( $row = mysqli_fetch_array( $result ) ) 
	{	
		$message = "교수번호가 (".$prof_id.")인 교수의 정보를 삭제하였습니다."; 
	} 
	else 
	{
		$message = "교수번호가 (".$prof_id.")인 교수의 정보를 찾을 수 없습니다. 삭제시 교수명이 아닌 교수번호를 입력해주세요."; 
	} 

	$query = "delete from prof where prof_id = '".$prof_id."';";
	$result = mysqli_query( $conn, $query );

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
	<input type = 'hidden' name = 'message' value = ' * <?php echo str_replace("'", "", $message);?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>

