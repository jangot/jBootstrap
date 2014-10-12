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

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-theme.min.css" type="text/css" />
    <scropt src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></scropt>
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
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!--http://likbez-net.ru/razrabotka-shablona-sajta-dlya-joomla-30/155-fajl-templatedetailsxml-urok-3.html-->
<div class="container">
    <h1 class="navbar-brand"><?php echo $app->getCfg('sitename'); ?></h1>
    <div class="row">
        <div class="col-md-1">
            <?php if($this->countModules('jb-left')) : ?>
                <jdoc:include type="modules" name="jb-left" style="xhtml" />
            <?php endif; ?>
        </div>
        <div class="col-md-10">
            <?php if($this->countModules('jb-top')) : ?>
                <jdoc:include type="modules" name="jb-top" style="xhtml" />
            <?php endif; ?>
            <jdoc:include type="component" style="xhtml" />
        </div>
        <div class="col-md-1">
            <?php if($this->countModules('jb-right')) : ?>
                <jdoc:include type="modules" name="jb-right" style="xhtml" />
            <?php endif; ?>
        </div>
        <?php if($this->countModules('jb-bottom')) : ?>
            <jdoc:include type="modules" name="jb-bottom" style="xhtml" />
        <?php endif; ?>
    </div>
</div>
<footer></footer>

</body>
</html>