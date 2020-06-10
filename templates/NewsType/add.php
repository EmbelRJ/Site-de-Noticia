<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= $this->Html->link(__('Lista de Tipos'), ['action' => 'index']) ?></h4>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsType form content">
            <?= $this->Form->create($newsType) ?>
            <fieldset>
                <legend><?= __('Adcionar Tipo de Noticia') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
