<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <img src="images/logo.png" alt="logo">
      </a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
  

      <?php if(isset($_SESSION['user_id'])) : ?>
          <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="/index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="/logout.php"class="nav-link">Logout</a>
              </li>
              <li class="nav-item">
                <a  href="/dashboard.php"class="nav-link">Dashboard - Hello <?php echo $_SESSION['username']; ?> </a>
              </li>
            </ul>
          </div>            
        <?php else :  ?>
            <div class="navbar-collapse collapse" id="navbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="/index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a  href="/login.php"class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a  href="/register.php"class="nav-link">Register</a>
                </li>
              </ul>
          </div>  
      <?php endif; ?>

    </div>
</nav>
