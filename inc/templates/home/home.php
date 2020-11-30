<div class="home-header">
    <div class="carousel embla" id="carousel">
        <div class="embla__container">
            <?php foreach($data['images'] as $i => $image): 
                $isFirst = $i === 0;
                $attributePrefix = $isFirst ? '' : 'data-';
                $pngSource = IMAGES_URL.$image.'.png';
                $webpSource = IMAGES_URL.$image.'.webp';
            ?>
                <div class="embla__slide carousel-slide">
                    <picture>
                        <source <?= $attributePrefix; ?>srcset="<?= $webpSource; ?>" type="image/webp" />
                        <source <?= $attributePrefix; ?>srcset="<?= $pngSource; ?>" type="image/png" />
                        <img <?= $attributePrefix; ?>src="<?= $pngSource; ?>" alt="Dithermark image output example" />
                </picture>
                </div>
            <?php endforeach; ?>
        </div>
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
        Do you love pixel art, needlepoint or retro video games? Dithermark uses the magic of <a href="https://en.wikipedia.org/wiki/Dither#Digital_photography_and_image_processing">image dithering algorithms</a> to let you easily achieve a similar effect using your own photos, right in your browser.
    </p>
    <div class="callout"><a class="btn btn-success" href="<?= DITHERMARK_APP_URL; ?>">Try it out!</a></div>
</div>
<script src="<?= JS_URL_BASE.'app.js'; ?>">
</script>
