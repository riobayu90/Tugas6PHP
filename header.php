  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <?php
        $page = $_REQUEST['page'];
        if($page == 'home'){
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        } else if($page == 'about'){
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        } else if($page == 'resume'){
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        } else if($page == 'portfolio'){
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        } else if($page == 'services'){
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        } else if($page == 'contact'){
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        } else {
        ?>
            <li><a href="index.php?page=home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="index.php?page=about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="index.php?page=resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="index.php?page=portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="index.php?page=services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="index.php?page=contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <?php
        }
        ?>
        
      </ul>
    </nav>

  </header>