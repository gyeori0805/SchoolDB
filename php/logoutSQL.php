<?php
//session_start()는 session변수 사용을 위해 사용.
session_start();
//session_destroy()는 모든 세션을 삭제하는 코드.
session_destroy();
?>
<script>
    alert("로그아웃했습니다. 다음에 또 이용해주세요!");
    location.replace('loginPage.php');
</script>