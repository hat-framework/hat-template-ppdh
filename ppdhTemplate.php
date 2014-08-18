<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    $this->LoadHead();
    //$this->Html->LoadCss("min");
    $this->Html->LoadCss("reset");
    $this->Html->LoadCss("base");
    $this->Html->LoadCss("menu");
    $this->Html->LoadCss("main");
    $this->Html->LoadCss("footer");
    $this->Html->LoadCss("components");
    $this->Html->LoadCss("specific");
    $this->Html->LoadCss("responsive");
    $this->Html->LoadJs(URL_JS."lib/core/min");
?>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
	    
	    <!-- iPhone ICON -->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-icon-57x57.png" sizes="57x57" rel="apple-touch-icon">
        <!-- iPad ICON-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
        <!-- iPhone (Retina) ICON-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
        <!-- iPad (Retina) ICON-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">

        <!-- iPhone SPLASHSCREEN-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
        <!-- iPhone (Retina) SPLASHSCREEN-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPad (portrait) SPLASHSCREEN-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
        <!-- iPad (landscape) SPLASHSCREEN-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
        <!-- iPad (Retina, portrait) SPLASHSCREEN-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPad (Retina, landscape) SPLASHSCREEN-->
        <link href="http://ppdh.origin-webmasters.com.br/templates/ppdh/img/apple/apple-touch-startup-image-1496x2048.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

<body>

<!-- general-outer -->
<div id="general-outer" class="general-outer">

    <!--header -->
    <div id="header-wrap" class="header-wrap"">
        <div id="header" class="header">
            <div id="nav" class="nav">
                <?php $this->LoadRegion("menu-superior"); ?>
            </div>
            
        </div>
    </div>
    
    <?php 
        $this->LoadMessages();
    ?>

    <!-- content-outer -->
    <div id="content-wrap" class="content-wrap">

       <!-- content -->
       <div id="content" class="content">
           <div id="response" class="response">
               <?php 
                    $this->LoadMessages();
                    $this->LoadRegion("page-top"); 
               ?>
           </div>
           
            <!-- main -->
            <div id="main-outer" class="main-outer">
                <div id="main" class="main clearfix">
                    <?php
                        $this->LoadRegion("body-top");
                        if(isset($show_links)) \classes\Component\Component::displayPathLinks($show_links);
                        $this->Load("body");
                     ?>
                <!-- /main -->
                <div class="clear"></div>
                </div>
                <div id="dir" class="dir">
                        <?php $this->Load("Apoio");?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        <!-- content -->
        </div>
        <div class="clear"></div>
        
    <!-- /content-out -->
    </div>
	<div class="clear"></div>
	
</div>
<!-- /general-outer -->	
    
<!-- footer-outer-->
<div id="footer-outer" class="footer-outer">
    <div id="footer" class="footer left">
        <a href="#header">Voltar ao topo</a>
    </div>
    <div id="footer2" class="footer right">
    	 Sistema Heternal 2013
        <!-- <?php echo SITE_SLOGAN; ?> -->
    </div>
</div>
<!-- /footer-outer -->

<script language="javascript" src="<?php echo URL_TEMPLATES; ?>/ppdh/js/min.js"></script>

</body>
</html>