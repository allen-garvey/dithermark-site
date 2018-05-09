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
            <p>Create art while exploring image dithering and color quantization algorithms</p>
        </div>
        <div class="tagline-overlay"></div>
    </div>
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
