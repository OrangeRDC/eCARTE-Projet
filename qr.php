<?php
include('qrcode_generator.php');
include('config.php');
if( isset( $_GET[ 'ID' ] ) == 1 ){ 
    $a = "http://10.25.9.38/projetStrategie/eCARTE/home.php?id=1";
    $a .= $_GET[ 'ID' ];
} else{ 
    $a      = "http://10.25.9.38/projetStrategie/eCARTE/home.php?id=1";       
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>eCARTE</title>
        <link rel="icon" type="image/x-icon" href="assets/img/portfolio/thumbnails/face.jpg" />
        <script src="js/jquery-3.4.1.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
        <script src="html2pdf.bundle.min.js"></script>
        <script>
          function generatePDF()
          {
            const element = document.getElementById('zonepdf');
            var opt = 
            {
              margin: [4, 2],
              filename: 'QR Code',
              image: {type: 'jpeg', quality: 4},
              html2canvas: {scal: 6},
              jsPDF: {unit: 'in', format: 'a4', orientation: 'portrait'}
            };
            html2pdf(element, opt);
          }
        </script>

        <style>          
          #option
          {
            transition: .5s ease;
            color:#000;
          }
          #option:hover
          {
            border-radius: 3px;
            background-color: red;
            color:#fff;
            transition: .5s ease;
          }
          .champs
          {
            padding: 0 10px;
            display: flex;
            flex-direction: column;
          }
          .inputchamp
          {
            border-bottom: solid 1px green;
            text-align: left;
            color:#000;
          }
          .inputchamp:focus
          {
            outline: none;
          }
          .mydiv 
          {
            background-image: url("assets/img/portfolio/thumbnails/back.jpeg");
            background-repeat: repeat-y;
            background-position: center;
            /*background-attachment: fixed;*/
          }
        </style>
  </head>
  <body>
  <div class="container">
  <div class="profile">
    <img src="qrcode_generator.php?id=<?=$a;?>" class="card-img-top" alt="..."
    width="4000"
     height="3410">

      <button class="btn btn-success" onclick="generatePDF()" id="download">Télécharger</button>
      </div>
      </div>
    </div>
    </div>
  </body>
</html>
