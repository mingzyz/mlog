<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$pageName?></title>
  <!-- 제이쿼리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- 테일윈드 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- 풀페이지 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- 차트 -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- particles -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!-- 라이트박스 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
  <link rel="stylesheet" href="css/common.css">
  <script src="js/common.js" defer></script>
  <link rel="stylesheet" href="css/cursor.css">
  <script src="js/cursor.js" defer></script>
</head>
<body>
  
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<nav class="flex flex-col items-center exo">
    <div class="mt-1">
      <a href="index.ssg.php">
        <img src="img/logo.svg" alt="">
      </a>
    </div>
    <div class="flex flex-col items-center my-8">
      <div class="mb-3 profile-img">
        <div>
          <img src="img/profile.png" alt="">
        </div>
      </div>
      <div>MINGZ's PAGE</div>
    </div>
    <ul class="w-full mt-10 text-sm side-menu">
      <li class="<?=$pageCode=="home"?"active":""?>">
        <a href="index.ssg.php" class="flex items-center px-5">
          <div class="mr-5">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 8.414L11.5 3.914L4.414 11H6V19H9V13H14V19H17V11H18.586L17 9.414V6H16V8.414ZM2 12L11.5 2.5L15 6V5H18V9L21 12H18V19.998H13V13.998H10V19.998H5V12H2Z"/>
            </svg>
          </div>
          <div>HOME</div>
        </a>
      </li>
      <li class="<?=$pageCode=="am"?"active":""?>">
        <a href="aboutme.ssg.php" class="flex items-center px-5">
          <div class="mr-5">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.5 14C15.642 14 19 15.567 19 17.5V20H4V17.5C4 15.567 7.358 14 11.5 14ZM18 17.5C18 16.12 15.09 15 11.5 15C7.91 15 5 16.12 5 17.5V19H18V17.5ZM11.5 5C12.4283 5 13.3185 5.36875 13.9749 6.02513C14.6313 6.6815 15 7.57174 15 8.5C15 9.42826 14.6313 10.3185 13.9749 10.9749C13.3185 11.6313 12.4283 12 11.5 12C10.5717 12 9.6815 11.6313 9.02513 10.9749C8.36875 10.3185 8 9.42826 8 8.5C8 7.57174 8.36875 6.6815 9.02513 6.02513C9.6815 5.36875 10.5717 5 11.5 5ZM11.5 6C10.837 6 10.2011 6.26339 9.73223 6.73223C9.26339 7.20107 9 7.83696 9 8.5C9 9.16304 9.26339 9.79893 9.73223 10.2678C10.2011 10.7366 10.837 11 11.5 11C12.163 11 12.7989 10.7366 13.2678 10.2678C13.7366 9.79893 14 9.16304 14 8.5C14 7.83696 13.7366 7.20107 13.2678 6.73223C12.7989 6.26339 12.163 6 11.5 6V6Z"/>
            </svg>
          </div>
          <div>ABOUT ME</div>
        </a>
      </li>
      <li class="<?=$pageCode=="pf"?"active":""?>">
        <a href="portfolio.ssg.php" class="flex items-center px-5">
          <div class="mr-5">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 5H9L12 8H19C19.7956 8 20.5587 8.31607 21.1213 8.87868C21.6839 9.44129 22 10.2044 22 11V17C22 17.7956 21.6839 18.5587 21.1213 19.1213C20.5587 19.6839 19.7956 20 19 20H6C5.20435 20 4.44129 19.6839 3.87868 19.1213C3.31607 18.5587 3 17.7956 3 17V8C3 7.20435 3.31607 6.44129 3.87868 5.87868C4.44129 5.31607 5.20435 5 6 5V5ZM6 6C5.46957 6 4.96086 6.21071 4.58579 6.58579C4.21071 6.96086 4 7.46957 4 8V17C4 17.5304 4.21071 18.0391 4.58579 18.4142C4.96086 18.7893 5.46957 19 6 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H11.586L8.586 6H6ZM6 22C5.34339 22 4.69321 21.8707 4.08658 21.6194C3.47995 21.3681 2.92876 20.9998 2.46447 20.5355C1.52678 19.5979 1 18.3261 1 17V9H2V17C2 18.0609 2.42143 19.0783 3.17157 19.8284C3.92172 20.5786 4.93913 21 6 21H18V22H6Z"/>
            </svg>
          </div>
          <div>PORTFOLIO</div>
        </a>
      </li>
      <li class="<?=$pageCode=="pc"?"active":""?>">
        <a href="process.ssg.php" class="flex items-center px-5">
          <div class="mr-5">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 8V13H13V8H7ZM2 3H5V4H18V3H21V6H20V19H21V22H18V21H5V22H2V19H3V6H2V3ZM5 19V20H18V19H19V6H18V5H5V6H4V19H5ZM6 7H14V11H17V18H8V14H6V7ZM14 14H9V17H16V12H14V14ZM3 4V5H4V4H3ZM19 4V5H20V4H19ZM19 20V21H20V20H19ZM3 20V21H4V20H3Z"/>
            </svg>
          </div>
          <div>PROCESS</div>
        </a>
      </li>
      <li class="<?=$pageCode=="ct"?"active":""?>">
        <a href="contact.ssg.php" class="flex items-center px-5">
          <div class="mr-5">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.5 22C20.327 22 21 21.327 21 20.5V17C21 16.173 20.327 15.5 19.5 15.5C18.33 15.5 17.18 15.316 16.08 14.953C15.8171 14.87 15.5365 14.8599 15.2683 14.9238C15.0001 14.9877 14.7542 15.1233 14.557 15.316L13.117 16.756C10.6281 15.4048 8.58403 13.3614 7.232 10.873L8.66 9.436C9.072 9.054 9.22 8.473 9.044 7.914C8.68174 6.8123 8.49808 5.65973 8.5 4.5C8.5 3.673 7.827 3 7 3H3.5C2.673 3 2 3.673 2 4.5C2 14.15 9.85 22 19.5 22ZM3.5 4H7C7.13261 4 7.25979 4.05268 7.35355 4.14645C7.44732 4.24021 7.5 4.36739 7.5 4.5C7.5 5.777 7.7 7.031 8.093 8.22C8.12187 8.30628 8.12525 8.39906 8.10273 8.48721C8.0802 8.57536 8.03273 8.65515 7.966 8.717L6.01 10.683C7.647 13.911 10.065 16.329 13.308 17.98L15.257 16.03C15.3235 15.9642 15.4067 15.9177 15.4975 15.8955C15.5884 15.8733 15.6836 15.8762 15.773 15.904C16.969 16.3 18.223 16.5 19.5 16.5C19.775 16.5 20 16.725 20 17V20.5C20 20.775 19.775 21 19.5 21C10.402 21 3 13.598 3 4.5C3 4.36739 3.05268 4.24021 3.14645 4.14645C3.24021 4.05268 3.36739 4 3.5 4Z"/>
            </svg>
          </div>
          <div>CONTACT</div>
        </a>
      </li>
    </ul>
  </nav>