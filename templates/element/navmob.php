<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'index']); ?>"><?= __('Inicio'); ?></a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'ciencia']); ?>"><?= __('Ciencia'); ?></a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'esportes']); ?>"><?= __('Esporte'); ?></a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'saude']); ?>"><?= __('Saúde'); ?></a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'economia']); ?>"><?= __('Economia'); ?></a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'educacao']); ?>"><?= __('Educação'); ?></a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'natureza']); ?>"><?= __('Natureza'); ?></a></li>
            </ul>
        </div>
    </div>
</div>
