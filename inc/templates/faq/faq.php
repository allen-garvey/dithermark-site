<?php
    $faqList = new SimpleXMLElement(file_get_contents(MODELS_PATH.'faq.xml'));
?>
<div class="text-page text-section">
    <h1 class="page-title">FAQ</h1>

    <p>This page is for general information about Dithermark, how to use it, and general troubleshooting tips. For source code documentation, please see the <a href="<?= DITHERMARK_GITHUB_URL; ?>">Dithermark GitHub page.</a></p>

    <?php //list of questions ?>
    <ul class="contents-list">
        <?php foreach($faqList->faq as $faq): ?>
            <li><a href="#<?= $faq['id']; ?>"><?= $faq->question; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php //answers ?>
    <div>
        <?php foreach($faqList->faq as $faq): ?>
            <div class="faq-container" id="<?= $faq['id']; ?>">
                <div class="faq-question"><p><?= PageView::smartenSingleQuotes($faq->question); ?></p></div>
                <div class="faq-answer"><p><?= str_replace('${DITHERMARK_GITHUB_URL}', DITHERMARK_GITHUB_URL, str_replace('${RESOURCES_PAGE_URL}', RESOURCES_PAGE_URL, PageView::smartenSingleQuotes(PageView::innerXml($faq->answer, 'answer')))); ?></p></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


