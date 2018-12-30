<?php
require_once 'includes/upload.php';

if(isset($_POST['send'])){
  if($_FILES['inputfile']['name']){
    $upload = new Upload($_FILES['inputfile']);
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <style>
        .grid.container {
      margin-top: 5em;
    }
    .inputfile {
    	width: 0.1px;
    	height: 0.1px;
    	opacity: 0;
    	overflow: hidden;
    	position: absolute;
    	z-index: -1;
    }
    @media (min-height: 320px) {
  .ui.footer.form-page { /* Increased specificity for SO snippet priority */
    position: absolute;
    bottom: 0;
    width: 100%;
  }
}
    </style>
    <!-- <link rel="stylesheet" type="text/css" href="semantic/out/semantic.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
    <!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script> -->
    <!-- <script src="semantic/out/semantic.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js"></script>
  </head>
  <body>

</div>
    <div class="ui inverted segment">
      <center><h1>We Have a best WAF</h1></center>
      <div class="ui center aligned basic segment">
        <form method="post" enctype="multipart/form-data">
          <div class='ui input'>
            <input type="file" (change)="fileEvent($event)" class="inputfile" name="inputfile" id="embedpollfileinput" />

            <label for="embedpollfileinput" class="ui inverted teal button">
              <i class="ui upload icon"></i>
              Upload image
            </label>
          </div>
          <div class="ui divider"></div>
          <button class="ui inverted teal button" type="submit" name="send">Send</button>
        </form>
        <br>
        <?php
         if(isset($upload)){
           echo "<p style='color:white;'>".$upload->name."</p>";
         }
         ?>
       </div>
     </div>
        <div class="ui container">
         <div class="ui accordion">
           <div class="title">
             <i class="dropdown icon"></i>
             Why do you need to use our WAF?
           </div>
           <div class="content">
             <p>We are NEVER hacked</p>
           </div>
           <div class="title">
             <i class="dropdown icon"></i>
             Why were we never hacked?

           </div>
           <div class="content">
             <p>because our WAF is fucking good.</p>
           </div>
           <div class="title">
             <i class="dropdown icon"></i>
             How can I get it?
           </div>
           <div class="content">
             <p>It's simple, you just have to pay to use this shit, but here's a quick demonstration</p>
           </div>
       </div>
     </div>
   <script>
      $('.ui.accordion').accordion();
   </script>
     <div class="ui inverted vertical footer segment form-page">
      <div class="ui container">
        <center>©k33r0kW4F</center>
      </div>
    </div>

  </body>
</html>
