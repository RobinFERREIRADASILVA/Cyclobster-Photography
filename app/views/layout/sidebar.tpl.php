<header class="left-side">
            <div class="container-inside">

                <div class="logo">
                    <h1>Cyclobster Photography</h1>
                    

                </div>
                
                <div class="navbar">
                    <nav id="web-nav">
                        <ul class="menu">
                            <li><a href="<?= $router->generate('home') ?>">Home</a></li>
                            <li><a href="<?= $router->generate('gallery') ?>">Gallery</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Livre d'or</a></li>
                        </ul>
                    </nav>
                    <nav id="mobile-nav">
                        <a href="<?= $router->generate('home'); ?>" class="mobile-logo">Cyclobster Photography</a>
                        <div class="hamburger">
                            <i class="fas fa-bars"></i>
                        </div>
                    </nav>
                    <nav id="mobile-expand" style ="display: none">
                        <div class="header-nav">
                            <a href="index.html" class="mobile-logo">Cyclobster Photography</a>
                            <i class="fas fa-times"></i>
                        </div>
                        <ul class="menu">
                            <li><a href="<?= $router->generate('home') ?>">Home</a></li>
                            <li><a href="<?= $router->generate('gallery') ?>">Gallery</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Livre d'or</a></li>
                        </ul>
                    </nav>
                    </div>
                
                <div class="footer">
                    <div class="socials">
                        <a href="https://www.instagram.com/cyclobster_/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/Miik0o.G"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="guemouni.mickael@gmail.com"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="copyright">
                        <p>Copyright Cyclobster Studio 2020.</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="right-side">