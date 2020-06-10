<div class="col-md-8">
    <?php foreach ($news as $new): ?>
        <div class="entity_wrapper">
            <div class="entity_title">
                <h1>
                    <a href="#" target="_self">
                        <?= h($new->titlle) ?>
                    </a>
                </h1>
            </div>
            <!-- entity_title -->

            <div class="entity_meta">
                Por: <a href="#"><?= h($new->author) ?></a>
            </div>

            <div class="entity_meta">
                <a href="#"><?= h($new->news_type->name) ?></a>
            </div>

            <div class="entity_content">
                <?= $this->Text->autoParagraph(h($new->text)); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php echo $this->element('sidebar'); ?>
