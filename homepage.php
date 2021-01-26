<?php
include ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>William & Astrid</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <!--<link rel="stylesheet" href="/path/to/flickity.css" media="screen">-->
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="shortcut icon" type="image/gif" href="images/intro.gif"/>
  <!--<link rel="stylesheet" type="text/css" href="css/all.scss">-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">
</head>
<!--<script src="/path/to/flickity.pkgd.min.js"></script>
<script src="js/flipcard.js"></script>
<script type="x-shader/x-fragment" src="js/shader.fs" id="mask"></script>-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="http://d3js.org/d3.v6.min.js"></script>

<!-- BABEL JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js" integrity="sha512-kp7YHLxuJDJcOzStgd6vtpxr4ZU9kjn77e6dBsivSz+pUuAuMlE2UTdKB7jjsWT84qbS8kdCWHPETnP/ctrFsA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.js" integrity="sha512-pBSlhNUvB+td6sjW1zmR6L7c7kVWR4octUPl4tfHmzO63424nxta8aLmficEcAAswQmRqTiToi63AazDurj/Sg==" crossorigin="anonymous"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script type="text/javascript">
    $(document).ready(function(){
        $('.flake').hide();
      $('#flexSwitchCheckChecked').click(function(){
        if ($('#flexSwitchCheckChecked').prop('checked')){
          $('#leaves').show();
        }
        else{
          $('#leaves').fadeOut(1000);
        }
      });
        $('.carousel').carousel({interval: false,});
    });
  </script>

  <script type="text/javascript">
    window.onload = function() {
    document.getElementById("lagu").play();

    $("#demo").carousel({interval: false,});
    $('#name').keyup(function() {
      var name = $('#name').val();

      if (name == ''){
        $('#name').addClass('is-invalid');
        $('#textname').text('Name must be filled');
      }
      else{
        $('#name').removeClass('is-invalid');
        $('#textname').text('');
      }
  });
    $('#hp').keyup(function() {
      var hp = $('#hp').val();
      var php = hp.length;

      if ($('#hp').val() == ''){
        $('#hp').addClass('is-invalid');
        $('#textphone').text('Phone must be filled');
      }
      else if (isNaN(hp) || php <= 6){
        $('#hp').addClass('is-invalid');
        $('#textphone').text('Please input Phone correctly');
      }
      else{
        $('#hp').removeClass('is-invalid');
        $('#textphone').text('');
      }
    });
    $('#email').keyup(function() {
      var rs = $('#email').val();
      var atps=rs.indexOf("@");
      var dots=rs.lastIndexOf(".");


      if (rs == ''){
        $('#email').removeClass('is-invalid');
        $('#textemail').text('');
      }
      else if (atps<1 || dots<atps+2 || dots+2>=rs.length){
        $('#email').addClass('is-invalid');
        $('#textemail').text('Please input email correctly');
      }
      else{
        $('#email').removeClass('is-invalid');
        $('#textemail').text('');
      }
    });
    $('#wish').keyup(function() {
      var wish = $('#wish').val();

      if (wish == ''){
        $('#wish').addClass('is-invalid');
        $('#textwish').text('Wish must be filled');
      }
      else{
        $('#wish').removeClass('is-invalid');
        $('#textwish').text('');
      }
    });
  }
  </script>
  <script type="text/javascript">
    function kirim(){
      var name = $('#name').val();
      var hp = $('#hp').val();
      var email = $('#email').val();
      var wish = $('#wish').val();

      if (name == '' || hp == '' || wish == '' || isNaN(hp) || hp.length <= 6){
        swal({
          title: "Please fill the form correctly",
          type: 'error',
          width: 500,
          height: 1000
        });
        event.preventDefault();
        event.stopPropagation();
      }
      else{
        swal({
          title: "Saved",
          type: 'success',
          showConfirmButton: false,
          allowOutsideClick: false,
          allowEscapeKey: false,
          allowEnterKey: false,
          showCancelButton: false,
          width: 500,
          height: 800,
          timer: 10000
        });
        $('#form1').submit();
        $('#tombol').val("Please wait").attr('disabled','disabled');
        }
    }

    function kalender(){
      window.open("https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NjRvbWFjcjQ2NWdtNGI5ZzZvb2o2YjlrNmxoamNiOW82a29qZ2I5ZzZkZ2ppY3BoY2tzNmNkOXA2NCBzdGVmYW51c3RldmVuMjZAbQ&amp;tmsrc=stefanusteven26%40gmail.com");
    }
  </script>
  <!--<script type="text/javascript">
     var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  if (!isChrome){
      $('#iframeAudio').remove()
  }
  else {
      $('#playAudio').remove() // just to make sure that it will not have 2x audio in the background 
  }
  </script>-->
