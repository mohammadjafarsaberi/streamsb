<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="header">
      <div class="container">
        <div class="row align-items-center flex-nowrap">
          <div class="col-auto flex-grow-1 flex-shrink-1 mw-0">
            <div class="header-main">
              <div class="row">
                <div class="col-auto d-lg-none">
                  <div class="dropdown">
                    <button
                      class="btn icon-btn"
                      data-bs-toggle="dropdown"
                      data-bs-offset="0, 16"
                    >
                      <i class="icon icon-menu icon-size-18"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <a href="#" class="dropdown-item">Upload</a>
                      <a href="premium.php" class="dropdown-item">Premium</a>
                      <a href="earn-money.php" class="dropdown-item"
                        >Earn money</a
                      >
                      <a href="tos.php" class="dropdown-item"
                        >Terms of Service</a
                      >
                      <a href="faq.php" class="dropdown-item">About us</a>
                      <a href="contact.php" class="dropdown-item">Contacts</a>
                    </ul>
                  </div>
                </div>
                <div class="col-auto flex-grow-1">
                  <a href="index.php">
                    <img src="./img/logo.svg" alt="" />
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <nav class="nav">
                    <a href="#" class="nav-link">Upload</a>
                    <a href="premium.php" class="nav-link">Premium</a>
                    <a href="earn-money.php" class="nav-link">Earn money</a>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto d-none d-lg-block">
            <a
              href="login.php"
              class="btn border-white login-btn rounded-lg me-2"
              >Login</a
            >
          </div>

          <div class="col-auto d-lg-none">
            <div class="dropdown">
              <button
                class="btn icon-btn"
                data-bs-toggle="dropdown"
                data-bs-offset="0, 16"
              >
                <i class="icon icon-user icon-size-18"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="login.php">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    
</body>
</html>