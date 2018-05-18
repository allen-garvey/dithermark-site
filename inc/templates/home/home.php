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
            <p class="tagline-text">Create art with image dithering and color quantization algorithms</p>
        </div>
        <div class="tagline-overlay"></div>
    </div>
</div>
<div class="home-copy text-section">
    <p>Do you love pixel art, needlepoint or retro video games? One thing these art forms share is using a small color palette to simulate a wider range of colors. Today, a similar effect can be achieved by using <a href="https://en.wikipedia.org/wiki/Dither#Digital_photography_and_image_processing">image dithering</a> or <a href="https://en.wikipedia.org/wiki/Color_quantization">color quantization</a> algorithms.
    </p>
    <p>Dithermark is an in-browser app that gives you these tools to use on your own photos to create original artwork. All you need is a recently updated web browser (desktop or laptop computer with Google Chrome or Mozilla Firefox recommended).

    </p>
    <p class="callout"><a href="<?= DITHERMARK_APP_URL; ?>">Try it out!</a>
</div>
<script>
    (function(){
        var carouselButtonRight = document.getElementById('carousel-button-right');
        var carouselButtonLeft = document.getElementById('carousel-button-left');
        var imageUrls = ['home-sweet', 'nyc', 'neon-flower', 'tomato', 'jackson'].map(function(name){
            return '<?= IMAGES_URL; ?>' + name + '.png';
        });
        var imageElements = new Array(imageUrls.length);
        var image = document.getElementById('carousel-image');
        <?php //Have to clone it so it won't get overridden ?>
        imageElements[0] = image.cloneNode();
        var currentIndex = 0;
        <?php //Create and keep reference to img to avoid redownloaded each time ?>
        function displayImage(){
            if(!imageElements[currentIndex]){
                imageElements[currentIndex] = document.createElement('img');
                imageElements[currentIndex].src = imageUrls[currentIndex];
                imageElements[currentIndex].onload = function(){
                    changeImage(currentIndex);
                };
            }
            else{
                changeImage(currentIndex);
            }
        }
        function changeImage(currentIndex){
            image.src = imageUrls[currentIndex];
        }
        carouselButtonLeft.onclick = function(){
            currentIndex--;
            if(currentIndex < 0){
                currentIndex = imageUrls.length - 1;
            }
            displayImage();
        };
        carouselButtonRight.onclick = function(){
            currentIndex++;
            if(currentIndex >= imageUrls.length){
                currentIndex = 0;
            }
            displayImage();
        };
    })();
</script>
