<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= $this->Html->link(__('Lista de Noticias'), ['action' => 'admin'], ['class' => 'side-nav-item']) ?></h4>
            
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="news form content">
            <?= $this->Form->create($news) ?>
            <fieldset>
                <legend><?= __('Adicionar Noticia') ?></legend>
                <?php
                    echo $this->Form->control('titlle');
                    echo $this->Form->control('text');
                    echo $this->Form->control('resume');
                    echo $this->Form->control('author');
                    echo $this->Form->control('type_id', ['options' => $newsType]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
