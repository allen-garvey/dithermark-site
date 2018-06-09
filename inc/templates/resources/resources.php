<?php
    $resourcesModel = new SimpleXMLElement(file_get_contents(MODELS_PATH.'resources.xml'));
?>
<div class="text-page text-section">
    <h1 class="page-title">Resources</h1>

    <p>This page is for people looking for more technical information about dithering, color quantization or WebGL. For general information about Dithermark, including how to use it, please see the <a href="<?= FAQ_PAGE_URL; ?>">FAQ page.</a></p>

    <?php //list of resource sections ?>
    <ul class="contents-list">
        <?php foreach($resourcesModel->section as $section): ?>
            <li><a href="#<?= $section['id']; ?>"><?= $section['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php //resource section content ?>
    <div>
        <?php foreach($resourcesModel->section as $section): ?>
            <section class="resource-section" id="<?= $section['id']; ?>">
                <h2><?= $section['title']; ?></h2>
                <div><?= PageView::smartenSingleQuotes($section->description); ?></div>
                <ul class="resource-source-list">
                    <?php foreach($section->sources->source as $source): 
                        $sourceUrl = str_replace('${DITHERMARK_GITHUB_URL}', DITHERMARK_GITHUB_URL, $source['url']);    
                    ?>
                        <li>
                            <a href="<?= $sourceUrl; ?>" class="resource-title"><?= PageView::smartenSingleQuotes($source->title); ?></a>
                            <?= PageView::smartenSingleQuotes(PageView::innerXml($source->description, 'description')); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php endforeach; ?>
    </div>
</div>


