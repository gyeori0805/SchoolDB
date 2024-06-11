<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$studentid = $_POST['studentid'];

	// MySQL 드라이버 연결 
	include("./SQLconstants.php"); 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 삭제 실행
	// select 명령어로 입력한 정보가 명단에 있는지부터 확인
	$query = "select * from student where studentid = '".$studentid."';";
	$result = mysqli_query( $conn, $query );
	if( $row = mysqli_fetch_array( $result ) ) 
	{	
		$message = "학번이 (".$studentid.")인 학생의 정보를 삭제하였습니다."; 
	} 
	else 
	{
		$message = "학번이 (".$studentid.")인 학생의 정보를 찾을 수 없습니다. 삭제시 학생명이 아닌 학번을 입력해주세요."; 
	} 
	// delete 명령어로 입력한 정보의 인원 삭제
	$query = "delete from student where studentid = '".$studentid."';";
	$result = mysqli_query( $conn, $query );

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
	<input type = 'hidden' name = 'message' value = ' * <?php echo str_replace("'", "", $message);?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>

