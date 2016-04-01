<html>

<head>
    <?php
    require 'inc/head.php';
    ?>
</head>

<body>

    <div class="header_projects">
        <div class="container">
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a class="active_page" href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <h1>Projects.</h1>
            <h2>Responsive Front-End development</h2>
            <p>Html &#8226; Css &#8226; Javascript &#8226; jQuery &#8226; PHP &#8226; Wordpress  </p>
            <a class="portfolio_button" href="#projects_overview">View portfolio<i class="fa fa-angle-down"></i></a>
        </div>
    </div>

    <div class="header_projects_mobile">
        <div class="container">
            <ul class="nav">
                <li><a href="#">Projects</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">≡</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="projects_overview">
        <div class="box_hair10der">
            <img class="hvr-shrink" src="img/logo_hair10der.png ">
            <div class="hair10der_footer ">
                <p>Hair10der | Hairdresser website</p>
            </div>
        </div>
        <div class="box_magicmirror">
            <img class="hvr-shrink" src="img/magicmirror.png">

        </div>
        <div class="box_site3">
            <p>Project #3</p>

        </div>
        <div class="box_site4">
            <p>Project #4</p>

        </div>
        <div class="box_site5">
            <p>Project #5</p>

        </div>
        <div class="box_site6">
            <p>Project #6</p>

        </div>

    </div>

    <?php
    require 'inc/footer.php';
    ?>

</body>
