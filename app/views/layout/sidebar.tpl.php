<header class="left-side">
            <div class="container-inside">

                <div class="logo">
                    <img class="logo-img" src="<?= $_SERVER['BASE_URI']  ?>/assets/img/logo1.jpg">
                    <h1>Cyclobster Photographie</h1>
                </div>
                
                <div class="navbar">
                    <nav id="web-nav">
                        <ul class="menu">
                            <li><a href="<?= $router->generate('home') ?>">Accueil</a></li>
                            <li><a href="<?= $router->generate('gallery') ?>">Gallerie</a></li>
                            <li><a href="<?= $router->generate('about') ?>">À  propos</a></li>
                            <li><a href="<?= $router->generate('contact') ?>">Contact</a></li>
                        </ul>
                    </nav>
                    <nav id="mobile-nav">
                        <a href="<?= $router->generate('home'); ?>" class="mobile-logo">Cyclobster Photographie</a>
                        <div class="hamburger">
                            <i class="fas fa-bars"></i>
                        </div>
                    </nav>
                    <nav id="mobile-expand" style ="display: none">
                        <div class="header-nav">
                            <a href="<?= $router->generate('home') ?>" class="mobile-logo">Cyclobster Photographie</a>
                            <i class="fas fa-times"></i>
                        </div>
                        <ul class="menu">
                            <li><a href="<?= $router->generate('home') ?>">Accueil</a></li>
                            <li><a href="<?= $router->generate('gallery') ?>">Gallerie</a></li>
                            <li><a href="<?= $router->generate('about') ?>">À  propos</a></li>
                            <li><a href="<?= $router->generate('contact') ?>">Contact</a></li>
                        </ul>
                    </nav>
                    </div>
                
                <div class="footer">
                    <div class="socials">
                        <a href="https://www.instagram.com/cyclobster_/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/Miik0o.G"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="copyright">
                        <p>Copyright Cyclobster Studio 2020.</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="right-side">