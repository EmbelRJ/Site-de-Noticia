<div class="news index content">
    <?= $this->Html->link(__('Adcionar Noticia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Tipo de Noticia'), ['controller' =>'NewsType','action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Noticias') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('titlle') ?></th>
                    <th><?= $this->Paginator->sort('resume') ?></th>
                    <th><?= $this->Paginator->sort('author') ?></th>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $news): ?>
                <tr>
                    <td><?= $this->Number->format($news->id) ?></td>
                    <td><?= h($news->created) ?></td>
                    <td><?= h($news->modified) ?></td>
                    <td><?= h($news->titlle) ?></td>
                    <td><?= h($news->resume) ?></td>
                    <td><?= h($news->author) ?></td>
                    <td><?= h($news->news_type->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element('pagination'); ?>
</div>
