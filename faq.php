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

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="./css/style.css" rel="stylesheet" />
  </head>

  <body>
  
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <h1 class="text-center mb-4">FAQ</h1>
            <div class="block">
              <div class="text-content">
                <ul>
                  <li>
                    <b class="text-primary">What is StreamSB?</b><br />
                    StreamSB is a video hosting provider. We offer online
                    storage, sophisticated uploading and video streaming tools.
                    <br />With StreamSB you can host your videos and play them
                    online from browser / mobile devices. <br /><br />
                  </li>
                  <li>
                    <b class="text-primary">Why should I use StreamSB?</b><br />
                    Whenever you need to share a video, StreamSB can help.<br />
                    We optimize quality / size of your videos and make them
                    playable in web player. So you can start watching video
                    quickly without downloading whole file.
                    <br /><br />
                  </li>
                  <li>
                    <b class="text-primary"
                      >Can I search for files other people uploaded?</b
                    ><br />
                    Yes, you can Search for other video files that were marked
                    as Public.
                    <br /><br />
                  </li>
                  <li>
                    <b class="text-primary"
                      >What kind of files can be uploaded?</b
                    ><br />
                    All video format files.<br />
                    The only restrictions are for copyrighted material,
                    pornography, nudity and any kind offensive material.<br />Please
                    refer to our
                    <a href="https://streamsb.com/tos.html">TOS</a> for more
                    info on StreamSB terms of service. <br /><br />
                  </li>
                  <li>
                    <b class="text-primary">How to delete a file I uploaded?</b
                    ><br />
                    To delete a file you uploaded you can use Delete Link that
                    was provided to you after the upload proccess or delete it
                    from My Videos page.
                    <br /><br />
                  </li>
                  <li>
                    <b class="text-primary">Can I hotlink the stuff I upload?</b
                    ><br />
                    No. Hotlinking is not allowed on any kind of files uploaded
                    to our servers.
                    <br /><br />
                  </li>
                  <li>
                    <b class="text-primary">I still have questions!</b><br />
                    Don't hesitate to contact us using our
                    <a href="https://streamsb.com/contact.html">contact form</a
                    >.
                  </li>
                </ul>
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