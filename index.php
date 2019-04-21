<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/effect.css">

  <script type="text/javascript" src="js/script.js"></script>

	<title>Document</title>

</head>

<body>



<?php include 'bg.php'; ?>



<!-- form -->

<div class="card-form">

  <form class="signup" action="process.php" id="mainForm" method="post">

    <div class="form-title">Send Whatsapp Messages! without adding contact</div>

    <div class="form-body">

      <div class="">

      	<?php include 'countrycode.php'; ?> 

      </div>

      <div class="row">

      	 <input type="text" name="number" id="number" placeholder="Mobile Number*">

      </div>

      <div class="">

        <p id="error"><i>Please enter valid number</i></p>

      </div>

    </div>

    <div class="rule"></div>

    <div class="form-footer">

      <a id="submit">CHAT NOW! &rarr;</a>

    </div>

  </form>

</div>

<!-- .form -->

<script>

  $("#submit").click(function(){

    let numbers = /^[0-9]+$/;

    let inputtxt = $("#number").val();

      if(inputtxt.match(numbers)) {

        $("#mainForm").submit();

      } else {

        $("#error").slideDown(300);

        $('#number').focus();

      }

  });



  $("#number").keyup(function(){

    $("#error").hide(500);

  })



  $(document).ready(function() {

    $('#number').focus();

});

</script>

  <style>







/* Reset Select */



/* Custom Select */



  </style>

</body>

</html>