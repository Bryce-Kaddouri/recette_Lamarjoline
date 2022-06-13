<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>recette de brandon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @tailwind base;
      @tailwind components;
      @tailwind utilities;  
    </style>

</head>
<body>
    <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<!--Just the logo.. Don't mind this-->
<svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
<g><path fill="#fff"
d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
</g>
</svg>
<div class="" style="width:30%;height:60%;position:absolute;border: 1px solid red; border-radius:15px;display:block;">
<div class="title" style="border: 1px solid red; top:0">
<h1 style="color:black;">
    Connexion
  </h1>
</div>
<form action="backOffice/auth.php" method="POST">
<div class="title" style="border: 1px solid red; height:30%;">
  <label for=""  style="font-size:20px;color:red;">E-mail : </label>
  <input name="email" style="margin-top:2rem;border: 1px solid red;width:50%;background-color: rgba(255,255,255,0);border-radius:15px;"  type="email">
</div>
<div class="title" style="border: 1px solid red; top:0;height:30%;">
  <label  style="margin-top:1rem;color:red;font-size:20px;" for="" >Mot de passe : </label>
  <input name="password" style="color: red;margin-top:2rem;border: 1px solid red;width:50%;background-color: rgba(255,255,255,0);border-radius:15px;" type="password">
</div>
<div class="title" style="border: 1px solid red;height:30%;">
<input type="submit" value="Connexion" style="background-color:red;padding:10px;border-radius:10px;margin-top:1rem;">
</div>
</form>

</div>
</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>


</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->

<!--Content ends-->
</body>
</html>