<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset("utf-8") ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= __('TechNews');?></title>

    <?= $this->Html->meta('icon') ?>

    <!-- CSS -->
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome/font-awesome.min.css') ?>
    <?= $this->Html->css('mobile-menu.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.theme.default.min.css') ?>
    <?= $this->Html->css('my.style.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <!-- NavBar -->
                <?php echo $this->element('navbar'); ?>

                <section id="entity_section" class="entity_section">
                    <div class="container">
                        <!-- Main -->
                        <div class="row">
                            <?= $this->fetch('content') ?>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <?php echo $this->element('footer'); ?>
            </div>
        </div>
        <!-- Nav Mob -->
        <?php echo $this->element('navmob'); ?>
    </div>

    <!-- JavaScript -->
    <?= $this->fetch('script') ?>
    <?= $this->fetch('custom_script') ?>

    <?php echo $this->Html->script('jquery-2.1.4.min.js'); ?>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
    <?php echo $this->Html->script('mobile-menu.js'); ?>
    <?php echo $this->Html->script('owl.carousel.min.js'); ?>
    <?php echo $this->Html->script('jquery.validate.js'); ?>
    <?php echo $this->Html->script('script.js'); ?>

    <?php $this->start('script'); ?>
    <script>
        $(function () {});

    </script>
    <?php $this->end(); ?>
</body>

</html>