<script>
    window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
</script>
<body>
    <div id="leaves" style="z-index: 2;">
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i> 
  <!-- tester -->
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i> 
  <i></i>
  <i></i>
  <i></i>
  <i></i>
</div>
    <div class="form-check form-switch" style="z-index: 100000; position: fixed;">
      <input style="height: 30px; width: 60px; margin: 10px; margin-top: 31px; margin-left: 4px; opacity: 90%; outline: none;" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
    </div>
  <div class="item">
          <img src="images/kowillacit.jpg" alt="pic 2" style="filter: grayscale(100%); -webkit-filter: grayscale(100%);">
    </div>
<form action="process.php" id="form1" name="form1" method="POST">
<div class="container-fluid">
  <div id="demo" class="carousel slide" style="width: 100%;">

  <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-pause="hover" style="z-index: 60;">

  <!-- Indicators
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card border-warning test">
      <img class="img-responsive" src="images/Artboard 1.jpg" alt="1">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test">
      <img src="images/Artboard 2.jpg" alt="2">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test">
        <div class="timer" id="timer">
            <iframe src="http://free.timeanddate.com/countdown/i7n6hreb/n437/cf12/cm0/cu4/ct3/cs1/ca0/co0/cr0/ss0/cacb19c32/cpc888/pct/tcfff/fn3/fs150/szw320/szh135/iso2021-02-14T12:00:00" allowTransparency="true" frameborder="0" width="161" height="41"></iframe>
          </div>
            <div class="savedate" id="savedate">
              <img border="0" src="images/calendar.png" onclick="kalender()">
            </div>
      <img src="images/Artboard 3.jpg" alt="3">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test">
        <div class="row" id="kowillzoomed">
          <img src="images/kowillzoomed.jpg">
        </div>
        <div class="row" id="ciacitzoomed">
          <img src="images/ciacitzoomed.jpg">
        </div>
          <div class="row" id="kowill">
          <a target="blank" href="https://instagram.com/leonarduswilliamp?igshid=pw9xs7m6tgbo">@leonarduswilliamp</a>&nbsp;
          </div>
          <div class="row" id="ciacit">
          <a target="blank2" href="https://instagram.com/leonorastrid?igshid=uofbqq96iah5">@leonorastrid</a>&nbsp;
          </div>
      <img src="images/ONLINE-INVITATION-04.jpg" alt="4">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test" id="gallerykowillacit" style="overflow-y: scroll; padding-bottom: 25px;">
        <div class="scrollbar" id="style-7">
          <div id="scrollID-gallery" class="gallery sb-scroll" style="position: absolute; display: block; margin-top: 78px; padding: 15px; margin-bottom: 15px;">
          <div class="img-mw16" style="padding-bottom: 10px;"><img data-imageboss-src="/galeri/2386376120201022194324.jpg" width="670" src="https://img.imageboss.me/bridenesia/width/670/format:webp/galeri/2386376120201022194324.jpg"></div>
          <div class="img-mw16" style="padding-bottom: 10px;"><img data-imageboss-src="/galeri/2386376120201022200725.jpg" width="670" src="https://img.imageboss.me/bridenesia/width/670/format:webp/galeri/2386376120201022200725.jpg"></div>
          <div class="img-mw16" style="padding-bottom: 10px;"><img data-imageboss-src="/galeri/2386376120201022194438.jpg" width="670" src="https://img.imageboss.me/bridenesia/width/670/format:webp/galeri/2386376120201022194438.jpg"></div>
          <div class="img-mw16" style="padding-bottom: 10px;"><img data-imageboss-src="/galeri/2386376120201022194204.jpg" width="670" src="https://img.imageboss.me/bridenesia/width/670/format:webp/galeri/2386376120201022194204.jpg"></div>
          <div class="img-mw16" style="padding-bottom: 10px;"><img data-imageboss-src="/galeri/2386376120201022194000.jpg" width="670" src="https://img.imageboss.me/bridenesia/width/670/format:webp/galeri/2386376120201022194000.jpg"></div>
          <div class="img-mw16" style="padding-bottom: 10px;"><img data-imageboss-src="/galeri/2386376120201022194107.jpg" width="670" src="https://img.imageboss.me/bridenesia/width/670/format:webp/galeri/2386376120201022194107.jpg"></div>
        </div>
        <div class="force-overflow"></div>
      </div>
        <img src="images/Artboard 5.jpg" alt="5">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test">
        <div class="intro" id="intro">
          <p>We invite you to share in our joy and <br>
              request your blessing pray</p>
        </div>
        <div class="nama0" id="nama0">
          <h3>Name</h3>
        </div>
          <div class="row" id="inputation">
              <input type="text" autocomplete="off" id="name" name="name">
          </div>
          <div class="nama1" id="nama1">
            <h3>Phone</h3>
          </div>
          <div class="row" id="inputation2">
            <input type="number" autocomplete="off" id="hp" name="hp">
          </div>
          <div class="nama2" id="nama2">
            <h3>Wedding Wish</h3>
          </div>
          <div class="row" id="inputation3">
            <textarea autocomplete="off" id="wish" name="wish"></textarea>
          </div>
          <div id="tombolkirim" class="tombolkirim">
            <button id="tombolkirim2" class="tombolkirim2" class="form-control" onclick="kirim()">Submit</button>
          </div>
          <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.1946189781803!2d107.591427!3d-6.917067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4257978b58ac9a2b!2sSaint%20Michael%20Catholic%20Church!5e0!3m2!1sen!2sus!4v1611151971906!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
          <!-- https://goo.gl/maps/Th2ocrJBpWswPMWV6 -> link ke gmaps (onclick) -->
      <img src="images/ONLINE-INVITATION-06.jpg" alt="6">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test">
      <img src="images/ONLINE-INVITATION-07.jpg" alt="7">
      </div>
    </div>
    <div class="carousel-item">
      <div class="card border-warning test">
      <img src="images/Artboard 7.jpg" alt="End">
      </div>
    </div>
    
    <!--Edit Input Type -->
    <!--
    <div class="carousel-item">
      <div class="card border-warning test">
        <div class="row">
          <h1>Wishes</h1>
          <h4>Name <label> *</label></h4>
          <input class="form-control" type="text" name="name" id="name" autocomplete="off">
        </div>
        <label name="textname" id="textname"></label>
        <div class="row" id="row2" name="row2">
          <h4>Phone <label> *</label></h4>
          <input class="form-control" type="text" name="hp" id="hp" autocomplete="off">
        </div>
        <label name="textphone" id="textphone"></label>
        <div class="row" id="row3" name="row3">
          <h4>Email</h4>
          <input class="form-control" type="text" name="email" id="email" autocomplete="off">
        </div>
        <label name="textemail" id="textemail"></label>
        <div class="row" id="row4" name="row4">
          <h4>Wish <label> *</label></h4>
          <textarea class="form-control" type="text-area" name="wish" id="wish" autocomplete="off"></textarea>
        </div>
        <label name="textwish" id="textwish"></label>
        <br id="br">
        <a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NjRvbWFjcjQ2NWdtNGI5ZzZvb2o2YjlrNmxoamNiOW82a29qZ2I5ZzZkZ2ppY3BoY2tzNmNkOXA2NCBzdGVmYW51c3RldmVuMjZAbQ&amp;tmsrc=stefanusteven26%40gmail.com" style="width: 50px; display: inline-block;"><img border="0" src="images/calendar.png" style="width: 50px; height: 50px;"></a>
        <a target="blank" href="https://instagram.com/leonarduswilliamp?igshid=pw9xs7m6tgbo" style="z-index: 70;"><img src="images/instagram.png" style="width: 10%; height: 10%;"></a>
        <div class="row" id="rowtombol" name="rowtombol">
          <button class="bg bg-dark form-control" id="tombol" name="tombol" onclick="kirim()">Submit</button>
        </div>
        <br><br><br id="br"><br id="br"><br id="br"><br id="br"><br id="br"><br id="br"><br id="br">
        <div class="row" id="rowend" name="rowend">
          <h2>
          </h2>
        </div>
        <br><br id="br">
        <img src="images/ONLINE-INVITATION-06.jpg" style="position: fixed;">
      </div>
    </div>-->
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <div class="previous" name="previous" id="previous">
  <img src="images/left-arrowgold.png" alt="left arrow" style="height: 35%; width: 100%;">
</div>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <div class="next" name="next" id="next">
  <img src="images/right-arrowgold.png" alt="right arrow" style="height: 35%; width: 100%;">
</div>
  </a>

</div>
</div>
<audio autoplay="autoplay" loop="loop" src="Marry Your Daughter.mp3" id="lagu" name="lagu" preload="auto">
</audio>
</div>
<!--Icons made by <a href="https://smashicons.com/" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>-->
  <!--<div class="row">
  <div class="col-sm-12">
    <div class="card-deck">
      <div class="card">
        <img src="avatar.png" class="card-img-top" alt="gambar">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img src="avatar.png" class="card-img-top" alt="gambar">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img src="avatar.png" class="card-img-top" alt="gambar">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  </div>
</div>-->
<!--
<div class='snow-flakes'><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div><div class='flake' id="flake"></div></div>
-->
</body>
</html>