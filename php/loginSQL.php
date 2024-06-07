<?php
//session_start는 원래 session변수를 사용하기 위해 필요한 부분이지만
//로그인 구현시 session변수가 작동을 하지 않는 문제가 발생하여
//session 변수를 사용하지 않고 그냥 일반 변수로 로그인을 구현하였다.
session_start();

// MySQL 드라이버 연결 
include "SQLconstants_d.php";

//이전 페이지에서 전달 받은 uname과 password를 변수 uid와 pass에 저장.
$uid=$_POST['uname'];
$pass=$_POST['password'];


//변수에 저장된 값들을 user_id 테이블에서 조회하고 같은 값이 있으면 result변수에 true가 되고,
//조회한 값이 없으면 false가 된다.
$result = mysqli_query($conn, "SELECT * FROM user_id where id='$uid' AND pwd='$pass';");
if($row = mysqli_fetch_array($result)){

?>
<!-- result 변수가 true면 로그인 -->
        <script>
		alert("로그인 성공! 환영합니다!");
		location.replace('mainUSER.php');
	</script>
<?php
        // header("Location: mainUSER.php");
        // exit();
        //echo "id:".$row['id']." <BR> password:".$row['pwd'];
}else{

        ?>
<!-- result 변수가 false면 로그인 실패 -->
        <script>
		alert("로그인에 실패했습니다. 아이디와 비밀번호를 확인해주세요!");
		location.replace('loginPage.php');
	</script>
<?php
        // header("Location: loginPage.php?error=아이디 또는 비밀번호가 틀렸습니다.");
        // exit();
}
?>