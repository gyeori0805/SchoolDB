<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
<head>
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
  <div style="width: 1920px; height: 204px; position: relative; background: white">
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
            <div style="padding-left: 80vw; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                  <div style="width: 8px; height: 16px; left: 8px; top: 0px; position: absolute; border-top-left-radius: 1px; border-top-right-radius: 1px; border-top: 1.40px white; solid; border-right: 1.40px white solid; border-bottom: 1.40px white solid"></div>
                  <div style="width: 12px; height: 0px; left: 0px; top: 8px; position: absolute; border: 1.40px white solid"></div>
                  <div style="width: 3.50px; height: 7px; left: 8.50px; top: 4.50px; position: absolute; border: 1.20px white solid"></div>
                </div>
              </div>
            </div>
            <!--사용자 여기있어요!!!-->
            <!--사용자 여기있어요!!!-->
            <!--사용자 여기있어요!!!-->
            <div onClick="javascript:move( './user.php' );" style="padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 18px; height: 14px; left: 1px; top: 3px; position: absolute">
                  <div style="width: 6px; height: 6px; left: 4px; top: 0px; position: absolute; border-radius: 9999px; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 14px; height: 6px; left: 0px; top: 8px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
              <div style="color: #1D1D1D; font-size: 22px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">user</div>
            </div>
 <!-- 바로 밑에 줄에 원래 onClick이 있었는데 그냥 보기 편하게 log_out쪽으로 붙였습니다.
            또한 onClick="location.href='./logoutSQL.php'"로 log_out을 클릭했을 때 페이지가 이동하도록 설정했습니다. -->
            <div style="padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 18px; height: 14px; left: 1px; top: 3px; position: absolute">
                  <div style="width: 6px; height: 6px; left: 4px; top: 0px; position: absolute; border-radius: 9999px; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 14px; height: 6px; left: 0px; top: 8px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
              <!-- 여기에서 이동 -->
              <div onClick="location.href='./logoutSQL.php'" style="color: #1D1D1D; font-size: 22px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word cursor:hand">log-out</div>
            <!-- 여기에서 이동 --><!-- 여기에서 이동 --><!-- 여기에서 이동 -->
            </div>
            <!--여기까지 로그아웃 버튼-->
          </div>
        </div>
      </div>

        <!--퀵메뉴-->
        <div style="align-self: stretch; height: 204px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
          <!-- <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div> -->
          <div style="height: 30px; padding-bottom: 16px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
            <div style="align-self: stretch; padding-top: 10px; padding-bottom: 10px; justify-content: flex-end; align-items: center; gap: 12px; display: inline-flex"></div>
            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
              <div style="justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                <div style="justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex"></div>
              </div>
            </div>
          </div>
          <div style="align-self: stretch; height: 64px; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
            <div style="width: 98vw; height: 64px; padding-top: 1px; padding-bottom: 1px; padding-left: 2vw; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
              <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 검색<div class="dropdown-content">
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--검색학생!!!-->
                    <div onClick="location.href='./searchSTD.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                    </div>
                  </a>
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--검색교수!!!!-->
                    <div onClick="location.href='./searchPRF.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                    </div>
                  </a>
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--검색담당자!!!!!-->
                    <div onClick="location.href='./searchMNG.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                    </div>
                  </a>
                </div></div>
                
              </div>
              <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 추가<div class="dropdown-content">
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--삽입학생!!!-->
                    <div onClick="location.href='./insertSTD.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                    </div>
                  </a>
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--삽입교수!!!!-->
                    <div onClick="location.href='./insertPRF.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                    </div>
                  </a>
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--삽입담당자!!!!!-->
                    <div onClick="location.href='./insertMNG.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                    </div>
                  </a>
                </div></div>
                
              </div>
              <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 삭제<div class="dropdown-content">
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--삭제학생!!!-->
                    <div onClick="location.href='./deleteSTD.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                    </div>
                  </a>
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--삭제교수!!!!-->
                    <div onClick="location.href='./deletePRF.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                    </div>
                  </a>
                  <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                    <!--삭제담당자!!!!!-->
                    <div onClick="location.href='./deleteMNG.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                    </div>
                  </a>
                </div></div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--여기 메인버튼 있어요!!!!-->
    <!--여기 메인버튼 있어요!!!!-->
    <!--여기 메인버튼 있어요!!!!-->
  </div>
  <!--여기까지 헤더-->


  <!--로고-->
  <div onClick="location.href='./mainUSER.php'" style="width: 172px; height: 75px; left: 1vw; top: 39px; position: absolute; cursor:hand">
        <div style="left: 45px; top: 0px; position: absolute; color: #65A2FC; font-size: 50px; font-family: Notable; font-weight: 400; line-height: 75px; word-wrap: break-word; font-family : fantasy;">⩸SEM</div>
  </div>
  <!--여기까지 로고-->


  <!--기능-->
  <div style="width: 100vw; height: 150vh; justify-content: center; align-items: flex-start; gap: 80px; display: inline-flex">
    <div style="flex: 1 1 0; padding-bottom: 80px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 80px; display: inline-flex">
      <div style="align-self: stretch; height: 64px; padding-left: 20vw; padding-top: 40px; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 80px; display: flex">
        <div style="border-radius: 6px; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
          <div style="justify-content: flex-start; align-items: center; display: flex">
            <div style="padding-top: 6px; padding-bottom: 7px; padding-left: 2px; padding-right: 2px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
              <div style="text-align: right; color: #1D1D1D; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">⌂ 홈 &nbsp ▷</div>
            </div>
          </div>
          
          <div style="padding-top: 6px; padding-bottom: 7px; padding-left: 6px; padding-right: 6px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
            <div style="text-align: right; color: #1D1D1D; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">명단 추가 &nbsp ▷</div>
          </div>
          
          <div style="padding-top: 6px; padding-bottom: 7px; padding-left: 6px; padding-right: 6px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
            <div style="text-align: right; color: #1D1D1D; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">학생 명단</div>
          </div>
          
          
        </div>
      </div>
      <div style="align-self: stretch; height: 30px; padding-left: 20vw; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 80px; display: flex">
        <div style="color: #1D1D1D; font-size: 40px; font-family: NanumGothic; font-weight: 700; line-height: 60px; letter-spacing: 1px; word-wrap: break-word">명단 추가</div>
      </div>
      <div style="width: 400px; height: 310px; padding-top: 31px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 40px; display: flex">
        <div style="height: 19px; width: 730px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 40px; display: flex">
          <div style="align-self: stretch; text-align: center; color: #1D1D1D; font-size: 25px; font-family: NanumGothic; font-weight: 700; line-height: 37.50px; word-wrap: break-word">학생정보 입력 후 추가버튼을 누르면 명단에 추가됩니다.</div>
        </div>
