<html lang="en"><head>
    <meta charset="utf-8">
    <title>TREX Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="../auth">TREX Corp.</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
              <button onclick="location.href='../auth/logout'" class="btn btn-small btn-danger">Sign Out</button>
            </p>

            <ul class="nav">
              <li><a href="../auth">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2>Form & Request</h2></li>
              <li class="active"><a href="#">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="#">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2>Form Status</h2></li>
              <li><a href="#">คำขอล่าสุด</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>คำขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</h2><br>
            
            <?php echo form_open("pages/save15");?>
            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>
           
            <b>ข้าพเจ้า: </b><span style="color:red"><?echo $_POST["fname"];?></span>
            <input type="hidden" name="fname" value="<?echo $_POST["fname"];?>"><br>

            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $_POST["fbd"];?></span>
            <input type="hidden" name="fbd" value="<?echo $_POST["fbd"];?>"><br>

            <b>สัญชาติ: </b><span style="color:red"><?echo $_POST["fnation"];?></span>
            <input type="hidden" name="fnation" value="<?echo $_POST["fnation"];?>"><br>

            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b>
            <span style="color:red"><?echo $_POST["fpassport"];?></span>
            <input type="hidden" name="fpassport" value="<?echo $_POST["fpassport"];?>"><br>

            <b>ออกให้ ณ: </b><span style="color:red"><?echo $_POST["fissue"];?></span>
            <input type="hidden" name="fissue" value="<?echo $_POST["fissue"];?>"><br>

            <b>ที่อยู่: </b><span style="color:red"><?echo $_POST["faddress"];?></span>
            <input type="hidden" name="faddress" value="<?echo $_POST["faddress"];?>"><br>

            <b>ถนน: </b><span style="color:red"><?echo $_POST["fstreet"];?></span>
            <input type="hidden" name="fstreet" value="<?echo $_POST["fstreet"];?>"><br>

            <b>จังหวัด: </b><span style="color:red"><?echo $_POST["fprovince"];?></span>
            <input type="hidden" name="fprovince" value="<?echo $_POST["fprovince"];?>"><br>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $_POST["fzipcode"];?></span>
            <input type="hidden" name="fzipcode" value="<?echo $_POST["fzipcode"];?>"><br>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $_POST["ftel"];?></span>
            <input type="hidden" name="ftel" value="<?echo $_POST["ftel"];?>"><br>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $_POST["fphone"];?></span>
            <input type="hidden" name="fphone" value="<?echo $_POST["fphone"];?>"><br>
            <b>โทรสาร: </b><span style="color:red"><?echo $_POST["ffax"];?></span>
            <input type="hidden" name="ffax" value="<?echo $_POST["ffax"];?>"><br>
            <b>อีเลคทรอนิคเมล์ Email: </b><span style="color:red"><?echo $_POST["fmail"];?></span>
            <input type="hidden" name="fmail" value="<?echo $_POST["fmail"];?>">
            <br><br>
            <b>มีความประสงค์จะขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</b>
            <br>
            <br>
            <b>ในนามของ(กรณีเป็นนิติบุคคล): </b><span style="color:red"><?echo $_POST["fname2"];?></span>
            <input type="hidden" name="fname2" value="<?echo $_POST["fname2"];?>"><br>
            
            <b>โดยมี: </b><span style="color:red"><?echo $_POST["fowner"];?></span>
            <input type="hidden" name="fowner" value="<?echo $_POST["fowner"];?>"><br>

            <b>ที่อยู่: </b><span style="color:red"><?echo $_POST["faddress2"];?></span>
            <input type="hidden" name="faddress2" value="<?echo $_POST["faddress2"];?>"><br>

            <b>ถนน: </b><span style="color:red"><?echo $_POST["fstreet2"];?></span>
            <input type="hidden" name="fstreet2" value="<?echo $_POST["fstreet2"];?>"><br>

            <b>จังหวัด: </b><span style="color:red"><?echo $_POST["fprovince2"];?></span>
            <input type="hidden" name="fprovince2" value="<?echo $_POST["fprovince2"];?>"><br>

            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $_POST["fzipcode2"];?></span>
            <input type="hidden" name="fzipcode2" value="<?echo $_POST["fzipcode2"];?>"><br>

            <b>โทรศัพท์: </b><span style="color:red"><?echo $_POST["ftel2"];?></span>
            <input type="hidden" name="ftel2" value="<?echo $_POST["ftel2"];?>"><br>

            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $_POST["fphone2"];?></span>
            <input type="hidden" name="fphone2" value="<?echo $_POST["fphone2"];?>"><br>

            <b>โทรสาร: </b><span style="color:red"><?echo $_POST["ffax2"];?></span>
            <input type="hidden" name="ffax2" value="<?echo $_POST["ffax2"];?>"><br>
            <br>
            
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:red"><?echo $_POST["flocation"];?></span>
            <input type="hidden" name="flocation" value="<?echo $_POST["flocation"];?>">
            <br>

            <b>ที่อยู่: </b><span style="color:red"><?echo $_POST["faddress3"];?></span>
            <input type="hidden" name="faddress3" value="<?echo $_POST["faddress3"];?>"><br>

            <b>ถนน: </b><span style="color:red"><?echo $_POST["fstreet3"];?></span>
            <input type="hidden" name="fstreet3" value="<?echo $_POST["fstreet3"];?>"><br>

            <b>จังหวัด: </b><span style="color:red"><?echo $_POST["fprovince3"];?></span>
            <input type="hidden" name="fprovince3" value="<?echo $_POST["fprovince3"];?>"><br>

            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $_POST["fzipcode3"];?></span>
            <input type="hidden" name="fzipcode3" value="<?echo $_POST["fzipcode3"];?>"><br>
            <br>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $_POST["ftel3"];?></span>
            <input type="hidden" name="ftel3" value="<?echo $_POST["ftel3"];?>"><br>

            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $_POST["fphone3"];?></span>
            <input type="hidden" name="fphone3" value="<?echo $_POST["fphone3"];?>"><br>

            <b>โทรสาร: </b><span style="color:red"><?echo $_POST["ffax3"];?></span>
            <input type="hidden" name="ffax3" value="<?echo $_POST["ffax3"];?>"><br>
            <br>
            <br>

            <b>ชื่อพืช: </b><span style="color:red"><?echo $_POST["plantname"];?></span>
            <input type="hidden" name="plantname" value="<?echo $_POST["plantname"];?>"><br>

            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $_POST["sname"];?></span>
            <input type="hidden" name="sname" value="<?echo $_POST["sname"];?>"><br>

            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $_POST["numberbreed"];?></span>
            <input type="hidden" name="numberbreed" value="<?echo $_POST["numberbreed"];?>"><br>

            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $_POST["numbercom"];?></span>
            <input type="hidden" name="numbercom" value="<?echo $_POST["numbercom"];?>"><br>

            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $_POST["source"];?></span>
            <input type="hidden" name="source" value="<?echo $_POST["source"];?>"><br>

            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $_POST["ab"];?></span>
            <input type="hidden" name="ab" value="<?echo $_POST["ab"];?>">
            <br>
            <br>
            <br>
            <b>รูปภาพสถานประกอบการ: </b> <input type="file" name="file" id="file"><br>
            <b>รูปภาพพันธุ์พืชอนุรักษ์: </b> <input type="file" name="file2" id="file">
            <br>
            <br>
            <br>
          
            <button type="submit" class="btn btn-large btn-primary">Confirm</button>
            <?php echo form_close(); ?>

            <?php echo form_open('pages/form15'); ?>
            <!-- <input type="hidden" name="fname" value="<?echo $_POST["fname"];?>">
            <input type="hidden" name="fbd" value="<?echo $_POST["fbd"];?>">
            <input type="hidden" name="fnation" value="<?echo $_POST["fnation"];?>">
            <input type="hidden" name="fpassport" value="<?echo $_POST["fpassport"];?>">
            <input type="hidden" name="fissue" value="<?echo $_POST["fissue"];?>">
            <input type="hidden" name="faddress" value="<?echo $_POST["faddress"];?>">
            <input type="hidden" name="fstreet" value="<?echo $_POST["fstreet"];?>">
            <input type="hidden" name="fstreet2" value="<?echo $_POST["fstreet2"];?>">
            <input type="hidden" name="fprovince2" value="<?echo $_POST["fprovince2"];?>">
            <input type="hidden" name="fzipcode2" value="<?echo $_POST["fzipcode2"];?>">
            <input type="hidden" name="ftel2" value="<?echo $_POST["ftel2"];?>">
            <input type="hidden" name="fphone2" value="<?echo $_POST["fphone2"];?>">
            <input type="hidden" name="ffax2" value="<?echo $_POST["ffax2"];?>">
            <input type="hidden" name="flocation" value="<?echo $_POST["flocation"];?>">
            <input type="hidden" name="faddress3" value="<?echo $_POST["faddress3"];?>">
            <input type="hidden" name="fstreet3" value="<?echo $_POST["fstreet3"];?>">
            <input type="hidden" name="fprovince3" value="<?echo $_POST["fprovince3"];?>">
            <input type="hidden" name="fzipcode3" value="<?echo $_POST["fzipcode3"];?>">
            <input type="hidden" name="ftel3" value="<?echo $_POST["ftel3"];?>">
            <input type="hidden" name="fphone3" value="<?echo $_POST["fphone3"];?>">
            <input type="hidden" name="ffax3" value="<?echo $_POST["ffax3"];?>">

            <input type="hidden" name="plantname" value="<?echo $_POST["plantname"];?>">
            <input type="hidden" name="sname" value="<?echo $_POST["sname"];?>">
            <input type="hidden" name="numberbreed" value="<?echo $_POST["numberbreed"];?>">
            <input type="hidden" name="numbercom" value="<?echo $_POST["numbercom"];?>">
            <input type="hidden" name="source" value="<?echo $_POST["source"];?>">
            <input type="hidden" name="ab" value="<?echo $_POST["ab"];?>"> -->

            <button type="submit" class="btn btn-large">Go Back</button>
            <?php echo form_close(); ?>
          </div>
          
      </div><!--/row-->
    </div>
      <hr>

      <footer>
        <p>© TREX Corp. 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  

</body></html>