<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
        	$fileName = "/home/project/SchoolDB/php/log.txt";
        	if(file_exists($fileName))
	{
		//파일 열기 
		$fp = fopen($fileName, 'r');
	
		//파일 용량의 크기가 얼마나 될지 몰라서 filesize() 함수 사용
		$readByte = filesize($fileName);
		if($fp)
		{
    			// 수정한 부분 -> while을 이용한 반복문을 돌림.
			// fgets() 함수 사용 시, 더이상 불러올 용량이 없으면 false 반환!
			while($fg=fgets($fp,$readByte))
			{
				echo $fg."<br>";
			} // end while_fgets
		} //end if_fp 
	} //end if_fe
?>