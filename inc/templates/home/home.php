<div class="home-header">
    <div class="carousel">
        <img src="<?= IMAGES_URL.'home-sweet.png'; ?>" alt="Dithermark image output example" id="carousel-image"/>
        <div class="carousel-button-container carousel-left">
            <div class="carousel-button" id="carousel-button-left"><span class="carousel-button-text">&lt;</span></div>
        </div>
        <div class="carousel-button-container carousel-right">
            <div class="carousel-button" id="carousel-button-right"><span class="carousel-button-text">&gt;</span></div>
        </div>
    </div>
    <div class="site-tagline">
        <div class="tagline-text">
            <h1 class="tagline-title">Dithermark</h1>
            <p>Create art with image dithering and color quantization algorithms</p>
        </div>
        <div class="tagline-overlay"></div>
    </div>
</div>
<div class="home-copy">
    <p>Do you love pixel art, needlepoint, old-school computer graphics or retro video games? One thing these art forms share is using a small color palette to simulate a larger amount of colors. Today, a similar effect can be achieved by using <a href="https://en.wikipedia.org/wiki/Dither#Digital_photography_and_image_processing">image dithering</a> or <a href="https://en.wikipedia.org/wiki/Color_quantization">color quantization</a> algorithms.
    </p>
    <p>Dithermark is an in-browser app that gives you these tools to use on your own photos to create original artwork. All that&#8217;s required is a relatively recent web browser (desktop or laptop computer recommended).

    </p>
    <p class="callout"><a href="<?= DITHERMARK_APP_URL; ?>">Try it out!</a>
</div>
<script>
    (function(){
        var carouselImage = document.getElementById('carousel-image');
        var carouselButtonRight = document.getElementById('carousel-button-right');
        var carouselButtonLeft = document.getElementById('carousel-button-left');
        var images = ['home-sweet.png', 'nyc.png', 'neon-flower.png', 'tomato.png', 'jackson.png'];
        var currentIndex = 0;

        function displayImage(){
            carouselImage.src = '<?= IMAGES_URL; ?>' + images[currentIndex];
        }

        carouselButtonLeft.onclick = function(){
            currentIndex--;
            if(currentIndex < 0){
                currentIndex = images.length - 1;
            }
            displayImage();
        };
        carouselButtonRight.onclick = function(){
            currentIndex++;
            if(currentIndex >= images.length){
                currentIndex = 0;
            }
            displayImage();
        };
    })();
</script>
