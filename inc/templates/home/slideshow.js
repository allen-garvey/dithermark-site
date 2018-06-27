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