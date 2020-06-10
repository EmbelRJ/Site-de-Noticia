<div class="newsType index content">
    <?= $this->Html->link(__('Adicionar Tipo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Lista de Noticias'), ['controller' =>'News','action' => 'admin'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipos de Noticia') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsType as $newsType): ?>
                <tr>
                    <td><?= $this->Number->format($newsType->id) ?></td>
                    <td><?= h($newsType->created) ?></td>
                    <td><?= h($newsType->modified) ?></td>
                    <td><?= h($newsType->name) ?></td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newsType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsType->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element('pagination'); ?>
</div>
