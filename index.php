<html>

    <head>
        <?php
            require 'inc/head.php';
        ?>
    </head>

    <body>

        <div class="header">
            <div class="container">
                <ul class="nav">
                    <li><a class="active_page" href="index.php">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="header_mobile">
            <div class="container">
                <ul class="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="icon">
                        <a href="javascript:void(0);" onclick="myFunction()">≡</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="banner">
            <div class="container">
                <div class="main">
                    <h1>Tristan.</h1>
                    <p>Dutch Developer</p>
                    <a href="projects.php" class="btn-main">Projects</a>
                </div>
            </div>
        </div>

        <div class="supporting">
            <div class="container">
                <div class="content_design">
                    <img src="img/design.svg">
                    <h2>Design</h2>
                    <p>I don't only develop my websites. I also design my websites myself.</p>
                    <a class="btn-content" href="projects.php">Learn more</a>
                </div>

                <div class="content_develop">
                    <img src="img/develop.svg">
                    <h2>Develop</h2>
                    <p>I use modern tools and languages to transform a design into a website.</p>
                    <a class="btn-content" href="projects.php">Learn more</a>
                </div>

                <div class="content_manage">
                    <img src="img/manage.svg">
                    <h2>Manage</h2>
                    <p>I also deliver a service to get your website online and manage the website afterwards.</p>
                    <a class="btn-content" href="projects.php">Learn more</a>
                </div>
            </div>
        </div>

        <?php
            require 'inc/footer.php';
        ?>


    </body>

</html>