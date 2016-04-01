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
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active_page" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="header_mobile">
        <div class="container">
            <ul class="nav">
                <li><a href="#">Contact</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>


                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">≡</a>
                </li>
            </ul>
        </div>
    </div>

    <?php
    require 'inc/footer.php';
    ?>

</body>


