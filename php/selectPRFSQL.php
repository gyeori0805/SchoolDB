<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$message =  $_POST['message'];
	$message = ( ( ( $message == null ) || ( $message == "" ) || ( strncmp( $message, " * ", 3 ) == 0 ) ) ? "_%" : $message );

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// html 테이블 구현
	echo '<table border="1" bordercolor="skyblue" align = "center">';
	echo '<tr align = "center" bgcolor="skybule">';
	echo '<td style="font-size:30">⠀교수번호⠀</td>';
	echo '<td style="font-size:30">⠀교수명⠀</td>';
	echo '<td style="font-size:30">⠀연구실⠀</td>';
 	echo '<td style="font-size:30">⠀전화번호⠀</td>';
	echo '<td style="font-size:30">⠀학과⠀</td>';
	echo '</tr>';

	// MySQL 검색 실행 및 결과 출력
	$query = "select * from prof where prof_name like '%".$message."%';";
	$resultSet = mysqli_query( $conn, $query );
	while( $result = mysqli_fetch_array( $resultSet ) )
	{
		echo '<tr align = "center">';
		echo '<td style="font-size:25">'; echo "⠀".$result['prof_id']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['prof_name']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['prof_lab']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['prof_phonenumber']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['major']."⠀"; echo '</td>';
		echo '</tr>';
	}

	echo '</table>';
	echo '<br><br><br>';

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $resultSet );
	mysqli_close( $conn );
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	if( $message == "_%" )
	{
		writeLog( "전체 교수 명단을 확인했습니다" );
	}
	else
	{
		writeLog( $message." 교수를 찾았습니다" );
	}
?>
