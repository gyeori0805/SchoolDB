<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<HEAD>
		<script language="javascript">
			// 전달받은 메시지 출력
			function showMessage( message )
			{
				if ( ( message != null ) && ( message != "" ) && ( message.substring( 0, 3 ) == " * " )  ) 
				{
					alert( message );
				}
			}     
			// 지정한 url로 이동하는 함수 
			function move( url )	
	 		{
				document.formm.action = url;
				document.formm.submit();
			}
		</script>
	</HEAD>
	<BODY onLoad="showMessage( '' );" >
		<style>
			.textTop{
				text-align: center;
			}
		</style> 
		<!-- 화면구성 -->
		<br><BR>
		<div class="textTop">
			<p style="font-size: 20;">학교 행사에 필요한 정보를 제공하는 사이트입니다.</p>
		
			<BR> 
				<!-- 명단 검색 -->
				<INPUT TYPE = "button" value = "명단 검색" style = "font-size: 25; padding-left: 20; padding-right: 20; background: lightgray;" onClick="location.href='./search.php'">
				&nbsp; &nbsp;
				<!-- 명단 추가 -->
				<INPUT TYPE = "button" value = "명단 추가" style = "font-size: 25; padding-left: 20; padding-right: 20; background: lightgray;" onClick="location.href='./insert.php'">
				&nbsp; &nbsp;
				<!-- 명단 삭제 -->
				<INPUT TYPE = "button" value = "명단 삭제" style = "font-size: 25; padding-left: 20; padding-right: 20; background: lightgray;" onClick="location.href='./delete.php'">	
			<BR> <BR> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<BR> <BR>  
			
			<!-- 학생 목록 출력 -->
			<?php include("./selectSQL.php"); ?>
		</div>
	</BODY>
</HTML>