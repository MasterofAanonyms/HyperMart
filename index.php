<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HyperMart | Buy smarter. Live better.</title>
    <link rel="shortcut icon" href="public/images/icon.ico" type="image/x-icon">

    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>

    <div class="hero-slider">
        <button class="nav-btn prev" onclick="moveSlide(-1)">❮</button>
        <button class="nav-btn next" onclick="moveSlide(1)">❯</button>

        <div class="slide active" style="background-color: #f3f7fb;">
            <div class="container">
                <div class="content">
                    <h1>Buy Smarter.<br><span style="color: var(--hyper-orange);">Live Better.</span></h1>
                    <p>Top Brand Electronics with up to 40% Discount.</p>
                    <div class="cta-group">
                        <a href="#" class="btn-primary">Shop Deals</a>
                    </div>
                </div>
                <img src="https://www.pngplay.com/wp-content/uploads/13/Samsung-S22-Ultra-Free-PNG.png"
                    class="product-img" alt="Smartphone">
            </div>
        </div>

        <div class="slide" style="background-color: #fdf5f0;">
            <div class="container">
                <div class="content">
                    <h1>Step into<br>Summer Style</h1>
                    <p>HyperMart Exclusive Fashion Collection 2026.</p>
                    <div class="cta-group">
                        <a href="#" class="btn-primary">Explore Now</a>
                    </div>
                </div>
                <img src="https://www.pngplay.com/wp-content/uploads/6/White-Sneakers-Transparent-PNG.png"
                    class="product-img" alt="Sneakers">
            </div>
        </div>
    </div>

    <script src="public/js/main.js"></script>
</body>

</html>