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
        <div class="mb-4 mb-lg-5">
          <h1 class="text-center mb-2">Choose the right plan for you</h1>
          <div class="text-center text-muted mb-5">
            All plans include Unlimited Storage and Unlimited Traffic!.
          </div>
          <div class="select-tabs mb-5">
            <div class="nav mb-0 mb-lg-4 p-1" role="tablist">
              <a
                href="premium.php"
                class="nav-link active"
                data-bs-toggle="tab"
                aria-selected="true"
                role="tab"
              >
                Premium User Plans
              </a>
            </div>
          </div>

          <div class="tab-content">
            <div
              class="tab-pane fade show active"
              id="buy-premium-traffic"
              role="tabpanel"
            >
              <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-3">
                  <div class="premium-block">
                    <div class="premium-block-heading">
                      <span class="text-primary mb-2">30 days</span>
                      <div class="h1 fw-normal mb-0"><sup>$</sup>9.9</div>
                    </div>
                    <div class="premium-block-list">
                      <span>Priority Upload and Encoder</span>
                      <span>Custom Ads on Player</span>
                      <span>Unlimited Space</span>
                      <span>Unlimited Bandwidth</span>
                      <span>Remote URL upload</span>
                      <span>Torrent upload</span>
                    </div>
                    <div class="text-center">
                      <button
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-premium-30"
                        class="btn btn-primary px-4"
                      >
                        <i class="icon icon-btc-circle icon-size-20 me-2"></i>
                        Pay with crypto
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                  <div class="premium-block">
                    <div class="premium-block-heading">
                      <span class="text-primary mb-2">90 days</span>
                      <div class="h1 fw-normal mb-0"><sup>$</sup>19.99</div>
                    </div>
                    <div class="premium-block-list">
                      <span>Priority Upload and Encoder</span>
                      <span>Custom Ads on Player</span>
                      <span>Unlimited Space</span>
                      <span>Unlimited Bandwidth</span>
                      <span>Remote URL upload</span>
                      <span>Torrent upload</span>
                    </div>
                    <div class="text-center">
                      <button
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-premium-90"
                        class="btn btn-primary px-4"
                      >
                        <i class="icon icon-btc-circle icon-size-20 me-2"></i>
                        Pay with crypto
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                  <div class="premium-block">
                    <div class="premium-block-heading">
                      <span class="text-primary mb-2">180 days</span>
                      <div class="h1 fw-normal mb-0"><sup>$</sup>39.99</div>
                    </div>
                    <div class="premium-block-list">
                      <span>Priority Upload and Encoder</span>
                      <span>Custom Ads on Player</span>
                      <span>Unlimited Space</span>
                      <span>Unlimited Bandwidth</span>
                      <span>Remote URL upload</span>
                      <span>Torrent upload</span>
                    </div>
                    <div class="text-center">
                      <button
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-premium-180"
                        class="btn btn-primary px-4"
                      >
                        <i class="icon icon-btc-circle icon-size-20 me-2"></i>
                        Pay with crypto
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                  <div class="premium-block">
                    <div class="premium-block-heading">
                      <span class="text-primary mb-2">365 days</span>
                      <div class="h1 fw-normal mb-0"><sup>$</sup>69.99</div>
                    </div>
                    <div class="premium-block-list">
                      <span>Priority Upload and Encoder</span>
                      <span>Custom Ads on Player</span>
                      <span>Unlimited Space</span>
                      <span>Unlimited Bandwidth</span>
                      <span>Remote URL upload</span>
                      <span>Torrent upload</span>
                    </div>
                    <div class="text-center">
                      <button
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-premium-365"
                        class="btn btn-primary px-4"
                      >
                        <i class="icon icon-btc-circle icon-size-20 me-2"></i>
                        Pay with crypto
                      </button>
                    </div>
                  </div>
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