<form name = "formm" method = "post" action = "./insertSTDSQL.php">
        <div style="align-self: stretch; height: 360px; flex-direction: column; justify-content: center; align-items: center; padding-top: 22vh; gap: 24px; display: flex">
    <div style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "grade" SIZE="60"  placeholder="학년" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
    <div style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "studentid" SIZE="60" placeholder="학번" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
    <div style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "name" SIZE="60" placeholder="이름" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
    <div style="align-self: stretch;  padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "birth" SIZE="60" placeholder="생년월일" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
    <div style="align-self: stretch;  padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "gender" SIZE="60" placeholder="성별" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
    <div style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "studentrecord" SIZE="60" placeholder="학적" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
    <div style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-radius: 12px; border: 2px #246BEB solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
      <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; color: rgba(29, 29, 29, 0.50); font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word"><input type="text" NAME = "phonenumber" SIZE="60" placeholder="전화번호" style="font-size: 19px; width: 355px; height:78px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
      </div>
    </div>
</form>

    <div onClick="javascript:document.formm.submit();" style="width: 130px; height: 35px; padding: 4px; background: #65A2FC; border-radius: 4px; justify-content: center; align-items: center; gap: 2px; display:flex; text-align:center; cursor:hand">
      <!--여기 추가하기버튼 있어요!!!!-->
      <!--여기 추가하기버튼 있어요!!!!-->
      <!--여기 추가하기버튼 있어요!!!!-->
      <!--여기 추가하기버튼 있어요!!!!-->
      <div style="text-align: center; color: white; font-size: 20px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">추가하기</div>
    </div>
  </div>
      </div>
    </div>
  </div>
  <!--여기까지 기능-->

  <!--푸터-->
  <div style="height: 304px; padding-left: 5vw; background: #F0F0F0; border: 1px #D8D8D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
    <div style="height: 304px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
          <div style="width: 954px; height: 80px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
              <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">(03016) 서울특별시 종로구 홍지문2길 20</div>
              </div>
            </div>
            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
              <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">대표전화 1234</div>
                <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">(평일 09시~18시)</div>
              </div>
              <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">팩스 02-123-5678</div>
              </div>
            </div>
          </div>
          <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex;">
            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex;">
              <div style="height: 24px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
                <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">이용안내</div>
                <div style="width: 20px; height: 20px; position: relative">
                  <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                  <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                    <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                    <div style="width: 10px; height: 5.50px; left: 5.50px; top: 13px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1.40px #2D2D2D solid"></div>
                  </div>
                </div>
              </div>
              <div style="height: 24px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
                <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">찾아오시는 길</div>
                <div style="width: 20px; height: 20px; position: relative">
                  <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                  <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                    <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                    <div style="width: 10px; height: 5.50px; left: 5.50px; top: 13px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1.40px #2D2D2D solid"></div>
                  </div>
                </div>
              </div>
            </div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
              <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                  <div style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute; background: black"></div>
                </div>
              </div>
              <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                  <img style="width: 20px; height: 15px; left: 10px; top: 13px; position: absolute" src="https://via.placeholder.com/20x15" />
                </div>
              </div>
              <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                  <div style="width: 19px; height: 20px; left: 11px; top: 10px; position: absolute; background: black"></div>
                </div>
              </div>
              <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                  <div style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute; background: white; border-radius: 9999px"></div>
                  <div style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute; background: black"></div>
                </div>
              </div>
              <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                  <div style="width: 20px; height: 18px; left: 10px; top: 12px; position: absolute; background: black"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="width: 70vw; padding-top: 16px; border-top: 1px #D8D8D8 solid; justify-content: flex-start; align-items: center; gap: 40px; display: inline-flex">
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
            <div style="width: 68px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">이용안내</div>
            </div>
            <div style="width: 142px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
              <div style="color: #003675; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">개인정보처리방침</div>
            </div>
            <div style="width: 94px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">저작권정책</div>
            </div>
            <div style="width: 235px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">웹 접근성 품질인증 마크 획득</div>
            </div>
          </div>
          <div style="justify-content: flex-start; align-items: center; display: flex">
            <div style="color: #555555; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">© The School Event Management. All rights reserved.</div>
          </div>
        </div>
    </div>
  </div>
  <!--여기까지 푸터-->
</body>
</HTML>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( "새 학생을 등록합니다" );
?>