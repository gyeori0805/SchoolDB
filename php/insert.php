<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY>
		<style>
			.textTop{
				text-align: center;
			}
		</style> 

		<div class="textTop">
			<br>
			<p style="font-size: 20;">명단 추가 창입니다.<br>
			학생의 정보를 입력하시고 추가 버튼을 누르면 추가가 됩니다.</p>
			
			<form name = "formm" method = "post" action = "./insertSQL.php">				
				<br> 학&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;년 :  <INPUT TYPE = "text" name = "year" SIZE="60" placeholder="  0 (숫자만 입력해주세요.)">
				<br> 학&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;번 : <INPUT TYPE = "text" NAME = "stu_id" SIZE="60" placeholder="  00000">
				<br> 이&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;름 : <INPUT TYPE = "text" NAME = "name" SIZE="60" placeholder="  홍길동">
				<br> 생년월일 : <INPUT TYPE = "text" NAME = "birth" SIZE="60" placeholder="  0000-00-00">
				<br> 성&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;별 : <INPUT TYPE = "text" NAME = "gender" SIZE="60" placeholder="  남or여">
				<br> 학&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;적 : <INPUT TYPE = "text" NAME = "stat" SIZE="60" placeholder="  재학or휴학">
				<br> 전화번호 : <INPUT TYPE = "text" NAME = "phone" SIZE="60" placeholder="  000-0000-0000">
			</form>  
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

			<INPUT TYPE = "button" value = "메인" onClick="location.href='./main.php'">
			<INPUT TYPE="button" value="추가" onClick="javascript:document.formm.submit(); location.href='./main.php'"> &nbsp; 
		</div>
	</BODY>
</HTML>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( "새 책을 등록합니다" );
?>
