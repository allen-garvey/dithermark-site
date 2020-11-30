import EmblaCarousel from 'embla-carousel';
 
const initializeSlideshow = () => {
    const slides = document.querySelectorAll('#carousel .carousel-slide');
    const isSlideInitialized =  Array.from(slides, (slide, i) => i === 0);
    
    const displayImage = (currentIndex) =>{
        if(!isSlideInitialized[currentIndex]){
            const slide = slides[currentIndex];
            const image = slide.querySelector('img');
            image.src = image.dataset.src;
            slide.querySelectorAll('source').forEach(source => {
                source.srcset = source.dataset.srcset;
            });
            isSlideInitialized[currentIndex] = true;
        }
    };

    const embla = EmblaCarousel(document.getElementById('carousel'), {
        loop: true,
    });

    embla.on('select', () => {
        displayImage(embla.selectedScrollSnap());
    });

    document.getElementById('carousel-button-left').onclick = () => {
        embla.scrollPrev();
    };
    
    document.getElementById('carousel-button-right').onclick = () => {
        embla.scrollNext();
    };
 };

 export default initializeSlideshow;
