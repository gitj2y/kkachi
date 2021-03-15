<?php
  if(!isset($_SESSION)){
    session_start();
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>까치당구장2021</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="menu.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script>
    $(document).on('mouseover', '.c', function () {
      $('.dept02').slideDown(200);
    });
    $(document).on('mouseover', 'div', function () {
        if (!$(this).hasClass('c')) {
            $('.dept02').slideUp(200);
        }
    });
  </script>

  <script>
    $(function(){
      $(".zeta-menu li").hover(function(){
        $('ul:first',this).show();
      }, function(){
        $('ul:first',this).hide();
      });
      $(".zeta-menu>li:has(ul)>a").each( function() {
        $(this).html( $(this).html()+' &or;' );
      });
      $(".zeta-menu ul li:has(ul)")
        .find("a:first")
        .append("<p style='float:right;margin:-3px'>&#9656;</p>");
    });
  </script>


</head>
<body>
  <section id="head">
    <div class="a"><span>까치</span><span>당구클럽</span></div>&nbsp&nbsp
    <div class="b"><p><?php echo $_SESSION['userNM'];?>&nbsp님 ...즐거운 시간 되세요..</p></div>
    <div class="c">
      <ul class="dept01">
        <li>
          <span><a href="./php/loginform.php">로그인</a></span>
          
            <ul class="dept02">
                <li id="asd">
                  <p> ------------- </p>
                </li>
                <li id="asd">
                  <a href="./php/logout.php">로그아웃</a>
                  <p> ------------- </p>
                </li>
                <li id="asd">
                  <a href="./php/joinform.php">회원가입</a>
                  <p> ------------- </p>
                </li>
                <li id="asd">
                  <a href="#">회원정보수정</a>
                  <p> ------------- </p>
                </li>
                <li id="asd">
                  <a href="#">회원삭제/탈퇴</a>
                </li>
            </ul>
        </li>
      </ul>
    </div>
    <br>
    <hr>
    <div class='zeta-menu-bar'>
      <ul class="zeta-menu">
        <li><a href="#">홈</a>
          <ul>
            <li><a href="http://localmap.co.kr/web/splus/kmap/view.php?sigun=6290000&gugun=3630000&keyno=429&keyname=%EA%B9%8C%EC%B9%98%EB%8B%B9%EA%B5%AC%EC%9E%A5&" target="_blank">소개</a></li>
            <li><a href="#">시설</a></li>
            <li><a href="https://map.kakao.com/?urlX=457594.0&urlY=471021.0&name=까치당구장" target="_blank">위치</a></li>
            <li><a href="#">운영정책</a></li>
          </ul>
        </li>
        <li><a href="#">당구 상식</a>
          <ul>
            <li><a href="#">매너</a>
              <ul>
                <li><a href="#">기본 매너</a></li>
                <li><a href="#">대대 매너</a></li>
                <li><a href="https://www.youtube.com/watch?v=XHm165R2WlU" target="_blank">매너 영상</a></li>
              </ul>
            </li>
            <li><a href="#">용어</a></li>
            <li><a href="#">게임 규칙</a>
              <ul>
                <li><a href="#">3구</a></li>
                <li><a href="#">4구</a></li>
                <li><a href="#">식스볼</a></li>
                <li><a href="#">포켓볼</a></li>
              </ul>
            </li>
          </ul>
        </li>  
        </li>
        <li><a href="#">대 상태</a>
          <ul>
            <li><a href="#">전체보기</a></li>
            <li><a href="#">대별보기</a>
              <ul>
                <li><a href="#">1번대</a></li>
                <li><a href="#">2번대</a></li>
                <li><a href="#">3번대</a></li>
                <li><a href="#">4번대</a></li>
                <li><a href="#">5번대</a></li>
                <li><a href="#">6번대</a></li>
              </ul>
            </li>
          </ul>
        <li><a href="#">게시판</a>
          <ul>
            <li><a href="#">게시판1</a></li>
            <li><a href="#">게시판2</a></li>
          </ul>
        </li> 
        <li><a href="#">공지사항</a>
          <ul>
            <li><a href="#">공지사항1</a></li>
            <li><a href="#">공지상항2</a></li>
          </ul>
        </li>  
      </ul>
    </div>
  </section>
  <div class="Slides" style="max-width:1500px">
    <img class="mySlides" src="./img/img1.png" style="width:130%">
    <img class="mySlides" src="./img/img2.jpg" style="width:130%">
    <img class="mySlides" src="./img/img3.jpg" style="width:130%">
  </div>
  <hr>
  <footer>
    <article class="foot">
      <p>까치당구클럽</p>
      <p>사업자등록번호 : 000-00-00000</p>
      <p>주소: 광주광역시 광산구 장덕동 1474번지 2층</p>
    </article>
  </footer>
  <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); 
    }
  </script>
</body>
</html>