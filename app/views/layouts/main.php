<!DOCTYPE html>
<html lang="en" ng-app="app" ng-controller="engagementController">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta id="targetMarket" data-targetmarket="<?php if(isset($initiationHit)){ echo $initiationHit->targetMarket;}?>">
    <meta id="axpt" data-axpt="<?php if(isset($initiationHit)){ echo $initiationHit->axpt;}?>">
    <meta id="iPOV" data-ipov="<?php if(isset($initiationHit)){ echo $initiationHit->iPOV;}?>">
    <meta id="iMeth" data-imeth="<?php if(isset($initiationHit)){ echo $initiationHit->iMeth;}?>">
    <meta id="iCont" data-icont="<?php if(isset($initiationHit)){ echo $initiationHit->iCont;}?>">
    <title>
        <?php if(isset($title)) { echo $title;}?>
    </title >

        <!-- Bootstrap -->
        <link href="/angular-bootstrap/bootstrap-twit/css/bootstrap.min.css" rel="stylesheet">
        <link href="/angular-bootstrap/bootstrap-twit/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="/angular-bootstrap/bootstrap-twit/customCSS/homepageSpecificCSS.css" rel="stylesheet">
        <link href="/angular-bootstrap/bootstrap-twit/customCSS/responsiveHomepage.css" rel="stylesheet">


    <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:700|Raleway' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <script>
       /* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/

        /*debug analytics*/
        window.ga_debug = {trace: true};
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics_debug.js','ga');

        ga('create', 'UA-65189312-1', 'auto');
        <?php
            if(!isset($initiationHit))
            {
                ?> ga('send', 'pageview'); console.log('not set');
        <?php
            }
            else
            {
                ?>
        ga('set', 'dimension1', '<?=$initiationHit->axpt?>');
        ga('set', 'dimension2', '<?=$initiationHit->iPOV?>');
        ga('set', 'dimension3', '<?=$initiationHit->iMeth?>');
        ga('set', 'dimension4', '<?=$initiationHit->iCont?>');
        ga('set', 'dimension5', '<?=$initiationHit->targetMarket?>');
        ga('send', 'pageview'); console.log('set');
        <?php
            }
            ?>


    </script>
</head>
<body>


        <?php
        if(isset($content))
        {
            echo $content;
        }
        ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!--Add angular 1.3 source-->
        <script src="/angular-bootstrap/angular.min.js"></script>
        <!--Add angular 1.3 route source -->
        <script src="/angular-bootstrap/angular-route.min.js"></script>
        <!--Application specific javascript files-->
        <script src="/angular-bootstrap/angular/app.js"></script>
        <script src="/angular-bootstrap/angular/demoRequest.js"></script>
        <script src="/angular-bootstrap/angular/betaRequest.js"></script>
        <script src="/angular-bootstrap/angular/engagementContent.js"></script>




        <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/angular-bootstrap/bootstrap-twit/js/bootstrap.min.js"></script>

</body>
</html>