<?php

$username = $_POST['username'];
$password = $_POST['password'];

// echo "Username : $username <br> Password : $password"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
      <h1>POSTTEST 02 MADE BY RENALDI PRATAMA/2209106054</h1>
      <img src="assets/sun1.png" id="ikon">
    </header>

    <nav>
      <div class="logo">
        <a href="index.html">
          <img src="assets/logo01.webp" alt="#" />
        </a>
      </div>
      <div class="nav-items">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="#">GENRE</a></li>
          <li><a href="#">BOOKMARK</a></li>
          <li><a href="#">COMICS</a></li>
          <li><a href="abtme.html">ABOUT ME</a></li>
          <li><a href="login.html">LOGIN</a></li>
        </ul>
      </div>
    <div class="menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>


  </nav>
    <div class="slamatdatang">
        <p>selamat datang <?= $username;?></p>
    </div>

    <div class="content">
      <div class="leftpart">
        <div class="box">
          <p>Popular Today</p>
          <div class="releases">
            <div class="poptoday">
              <img src="assets/standardofReCover06.webp" alt="#" />`
              <p>Standart Of Renicarnation</p>
              <p>chapter 69</p>
            </div>
            <div class="poptoday">
              <img
                src="assets/replicate-prediction-racly3rbhmzlnnex2krwvuaada.webp"
                alt="#"
              />
              <p>Martial God Regressed to <br />Level 2</p>
              <p>chapter 28</p>
            </div>
          </div>
        </div>

        <div class="latest">
          <p>Latest Realese</p>
          <div class="row1">
            <div class="post1">
              <img src="assets/standardofReCover06.webp" alt="#" />
              <div class="chlist1">
                <p>Standart Of Renicarnation</p>
                <ul>
                  <li>Chapter 69</li>
                  <li>Chapter 68</li>
                  <li>Chapter 67</li>
                </ul>
              </div>
            </div>

            <div class="post2">
              <img
                src="assets/replicate-prediction-racly3rbhmzlnnex2krwvuaada.webp"
                alt="#"
              />
              <div class="chlist2">
                <p>Martial God Regressed to <br />Level 2</p>
                <ul>
                  <li>Chapter 28</li>
                  <li>Chapter 27</li>
                  <li>Chapter 26</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="post3">
              <img src="assets/ORV03.webp" alt="#" />
              <div class="chlist1">
                <p>Omniscient Reader Viewpoint</p>
                <ul>
                  <li>Chapter 69</li>
                  <li>Chapter 68</li>
                  <li>Chapter 67</li>
                </ul>
              </div>
            </div>

            <div class="post4">
              <img src="assets/CoverRD.webp" alt="#" />
              <div class="chlist2">
                <p>Worn & Torn Newbie</p>
                <ul>
                  <li>Chapter 28</li>
                  <li>Chapter 27</li>
                  <li>Chapter 26</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row3">
            <div class="post5">
              <img
                src="assets/TheTerminallyIllYoungMasteroftheBaekClanCover01.webp"
                alt="#"
              />
              <div class="chlist1">
                <p>
                  The Terminally Ill Young <br />
                  Master of the Baek Clan
                </p>
                <ul>
                  <li>Chapter 69</li>
                  <li>Chapter 68</li>
                  <li>Chapter 67</li>
                </ul>
              </div>
            </div>

            <div class="post6">
              <img
                src="assets/resourcePhotoauto_scaleLevel3width-1000.webp"
                alt="#"
              />
              <div class="chlist2">
                <p>My Daughter Is The Last Boss</p>
                <ul>
                  <li>Chapter 28</li>
                  <li>Chapter 27</li>
                  <li>Chapter 26</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row4">
            <div class="post7">
              <img src="assets/swordmastersyoungestCover02.webp" alt="#" />
              <div class="chlist1">
                <p>Swordmasters Youngest Son</p>
                <ul>
                  <li>Chapter 69</li>
                  <li>Chapter 68</li>
                  <li>Chapter 67</li>
                </ul>
              </div>
            </div>

            <div class="post8">
              <img
                src="assets/BD_C3_B8_AE_C1_EE__C7_A5_C1_F6_690x1000.webp"
                alt="#"
              />
              <div class="chlist2">
                <p>Reformation of the Deadbeat Noble</p>
                <ul>
                  <li>Chapter 28</li>
                  <li>Chapter 27</li>
                  <li>Chapter 26</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="rightpart">
        <div class="popular">
          <p>Popular</p>
          <ol>
            <li>
              <div class="pop1">
                <img src="assets/ORV03.webp" alt="" />
                <h4>
                  Omniscient Reader Viewpoint
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img
                  src="assets/TheTerminallyIllYoungMasteroftheBaekClanCover01.webp"
                  alt=""
                />
                <h4>
                  The Terminally Ill Young Master of the Baek Clan
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img src="assets/standardofReCover06.webp" alt="" />
                <h4>
                  Standart Of Renicarnation
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img src="assets/CoverRD.webp" alt="" />
                <h4>
                  Worn & Torn Newbie
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img
                  src="assets/resourcePhotoauto_scaleLevel3width-1000.webp"
                  alt=""
                />
                <h4>
                  My Daughter Is The Last boss
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img
                  src="assets/replicate-prediction-racly3rbhmzlnnex2krwvuaada.webp"
                  alt=""
                />
                <h4>
                  Martial God Regressed to Level 2
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img
                  src="assets/BD_C3_B8_AE_C1_EE__C7_A5_C1_F6_690x1000.webp"
                  alt=""
                />
                <h4>
                  Reformation of the Deadbeat Noble
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img src="assets/swordmastersyoungestCover02.webp" alt="" />
                <h4>
                  Swordmasters Youngest Son
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
            <li>
              <div class="pop1">
                <img src="assets/AcademyGeniusSwordmasterCover01.webp" alt="" />
                <h4>
                  Academy Genuis Swordmasters
                  <p>Genres : Action, Adventure, Fantasy</p>
                </h4>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </div>

    <div class="bar-bwh">
      <a href="#">Pivacy Policy</a>
      <a href="#">Copyright Act</a>
      <a href="#">Terms of Service</a>
    </div>
    <footer>
      <img src="assets/logo01.webp" alt="" />
    </footer>

    <script src="script.js"></script>    

</body>
</html>