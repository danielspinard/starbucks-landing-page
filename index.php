<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Starbucks | Lading Page</title>

    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/responsive.css">
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#">
                <img 
                    src="./src/img/logo.png"
                    alt="starbucks logo"
                    class="logo-header"
                >
            </a>

            <div class="toggle" onclick="toggleMenu();"></div>

            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's news</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>

        <div class="content">
            <div class="text-box">
                <h2>
                    It's not just Coffe <br>
                    It's <span>Starbucks</span>
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A corrupti repellendus illo nihil, vero magni, praesentium nobis veritatis error ad eaque officiis, consectetur adipisicing elit.</p>
                <a href="#">Learn more</a>
            </div>

            <div class="img-box">
                <img 
                    src="./src/img/img1.png"
                    class="starbucks"
                    alt="starbucks coffe"
                >
            </div>
            
            <ul class="thumb-img">
                <li>
                    <img
                        src="./src/img/thumb1.png"
                        alt="starbucks coffe"
                        onclick="slide('1');"
                    >
                </li>
                <li>
                    <img
                        src="./src/img/thumb2.png"
                        alt="starbucks coffe"
                        onclick="slide('2');"
                    >
                </li>
                <li>
                    <img
                        src="./src/img/thumb3.png"
                        alt="starbucks coffe"
                        onclick="slide('3');"
                    >
                </li>
            </ul>

            
        </div>

        <ul class="social-media">
            <li>
                <a href="#">
                    <img
                        src="./src/img/facebook.png"
                        alt="facebook logo"
                    >
                </a>
            </li>
            <li>
                <a href="#">
                    <img
                        src="./src/img/twitter.png"
                        alt="facebook logo"
                    >
                </a>
            </li>
            <li>
                <a href="#">
                    <img
                        src="./src/img/instagram.png"
                        alt="facebook logo"
                    >
                </a>
            </li>
        </ul>
    </section>
    
    <footer>
        <span>developed</span>
        <span class="heart">&hearts;</span> by
        <span><a href="https://github.com/danielspinard">Daniel M.</a></span>
    </footer>

    <script src="./src/js/script.js"></script>
</body>

</html>