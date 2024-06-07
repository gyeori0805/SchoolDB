<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	function writeLog( $message )
	{
		// 로그 파일 이름 : ex) /var/www/html/book/php/log.txt, /home/book/php/log.txt
        	$logFileName = "/home/project/SchoolDB/php/log.txt";
        	$logFile = fopen( $logFileName, "a" );
		if( $logFile )
		{
			// 로그 데이터 출력
			session_start();
			fwrite( $logFile, "\n\nTime:\t".date('Y-m-d H:i:s')	// 접속 시간
				."\nSessionID:\t".session_id()			// 접속 ID
				."\nURI:\t".$_SERVER['PHP_SELF']		// 현재 페이지
				."\nPrevious:\t".$_SERVER["HTTP_REFERER"] 	// 접속 경로(이전페이지)
				."\nBrowser:\t".$_SERVER['HTTP_USER_AGENT'] 	// 접속 브라우저	
				."\nMessage:\t".$message );
        		fclose( $logFile );
		}
		else
		{
			$error = error_get_last();
			echo "[파일열기오류] ".$error['message'];
		}
	}
?>