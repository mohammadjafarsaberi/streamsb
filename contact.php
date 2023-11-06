<?php 
session_start();

	include("connection.php");
	include("functions.php");
  include("header.php");
  include("footer.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>StreamSB</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/style.css" rel="stylesheet">
  
    
    </head>

<body>
 
  <main>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="60b85316-7cf4-4d4c-a5e4-07df36002d99";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <h1 class="text-center mb-5">Contact Us</h1>
      <div class="row align-items-center justify-content-center justify-content-lg-between">
        <div class="col-lg-6 col-xl-5 order-lg-last">
          <div class="text-center mb-5">
            <div class="h3 fw-normal mb-5 d-inline-flex align-items-center">
              support
              <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="27" height="28">
                <defs>
                  <lineargradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#3DB6D4"></stop>
                    <stop offset="100%" stop-color="#6BCFA4"></stop>
                  </lineargradient>
                </defs>
                <path fill="none" d="M26.052 6.83a10.455 10.455 0 0 0-2.522-3.589C22.438 2.228 21.125 1.434 19.59.86c-1.536-.574-3.255-.862-5.156-.862-1.372 0-2.68.172-3.923.515a14.177 14.177 0 0 0-3.46 1.461A13.988 13.988 0 0 0 1.947 7.26a15.054 15.054 0 0 0-1.401 3.589 16.447 16.447 0 0 0-.489 4.045c0 2.05.335 3.885 1.004 5.506.669 1.621 1.637 2.995 2.902 4.121 1.266 1.126 2.807 1.987 4.624 2.584 1.817.596 3.878.895 6.185.895 1.316 0 2.523-.099 3.619-.296a15.02 15.02 0 0 0 3.232-.971l-.861-2.077c-.843.36-1.761.633-2.75.819a17.78 17.78 0 0 1-3.274.279c-1.935 0-3.665-.242-5.189-.726-1.525-.485-2.815-1.191-3.873-2.12a9.203 9.203 0 0 1-2.43-3.411c-.562-1.346-.843-2.88-.843-4.603 0-1.767.297-3.416.894-4.948.596-1.531 1.426-2.865 2.489-4.002a11.551 11.551 0 0 1 3.805-2.686c1.474-.653 3.088-.979 4.843-.979 1.463 0 2.815.228 4.059.683 1.243.456 2.312 1.087 3.206 1.892A8.676 8.676 0 0 1 23.8 7.717c.506 1.103.759 2.308.759 3.614 0 1.249-.149 2.372-.447 3.369-.298.996-.7 1.838-1.206 2.525-.507.687-1.097 1.213-1.772 1.579a4.433 4.433 0 0 1-2.143.549c-.327 0-.563-.09-.709-.27-.146-.18-.219-.434-.219-.76 0-.259.036-.572.109-.938.074-.365.161-.846.262-1.33l2.177-9.749h-2.683l-.321 1.44a5.465 5.465 0 0 0-1.839-1.306c-.687-.304-1.491-.443-2.414-.443a6.25 6.25 0 0 0-2.97.751c-.934.495-1.752 1.183-2.455 2.055-.703.873-1.257 1.907-1.662 3.101-.405 1.193-.608 2.489-.608 3.885 0 .946.129 1.788.388 2.525.259.738.619 1.363 1.08 1.875a4.482 4.482 0 0 0 1.663 1.165 5.526 5.526 0 0 0 2.117.397c.9 0 1.755-.208 2.565-.624.81-.417 1.536-1.008 2.177-1.774a2.498 2.498 0 0 0 .92 1.706c.264.214.57.383.919.507.349.124.726.186 1.131.186 1.192 0 2.298-.237 3.316-.71a7.498 7.498 0 0 0 2.641-2.052c.742-.895 1.322-1.99 1.738-3.284.416-1.295.624-2.764.624-4.408.001-1.6-.295-3.089-.886-4.468Zm-10.133 8.064a7.344 7.344 0 0 1-.675 1.849 5.856 5.856 0 0 1-1.021 1.402 4.208 4.208 0 0 1-1.291.895 3.586 3.586 0 0 1-1.468.312c-1.935 0-2.902-1.221-2.902-3.664 0-1.002.132-1.948.396-2.838.264-.889.616-1.666 1.055-2.33.439-.665.948-1.191 1.527-1.579.579-.389 1.184-.583 1.814-.583.855 0 1.58.158 2.177.473a5.137 5.137 0 0 1 1.485 1.148l-1.097 4.915Z"></path>
                <path fill="url(#a)" d="M26.052 6.83a10.455 10.455 0 0 0-2.522-3.589C22.438 2.228 21.125 1.434 19.59.86c-1.536-.574-3.255-.862-5.156-.862-1.372 0-2.68.172-3.923.515a14.177 14.177 0 0 0-3.46 1.461A13.988 13.988 0 0 0 1.947 7.26a15.054 15.054 0 0 0-1.401 3.589 16.447 16.447 0 0 0-.489 4.045c0 2.05.335 3.885 1.004 5.506.669 1.621 1.637 2.995 2.902 4.121 1.266 1.126 2.807 1.987 4.624 2.584 1.817.596 3.878.895 6.185.895 1.316 0 2.523-.099 3.619-.296a15.02 15.02 0 0 0 3.232-.971l-.861-2.077c-.843.36-1.761.633-2.75.819a17.78 17.78 0 0 1-3.274.279c-1.935 0-3.665-.242-5.189-.726-1.525-.485-2.815-1.191-3.873-2.12a9.203 9.203 0 0 1-2.43-3.411c-.562-1.346-.843-2.88-.843-4.603 0-1.767.297-3.416.894-4.948.596-1.531 1.426-2.865 2.489-4.002a11.551 11.551 0 0 1 3.805-2.686c1.474-.653 3.088-.979 4.843-.979 1.463 0 2.815.228 4.059.683 1.243.456 2.312 1.087 3.206 1.892A8.676 8.676 0 0 1 23.8 7.717c.506 1.103.759 2.308.759 3.614 0 1.249-.149 2.372-.447 3.369-.298.996-.7 1.838-1.206 2.525-.507.687-1.097 1.213-1.772 1.579a4.433 4.433 0 0 1-2.143.549c-.327 0-.563-.09-.709-.27-.146-.18-.219-.434-.219-.76 0-.259.036-.572.109-.938.074-.365.161-.846.262-1.33l2.177-9.749h-2.683l-.321 1.44a5.465 5.465 0 0 0-1.839-1.306c-.687-.304-1.491-.443-2.414-.443a6.25 6.25 0 0 0-2.97.751c-.934.495-1.752 1.183-2.455 2.055-.703.873-1.257 1.907-1.662 3.101-.405 1.193-.608 2.489-.608 3.885 0 .946.129 1.788.388 2.525.259.738.619 1.363 1.08 1.875a4.482 4.482 0 0 0 1.663 1.165 5.526 5.526 0 0 0 2.117.397c.9 0 1.755-.208 2.565-.624.81-.417 1.536-1.008 2.177-1.774a2.498 2.498 0 0 0 .92 1.706c.264.214.57.383.919.507.349.124.726.186 1.131.186 1.192 0 2.298-.237 3.316-.71a7.498 7.498 0 0 0 2.641-2.052c.742-.895 1.322-1.99 1.738-3.284.416-1.295.624-2.764.624-4.408.001-1.6-.295-3.089-.886-4.468Zm-10.133 8.064a7.344 7.344 0 0 1-.675 1.849 5.856 5.856 0 0 1-1.021 1.402 4.208 4.208 0 0 1-1.291.895 3.586 3.586 0 0 1-1.468.312c-1.935 0-2.902-1.221-2.902-3.664 0-1.002.132-1.948.396-2.838.264-.889.616-1.666 1.055-2.33.439-.665.948-1.191 1.527-1.579.579-.389 1.184-.583 1.814-.583.855 0 1.58.158 2.177.473a5.137 5.137 0 0 1 1.485 1.148l-1.097 4.915Z"></path>
              </svg>
              streamsb.com
            </div>
            <div>
              <img src="./StreamSB_files/contacts.svg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-sm-8 col-lg-6">
          <div class="contacts-block mb-5">
            
            <form method="post" action="https://streamsb.com/" onsubmit="return CheckForm(this);">
            <input type="hidden" name="op" value="contact_send">
            <input type="hidden" name="rand" value="y2x5p7oqibo6ojiuzn5lztvbkxc3jhwv2622x6y">
              <div class="mb-3">
                <input type="text" class="form-control" name="name" value="" maxlength="32" placeholder="Your name">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="email" value="" size="24" maxlength="32" placeholder="E-mail">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea>
              </div>
              
                <div class="mb-3 d-flex justify-content-center">
                  <div>
                    <script src="./StreamSB_files/api.js.download" async="" defer=""></script><div class="g-recaptcha" data-sitekey="6LcKZQEVAAAAAHj9Pgs6mYc98xquQk56WxS-lUGB"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="./StreamSB_files/anchor.html" width="304" height="78" role="presentation" name="a-wew0mfg3og5f" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./StreamSB_files/saved_resource(1).html"></iframe></div>
                  </div>
                </div>
              
              <div class="text-center mx-5">
                <input type="submit" name="btn" value="Send message" class="btn btn-primary px-4 w-100">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</main>

</body>
</html>

<?php 
  include("footer.php");

?>