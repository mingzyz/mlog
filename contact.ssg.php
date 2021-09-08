<?php
  $pageName = "PORTFOLIO";
  $pageCode = "pf";
?>

<?php require_once "head.php"; ?>
<?php require_once "contact-modal.ssg.php"; ?>

<div class="w-full h-screen contact">
  <div class="absolute z-10 flex flex-col items-center text-right contact__text">
    <div class="relative w-full mb-5 text-5xl esamanru">저와 직접 나누고 싶은<br><span class="text-white">대화</span>가 있다면,</div>
    <div class="relative tracking-tighter nanumsquare">우측 명함의 연락처에 직접 연락을 주시거나, 아래의 버튼을 눌러 메일을 발송해 주세요!</div>
    <div class="relative px-10 py-2 mt-8 text-sm bg-white open-modal btn-modal nanumsquare">
      <span>메일 보내기</span>
      <span class="ml-10 main-color">▶</span>
    </div>
  </div>
  <div class="absolute right-0 top-10">
    <img src="img/card.png" alt="">
  </div>

</div>
<?php require_once "footer.php"; ?>