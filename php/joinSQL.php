<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 userid, userpass, passcheck를
	// user_id, user_pass, user_passcheck이라는 변수에 저장합니다.
	$user_id = $_POST['userid'];
	$user_pass = $_POST['userpass'];
    $user_passcheck=$_POST['passcheck'];
	
	//로그데이터에 사용하기 위해서 메세지 변수를 초기화하고 준비.
	//실제로는 회원가입과 로그인 페이지에서는 로그데이터 추출 x
	$message = "";

	// MySQL 드라이버 연결 
	include("SQLconstants_d.php");
	

		
	//이전 페이지에서 입력한 비밀번호와 비밀번호 확인 내용이 다르면
    if($user_pass != $user_passcheck){
        //결과값을 false로 저장하여 하단에 있는 if문에서 else문이 실행이 되도록 함.
		$result=false;
    }else{
		//비밀번호와 비밀번호 확인 내용이 맞으면
		//SQL문으로 사용자의 ID, PASSWORD를 테이블에 삽입 및 저장.
        $query = "INSERT INTO user_id( id, pwd ) VALUES ( '".$user_id."', '".$user_pass."');"; 
	    $result = mysqli_query( $conn, $query );
		//변수 result의 진리값은 true가 됨.
    }


	if( $result ) //result가 true 즉 비번이 맞으면
	{	
		$message = "(".$user_id.") 을 회원으로 추가하였습니다."; 

		?>
		<!-- 회원가입 완료 알림이 뜬다. -->
		<script>
			alert("회원가입이 완료되었습니다. 로그인을 시도해주세요!");
			location.replace('loginPage.php');
		</script>

		<?php

        // header("Location: loginPage.php");
        // exit();
	} 
	else //result가 false 즉 비번이 틀리면
	{
		$message = "회원 명단에 추가할 수 없습니다."; 

		
		?>

		<!-- 회원가입 완료 알림이 뜬다. -->
		<script>
			alert("회원가입을 실패했습니다. 다시 시도해주세요!");
			location.replace('join.php');
		</script>

<?php
        // header("Location: join.php?error=비밀번호 확인 실패.");
        // exit();
	} 
?>

