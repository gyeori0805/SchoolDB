<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY> 
		<style>
			.textTop{
				text-align: center;
			}
		</style> 

		<!-- 화면구성 -->
		<div class="textTop">
			<br>

			<p style="font-size: 20;">명단 삭제 창입니다.<br>
			삭제할 학생의 학번을 입력하세요.<br></p>
			<BR> 
			<form name = "formm" method = "post" action = "./deleteSQL.php">				
				
				학번 : <INPUT TYPE="text" NAME="id" SIZE="60">
				<INPUT TYPE="button" value="삭제" onClick="javascript:document.formm.submit();">
			</form>  
			 
			<BR><BR>  
			<INPUT TYPE = "button" value = "메인" onClick="location.href='./main.php'">
		
			<!-- 삭제 후보 책 목록 출력 -->
			<?php include("./selectSQL.php"); ?>
		</div>
	</BODY>
</HTML>
 