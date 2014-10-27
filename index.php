<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html>
<head lang="en">
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

    <link rel="stylesheet" data-use="true" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" data-use="true" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/jBootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-theme.min.css" type="text/css" />
    <scropt src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></scropt>
    <script>
        jQuery(function(){
            //TODO remove style correct
            jQuery('link').not('[data-use]').remove();
        });
    </script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $app->getCfg('sitename'); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if($this->countModules('jb-menu')) : ?>
                <jdoc:include type="modules" name="jb-menu" style="none" />
            <?php endif; ?>
        </div>
    </div>
    <!-- /.container -->
</nav>
<!--http://likbez-net.ru/razrabotka-shablona-sajta-dlya-joomla-30/155-fajl-templatedetailsxml-urok-3.html-->
<div class="container">
    <div class="row">
        <h1 class="navbar-brand"><?php echo $app->getCfg('sitename'); ?></h1>
    </div>
    <div class="row">
        <?php if($this->countModules('jb-left')) : ?>
            <div class="col-md-2">
                <jdoc:include type="modules" name="jb-left" style="none" />
            </div>
        <?php endif; ?>
        <?php
            $contentClass = 'col-md-9';
            if ($this->countModules('jb-left')) {
                $contentClass = 'col-md-7';
            }
        ?>
        <div class="<?php echo $contentClass; ?>">
            <?php if($this->countModules('jb-top')) : ?>
                <jdoc:include type="modules" name="jb-top" style="none" />
            <?php endif; ?>
            <jdoc:include type="component" style="xhtml" />
        </div>
        <div class="col-md-3">
            right
            <?php if($this->countModules('jb-right')) : ?>
                <jdoc:include type="modules" name="jb-right" style="none" />
            <?php endif; ?>
        </div>
    </div>
    <?php if($this->countModules('jb-bottom')) : ?>
        <jdoc:include type="modules" name="jb-bottom" style="none" />
    <?php endif; ?>
</div>
<footer></footer>

</body>
</html>