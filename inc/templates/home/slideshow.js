(function(){
    const slides = document.querySelectorAll('#carousel .carousel-slide');
    const isSlideInitialized =  Array.from(slides, (slide, i) => i === 0);
    let currentIndex = 0;
    
    const displayImage = () =>{
        slides.forEach((slide, i) => {
            const isCurrentSlide = i === currentIndex;
            const classAction = isCurrentSlide ? 'add' : 'remove';

            if(isCurrentSlide) {
                if(!isSlideInitialized[i]){
                    const image = slide.querySelector('img');
                    image.src = image.dataset.src;
                    slide.querySelectorAll('source').forEach(source => {
                        source.srcset = source.dataset.srcset;
                    });
                }
                isSlideInitialized[i] = true;
            }

            slide.classList[classAction]('selected');
        });
    };
    
    document.getElementById('carousel-button-left').onclick = () => {
        currentIndex--;
        if(currentIndex < 0){
            currentIndex = slides.length - 1;
        }
        displayImage();
    };
    
    document.getElementById('carousel-button-right').onclick = () => {
        currentIndex++;
        if(currentIndex >= slides.length){
            currentIndex = 0;
        }
        displayImage();
    };
})();