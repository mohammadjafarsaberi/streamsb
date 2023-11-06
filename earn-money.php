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






  <div class="mb-4 mb-lg-5">
<div class="container">
  <h1 class="text-center mb-2">
  StreamSB Money Platform</h1>


  <div class="text-center text-muted mb-5">

    Earn money by hosting and sharing your videos with StreamSB &amp; also earn 10% lifetime earnings from referrals.<br>
    Free premium account is provided for genuine uploaders and webmasters, please contact us.
  </div>




    <div class="row mb-5">



      <div class="col-sm-6 col-lg-3 mb-3">
        <div class="premium-block d-flex flex-column">





              <div class="flex-grow-1">

                <div class="row mb-4 align-items-center">
                  <div class="col-auto">
                    <h3 class="mb-0 text-uppercase" style="letter-spacing:1px;">Tier 1</h3>
                  </div>
                  <div class="col-auto ms-auto">
                    <h1 class="mb-0 fw-normal">$30</h1>
                  </div>
                </div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Australia.png"> Australia</div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Canada.png"> Canada</div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/United-Kingdom.png"> United Kingdom</div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/United-States.png"> United States</div>

              </div>
              <div class="text-center text-muted pt-3"> Profit rates for each <b>10000 views</b> <br>of your video </div>






        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-3">
        <div class="premium-block d-flex flex-column">





              <div class="flex-grow-1">

                <div class="row mb-4 align-items-center">
                  <div class="col-auto">
                    <h3 class="mb-0 text-uppercase" style="letter-spacing:1px;">Tier 2</h3>
                  </div>
                  <div class="col-auto ms-auto">
                    <h1 class="mb-0 fw-normal">$20</h1>
                  </div>
                </div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Denmark.png"> Denmark</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Finland.png"> Finland</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/France.png"> France</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Germany.png"> Germany</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Norway.png"> Norway</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Sweden.png"> Sweden</div>

              </div>
              <div class="text-center text-muted pt-3"> Profit rates for each <b>10000 views</b> <br>of your video </div>






        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-3">
        <div class="premium-block d-flex flex-column">





              <div class="flex-grow-1">

                <div class="row mb-4 align-items-center">
                  <div class="col-auto">
                    <h3 class="mb-0 text-uppercase" style="letter-spacing:1px;">Tier 3</h3>
                  </div>
                  <div class="col-auto ms-auto">
                    <h1 class="mb-0 fw-normal">$10</h1>
                  </div>
                </div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Austria.png"> Austria</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Italy.png"> Italy</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Japan.png"> Japan</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Netherlands.png"> Netherlands</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/South-Africa.png"> South Africa</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Spain.png"> Spain</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Switzerland.png"> Switzerland</div>

              </div>
              <div class="text-center text-muted pt-3"> Profit rates for each <b>10000 views</b> <br>of your video </div>






        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-3">
        <div class="premium-block d-flex flex-column">





              <div class="flex-grow-1">

                <div class="row mb-4 align-items-center">
                  <div class="col-auto">
                    <h3 class="mb-0 text-uppercase" style="letter-spacing:1px;">Tier 4</h3>
                  </div>
                  <div class="col-auto ms-auto">
                    <h1 class="mb-0 fw-normal">$5</h1>
                  </div>
                </div>
                <div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Belgium.png"> Belgium</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/India.png"> India</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Indonesia.png"> Indonesia</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Poland.png"> Poland</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Portugal.png"> Portugal</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Romania.png"> Romania</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Russian-Federation.png"> Russian Federation</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Singapore.png"> Singapore</div>
        				<div class="mb-3 d-flex align-items-center small"><img class="me-3" src="./img/Slovak-Republic.png"> Slovak Republic</div>

              </div>
              <div class="text-center text-muted pt-3"> Profit rates for each <b>10000 views</b> <br>of your video </div>






        </div>
      </div>










    </div>
  <div class="text-center text-muted mb-5">
	The payment amount is defined by the origin country referred to in the Tier table above. Every other country that is not listed in table is paid 3$/10000 views.
  </div>

    <div class="mb-4 py-lg-5">


      <div class="row align-items-center justify-content-center justify-content-lg-between">

          <div class="col-9 col-lg-5 mb-3">
            <div class="text-center">
              <img src="./StreamSB_files/earn.svg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-11 col-lg-6 mb-3">
            <div class="text-content">

            <h3 class="h2 text-primary mb-4">What do we offer?</h3>

            <div class="earn-list">
              <div><span>Views are counted upto 1 within 24 hours per user/ip</span></div>
              <div><span>There are no rewards for automated downloads</span></div>
              <div><span>Video must be longer than 1 min</span></div>
              <div><span>Legal adult content is allowed</span></div>
              <div><span>For both normal and embedded videos you earn 100%, there is no limitation</span></div>
              <div><span>Maximum upload file size is 10GB for free users &amp; 20GB for premium users</span></div>
              <div><span>For free users and premium users files will never be deleted</span></div>
              <div><span>Traffic from third party apps will not count</span></div>
            </div>

                  <h3 class="mb-3">Payments and Withdraws:</h3>
                  <p class="text-primary">	Minimum payout amount is just $20<br>
                    Payout requests will be usually processed in less than 24hrs, maximum it can take upto 1 week.
                  </p>
                </div>
          </div>
        </div>








</div>

</div>





</div>







<div class="bg-light py-5">
      <div class="container">
        <div class="text-content">
        <h2>Rules &amp; Conditions:</h2>

        <ul class="ps-3">
          <li>Attempts to gain revenue with misleading or other unethical methods will result in immediate suspension.</li>
          <li>We have right to suspend any user if the account crosses fair usage, but we will warn the user before suspension.</li>
          <li>We are strictly dead against child porn, if any similar content found or reported the account will be suspended immediately.</li>
          <li>Partners must agree to abide our Terms &amp; conditions &amp; Copyright Policy. Failure to do may result in a temporary or permanent suspension of your account.</li>
        </ul>
    		<p class="text-primary">***WARNING: prohibited contents will lead to immediate account suspension and reporting to appropriate authorities.***</p>
</div>
      </div>
    </div>







</main>




</body>
</html>

<?php 
  include("footer.php");

?>