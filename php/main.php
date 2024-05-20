<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<head>
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
  <style type="text/css">
    hEvent:hover{
      color: #003675;
    }

    .dropdown-content{
      display : none;
      position : absolute;
      z-index : 1; /*다른 요소들보다 앞에 배치*/
      font-weight: 400;
      background-color: #f9f9f9;
      min-width : 200px;
    }

    .dropdown-content a{
      display : block;
      text-decoration : none;
      color : rgb(37, 37, 37);
      font-size: 12px;
      padding : 12px 20px;
    }

    .dropdown-content a:hover{
      background-color : #ececec
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>
<body>
<!--헤더-->
<div style="width: 1920px; height: 21vh; position: relative; background: white">
  <div style="height: 204px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="align-self: stretch; height: 204px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
      <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div>
      <div style="height: 108px; padding-bottom: 16px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
        <div style="align-self: stretch; padding-top: 10px; padding-bottom: 10px; justify-content: flex-end; align-items: center; gap: 12px; display: inline-flex"></div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
          <div style="justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
            <div style="justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex"></div>
          </div>
          <div style="flex: 1 1 0; height: 40px; justify-content: flex-end; align-items: flex-start; gap: 8px; display: flex">
            <!--로그인 여기있어요!!!-->
            <!--로그인 여기있어요!!!-->
            <!--로그인 여기있어요!!!-->
            <div onClick="location.href='./signup.php'" style="padding-left: 80vw; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                  <div style="width: 8px; height: 16px; left: 8px; top: 0px; position: absolute; border-top-left-radius: 1px; border-top-right-radius: 1px; border-top: 1.40px #2D2D2D solid; border-right: 1.40px #2D2D2D solid; border-bottom: 1.40px #2D2D2D solid"></div>
                  <div style="width: 12px; height: 0px; left: 0px; top: 8px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 3.50px; height: 7px; left: 8.50px; top: 4.50px; position: absolute; border: 1.20px #2D2D2D solid"></div>
                </div>
              </div>
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">로그인</div>
            </div>
            <!--회원가입 여기있어요!!!-->
            <!--회원가입 여기있어요!!!-->
            <!--회원가입 여기있어요!!!-->
            <div onClick="location.href='./signup.php'" style="padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 18px; height: 14px; left: 1px; top: 3px; position: absolute">
                  <div style="width: 6px; height: 6px; left: 4px; top: 0px; position: absolute; border-radius: 9999px; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 14px; height: 6px; left: 0px; top: 8px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 0px; height: 6px; left: 15px; top: 2px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 6px; height: 0px; left: 12px; top: 5px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">회원가입</div>
            </div>
          </div>
        </div>
      </div>
      <div style="align-self: stretch; height: 64px; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
        <div style="width: 100vw; height: 64px; padding-left: 3vw; padding-top: 1px; padding-bottom: 1px; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
          <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
            <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">행사 및 명단<div class="dropdown-content">
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--검색!!!-->
                  <div onClick="javascript:move( './search.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent onClick="location.href='./search.php'">명단 검색</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입!!!!-->
                  <div onClick="javascript:move( './insert.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent onClick="location.href='./insert.php'">명단 추가</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삭제!!!!!-->
                  <div onClick="javascript:move( './delete.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent onClick="location.href='./delete.php'">명단 삭제</hEvent></div>
                  </div>
                </a>
              </div></div>
            <div style="width: 20px; height: 20px; position: relative">
              <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
              <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                <div style="width: 10px; height: 5.50px; left: 3px; top: 5.50px; position: absolute; border: 1.40px #2D2D2D solid"></div>
              </div>
            </div>
          </div>
          <div style="width: 114px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
            <div style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">팀소개</div>
            <div style="width: 20px; height: 20px; position: relative">
              <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
              <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                <div style="width: 10px; height: 5.50px; left: 3px; top: 5.50px; position: absolute; border: 1.40px #2D2D2D solid"></div>
              </div>
            </div>
          </div>
          <div style="width: 132px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
            <div style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">고객센터</div>
            <div style="width: 20px; height: 20px; position: relative">
              <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
              <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                <div style="width: 10px; height: 5.50px; left: 3px; top: 5.50px; position: absolute; border: 1.40px #2D2D2D solid"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--여기 메인버튼 있어요!!!!-->
  <!--여기 메인버튼 있어요!!!!-->
  <!--여기 메인버튼 있어요!!!!-->
  <div onClick="location.href='./main.php'" style="width: 172px; height: 75px; left: 2vw; top: 39px; position: absolute">
    <img style="width: 50px; height: 50px; left: 0px; top: 17px; position: absolute" src="https://via.placeholder.com/50x50" />
    <div style="left: 45px; top: 0px; position: absolute; color: #65A2FC; font-size: 50px; font-family: Notable; font-weight: 400; line-height: 75px; word-wrap: break-word">SEM</div>
  </div>
</div>
<!--여기까지 헤더-->




<!--날씨-->
<div style="width: 1920px; height: 8vh; padding-top: 24px; padding-bottom: 24px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
  <div style="width: 846px; height: 80px; padding: 16px; background: white; border-radius: 12px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
    <div style="width: 81px; padding-left: 12px; padding-right: 12px; padding-top: 8px; padding-bottom: 8px; background: orange; border-radius: 100px; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
      <div style="width: 24px; height: 24px; padding-left: 2px; padding-right: 2px; justify-content: center; align-items: center; gap: 8px; display: flex">
        <div style="width: 20px; height: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 1px; display: inline-flex">
          <div style="width: 18px; height: 4.11px; border: 1.67px white solid"></div>
          <div style="width: 19.01px; height: 13.20px; background: white"></div>
        </div>
      </div>
      <div style="color: white; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">주의</div>
    </div>
    <div style="flex: 1 1 0; align-self: stretch; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 50px; word-wrap: break-word">행사당일의 날씨와 미세먼지 농도를 확인해보세요!</div>
    <div style="width: 120px; padding: 2px; border-radius: 6px; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
      <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 400; line-height: 25.50px; word-wrap: break-word">자세히보기</div>
      <div style="width: 20px; height: 20px; position: relative">
        <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
        <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
          <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
          <div style="width: 7.20px; height: 3.80px; left: 11.15px; top: 11.60px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1.40px #2D2D2D solid"></div>
          <div style="width: 15px; height: 0px; left: 15px; top: 7.30px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; border: 1.40px #2D2D2D solid"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--여기까지 날씨-->




<!--배너-->
<div style="width: 1920px; height: 560px; position: relative">
  <div style="width: 1920px; height: 560px; left: 0px; top: 0px; position: absolute">
    <div style="width: 1920px; height: 560px; left: 0px; top: 0px; position: absolute; background: #D8E4F2"></div>
    <div style="width: 1099.50px; height: 347px; left: 465px; top: 112px; position: absolute; justify-content: flex-start; align-items: center; gap: 40px; display: inline-flex">
      <div style="width: 610px; height: 246px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 40px; display: inline-flex">
        <div style="width: 654px; color: #1D1D1D; font-size: 38px; font-family: NanumGothic; font-weight: 700; line-height: 60px; letter-spacing: 1px; word-wrap: break-word">다채로운 음악이 가득한 대학 축제!<br/>함께 즐기며 특별한 순간을 만들어요.</div>
        <div style="width: 654px; color: #1D1D1D; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">당신의 대학 생활을 더욱 특별하게 만들어 드릴 대학 축제에 여러분을 초대합니다!</div>
        <div style="height: 64px; padding-left: 24px; padding-right: 24px; background: #246BEB; border-radius: 8px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
          <div style="color: white; font-size: 19px; font-family: NanumGothic; font-weight: 400; line-height: 28.50px; word-wrap: break-word">자세히 보러가기</div>
        </div>
      </div>
      <div style="width: 449.50px; align-self: stretch; padding-top: 24px; padding-bottom: 24px; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <img style="width: 305px; height: 299px" src="https://via.placeholder.com/305x299" />
      </div>
    </div>
  </div>
  <div style="width: 1280px; height: 64px; left: 320px; top: 248px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 1152px; display: inline-flex">
    <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
      <div style="padding: 14px; background: white; border-radius: 40px; border: 1px #E4E4E4 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
        <div style="width: 36px; height: 36px; position: relative">
          <div style="width: 36px; height: 36px; left: 0px; top: 0px; position: absolute"></div>
          <div style="width: 22.50px; height: 12.38px; left: 22.19px; top: 6.75px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 2px #2D2D2D solid"></div>
        </div>
      </div>
    </div>
    <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
      <div style="padding: 14px; background: white; border-radius: 40px; border: 1px #E4E4E4 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
        <div style="width: 36px; height: 36px; position: relative">
          <div style="width: 36px; height: 36px; left: 0px; top: 0px; position: absolute"></div>
          <div style="width: 22.50px; height: 12.38px; left: 12.81px; top: 29.25px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 2px #2D2D2D solid"></div>
        </div>
      </div>
    </div>
  </div>
  <div style="width: 244px; height: 40px; left: 838px; top: 488px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
    <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
      <div style="width: 148px; padding: 16px; background: white; border-radius: 40px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
        <div style="border-radius: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
          <div style="width: 20px; height: 8px; background: #246BEB; border-radius: 8px"></div>
        </div>
        <div style="background: #8E8E8E; border-radius: 56px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
          <div style="width: 8px; height: 8px; border-radius: 8px"></div>
        </div>
        <div style="background: #8E8E8E; border-radius: 56px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
          <div style="width: 8px; height: 8px; border-radius: 8px"></div>
        </div>
        <div style="background: #8E8E8E; border-radius: 56px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
          <div style="width: 8px; height: 8px; border-radius: 8px"></div>
        </div>
        <div style="background: #8E8E8E; border-radius: 56px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
          <div style="width: 8px; height: 8px; border-radius: 8px"></div>
        </div>
        <div style="background: #8E8E8E; border-radius: 56px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
          <div style="width: 8px; height: 8px; border-radius: 8px"></div>
        </div>
        <div style="background: #8E8E8E; border-radius: 56px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
          <div style="width: 8px; height: 8px; border-radius: 8px"></div>
        </div>
      </div>
    </div>
    <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
      <div style="padding: 8px; background: white; border-radius: 40px; border: 1px #E4E4E4 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
        <div style="width: 24px; height: 24px; position: relative">
          <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
          <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute">
            <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute"></div>
            <div style="width: 10px; height: 12px; left: 5px; top: 4px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
              <div style="width: 12px; height: 0px; transform: rotate(90deg); transform-origin: 0 0; border: 1.60px #2D2D2D solid"></div>
              <div style="width: 12px; height: 0px; transform: rotate(90deg); transform-origin: 0 0; border: 1.60px #2D2D2D solid"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="padding: 8px; background: white; border-radius: 40px; border: 1px #E4E4E4 solid; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
      <div style="width: 24px; height: 24px; position: relative">
        <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
        <div style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute">
          <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute"></div>
          <div style="width: 15px; height: 0px; left: 10px; top: 2.50px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 1.60px #2D2D2D solid"></div>
          <div style="width: 15px; height: 0px; left: 17.50px; top: 10px; position: absolute; transform: rotate(-180deg); transform-origin: 0 0; border: 1.60px #2D2D2D solid"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--여기까지 배너-->





<!--캘린더-->
<div style="width: 1770px; height: 1526px; padding-bottom: 80px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 40px; display: inline-flex">
  <div style="width: 1782px; height: 1200px; padding-top: 69px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: flex">
    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
      <div style="flex: 1 1 0; text-align: center; color: #1D1D1D; font-size: 50px; font-family: NanumGothic; font-weight: 700; line-height: 75px; word-wrap: break-word">MAY</div>
    </div>
    <div style="width: 1306px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 46px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">SUN</div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 54px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">MON</div>
          </div>
        </div>
      </div>
      
      <div style="width: 172px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 44px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">TUE</div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 51px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">WED</div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 46px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">THU</div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 37px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">FRI</div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 44px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">SAT</div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">29</div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">30</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 172px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">31</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">1</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">2</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">3</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">4</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">5</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">6</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">7</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">8</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">9</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">10</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">11</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">12</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">13</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">14</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">15</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">16</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">17</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">18</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">19</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">20</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">21</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">22</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">23</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">24</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">25</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">26</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">27</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">28</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">29</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">30</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">1</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">2</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--여기까지 캘린더-->
</body>