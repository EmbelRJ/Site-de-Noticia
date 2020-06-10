<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                        <span class="date">
                            <?= $this->Date->longDate();?>
                        </span>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'index']); ?>">
                        <?= $this->Html->image("logo.png", ['fullBase' => true]);?>
                        </a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'admin']); ?>"><?= __('Admin News'); ?></a></li>
                        </ul>

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type Something">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary"><?= __('Search'); ?></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
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
            </nav>
        </div>
</section>
