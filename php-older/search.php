<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY onLoad="showMessage( '' );" >
		<style>
			.textTop{
				text-align: center;
			}
		</style> 
		<!-- 화면구성 -->
		<div class="textTop">
		<p style="font-size: 20;">명단 검색 창입니다.<br>
			학생의 이름을 입력하시면 해당하는 학생의 정보가 출력됩니다.<br></p><br>
			<form name = "formm" method = "post" style="display: flex; align-items: center; justify-content: center;">
				<INPUT TYPE = "button" value = "메인" onClick="location.href='./main.php'">
				&nbsp;
				<INPUT TYPE="text" placeholder="검색" NAME="message" SIZE="50"> 
				<INPUT TYPE = "button" value = "Ϙ" onClick="document.formm.action='./search.php'; document.formm.submit();">
			</form> 

			<BR> <BR> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<BR> <BR>  

		<!-- 학생 목록 출력 -->
		<?php include("./selectSQL.php"); ?>
		</div>
</BODY>
</HTML>