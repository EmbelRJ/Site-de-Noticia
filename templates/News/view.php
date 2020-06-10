<div class="col-md-8">
    <div class="entity_wrapper">
        <div class="entity_title">
            <h1>
                <a href="#" target="_self">
                    <?= h($news->titlle) ?>
                </a>
            </h1>
        </div>
        <!-- entity_title -->

        <div class="entity_meta">
            Por: <a href="#"><?= h($news->author) ?></a>
        </div>
        
        <div class="entity_meta">
            <a href="#"><?= h($news->news_type->name) ?></a>
        </div>

        <div class="entity_content">
            <?= $this->Text->autoParagraph(h($news->text)); ?>
        </div>
    </div>
</div>

<?php echo $this->element('sidebar'); ?>
