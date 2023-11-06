<?php 
session_start();

	include("connection.php");
	include("functions.php");
	include("header.php");

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

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <h1 class="text-center mb-4">Terms of Service</h1>
        <div class="block">
          <div class="text-content"> This StreamSB Service Agreement (the "Agreement") describes the terms and conditions on which StreamSB ("we") offer services to you ("User"). By using our services, User agrees to be bound
                by the following terms and conditions: We reserve the right to disable direct linking on user accounts that are using excessive bandwidth or otherwise abusing the system.<br><br> Pornography, nudity, sexual and any kind offensive
                videos are prohibited. Copyrighted material are also strictly prohibited. We reserve the right to decide appropriate content and can delete videos at any time without User notification.<br><br> Users must agree to comply with all laws
                which apply to their location, including copyright and trademark laws. Videos that violate copyrights or trademarks are not allowed. If someone has an infringement claim against you, you will be asked to remove the copyrighted file
                until the issue is resolved. If there is a dispute between participants on this site, StreamSB is under no obligation to become involved.<br><br>
            StreamSB is not liable for your videos or any lost business due to the unavailability or loss of the website. We make no claims of future reliability in serving, hosting or storing your videos.<br><br>
              <br>
              StreamSB is commited to cooperate with any and all legal authorities if an investigation should arise. </div>
        </div>
      </div>
	  <div class="col-xl-10">
        <h1 class="text-center mb-4">Anti-Abuse Policy</h1>
        <div class="block">
          <div class="text-content"> At StreamSB, we are committed to creating a safe and friendly online environment for everyone. To ensure this, we have developed an anti-abuse policy to ensure that no one is denied, harassed, or pressured while using our services.
				<br><br>Definition of abuse
					<br>Abuse includes any behavior that one or more users may consider inappropriate or causes discomfort, inconvenience, or harm to others. Abusive behavior may include, but is not limited to:

					<br>- Personal attacks, including inappropriate language, threats, or harassing actions.
					<br>- Use of profane or inappropriate language.
					<br>- Dissemination of misinformation or personal information of others without permission.
					<br>- Promoting or encouraging violent or illegal behavior.
					<br>- Using more than 100TB of data without a legitimate purpose.
				<br><br>Anti-abuse measures
					<br>At StreamSB, we are committed to taking strict action against abuse. Our anti-abuse measures include:

					<br>- Reporting: If you are being abused, please report it to us immediately. We will investigate and take action promptly.
					<br>- Code of conduct: We encourage respect and friendliness in communication among community members. We will strictly handle inappropriate or abusive behavior while using our services.
					<br>- Account restriction: We may restrict the accounts of users who engage in abusive behavior or violate our policies.

				<br><br>StreamSB's anti-abuse policy provides a safe and friendly environment for everyone using our services. We are committed to taking strict action against abuse and ensuring objectivity and fairness in the process. </div>
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