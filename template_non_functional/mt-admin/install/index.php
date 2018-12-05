<?php
error_reporting(E_ALL); @ini_set('display_errors', 'off'); @ini_set('log_errors', 'on'); require_once __DIR__ . '/common.php'; if (Moto\System::isInstalled()) { echo Moto\System::getResponse()->redirect('./../'); exit; } $now = time(); ?>
<!DOCTYPE html>
<html ng-app="install">
<head>
    <meta charset="utf-8">
    <title ng-bind-template="{{ 'MODULE.INSTALL.APP_NAME' | translate}}">Installation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic">
    <link rel="stylesheet" href="../../<?php echo Moto\System::getRelativePath('@systemAssets/assets.min.css') . '?t=' . $now ?>">
    <link rel="stylesheet" href="../../<?php echo Moto\System::getRelativePath('@systemIncludes/css/font-awesome.min.css') . '?t=' . $now ?>">
    <link rel="stylesheet" href="../css/style.css?t=<?php echo $now?>">
    <link rel="stylesheet" href="./css/style.css?t=<?php echo $now?>">
</head>
<body class="install-app guest-app">
    <div id="content-wrapper" class="content-wrapper view-animate">
        <div class="content-inner">
            <ui-view class="wizzard-block"></ui-view>
            <uib-progressbar animate="true" max="MaxStep" value="currentStep" type="warning"></uib-progressbar>
        </div>
    </div>
    <script src="../../<?php echo Moto\System::getRelativePath('@systemAssets/assets.min.js') . '?t=' . $now ?>" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
        var app = app || {};
        app.config = app.config || {};
        app.config.apiUrl = 'api.php';
    </script>
    <script type="text/javascript" data-cfasync="false">
        angular.module('application.config.value', ['ng']).constant('application.config.value', <?php echo json_encode(Moto\Application\Installation\Processor::prepareInstallationData())?> );
    </script>
    <script src="./application.min.js?t=<?php echo $now?>" type="text/javascript" data-cfasync="false"></script>
</body>
</html>
