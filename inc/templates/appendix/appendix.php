<?php
    $appendixModel = new SimpleXMLElement(file_get_contents(MODELS_PATH.'appendix.xml'));
?>
<div class="text-page text-section">
    <h1 class="page-title">Appendix</h1>

    <p>This page is for people looking for more technical information about dithering, color quantization or WebGL.</p>

    <?php //list of appendix sections ?>
    <ul class="contents-list">
        <?php foreach($appendixModel->section as $section): ?>
            <li><a href="#<?= $section['id']; ?>"><?= $section['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php //appendix section content ?>
    <div>
        <?php foreach($appendixModel->section as $section): ?>
            <section class="appendix-section" id="<?= $section['id']; ?>">
                <h2><?= $section['title']; ?></h2>
                <div><?= PageView::smartenSingleQuotes($section->description); ?></div>
                <ul class="appendix-source-list">
                    <?php foreach($section->sources->source as $source): ?>
                        <li>
                            <a href="<?= $source['url'] ?>" class="appendix-source-title"><?= PageView::smartenSingleQuotes($source->title); ?></a>
                            <?= PageView::smartenSingleQuotes(PageView::innerXml($source->description, 'description')); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php endforeach; ?>
    </div>
</div>


