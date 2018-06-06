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
        <div class="tagline-container">
            <h1 class="tagline-title">Dithermark</h1>
            <p class="tagline-text">Create art with image dithering algorithms</p>
        </div>
        <div class="tagline-overlay"></div>
    </div>
</div>
<div class="home-copy text-section">
    <p>
        Do you love pixel art, needlepoint or retro video games? One characteristic these all share is using a limited color palette to simulate a wider range of colors. Dithermark uses the magic of <a href="https://en.wikipedia.org/wiki/Dither#Digital_photography_and_image_processing">image dithering</a> algorithms to let you easily achieve a similar effect using your own photos, right in your browser.
    </p>
    <div class="callout"><a class="btn btn-success" href="<?= DITHERMARK_APP_URL; ?>">Try it out!</a></div>
</div>
<script>
    (function(){
        var imageUrls = ['home-sweet', 'nyc', 'neon-flower', 'tomato', 'jackson'];
        var image = document.getElementById('carousel-image');
        var currentIndex = 0;
        function displayImage(){
            image.src = '<?= IMAGES_URL; ?>'+imageUrls[currentIndex]+'.png';
        }
        document.getElementById('carousel-button-left').onclick = function(){
            currentIndex--;
            if(currentIndex < 0){
                currentIndex = imageUrls.length - 1;
            }
            displayImage();
        };
        document.getElementById('carousel-button-right').onclick = function(){
            currentIndex++;
            if(currentIndex >= imageUrls.length){
                currentIndex = 0;
            }
            displayImage();
        };
    })();
</script>
