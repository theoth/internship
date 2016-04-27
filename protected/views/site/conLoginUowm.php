<?php
include_once('CAS.php');
include_once('cas_config.php');
//include_once('CAS/Client.php');
//include_once('CAS/Languages/English.php');

foreach (glob(Yii::app()->basePath . "/views/site/CAS/*.php") as $filename)
{   echo $filename;
    include_once $filename;
}
//echo Yii::app()->basePath . "/views/site/CAS/*.php";
die();


phpCAS::client($cas_protocol, $cas_sso_server, $cas_port, '');
phpCAS::setCasServerCACert($cas_cert);
phpCAS::handleLogoutRequests(true, array($cas_sso_server));
phpCAS::forceAuthentication();
if (isset($_REQUEST['logout'])) {
    phpCAS::logout(array("service" => $cas_logout_app_redirect_url));
}
?>


<h4>App1 | Advanced SAML 1.1 example</h4>
<div class="alert alert-success alert-margin" > phpCAS::logo
    <span class="glyphicon glyphicon-ok-circle"></span> 
    Authentication succeeded for user 
    <strong><?php echo phpCAS::getUser(); ?></strong>.
</div>

<h4>User Attributes</h4>
<ul class="circle">		
    <?php
    foreach (phpCAS::getAttributes() as $key => $value) {
        if (is_array($value)) {
            echo '<li>', $key, ':<ol>';
            foreach ($value as $item) {
                echo '<li><strong>', $item, '</strong></li>';
            }
            echo '</ol></li>';
        } else {
            echo '<li>', $key, ': <strong>', $value, '</strong></li>' . PHP_EOL;
        }
    }
    ?>
</ul>

<div class="cas-version">
    <span class="glyphicon glyphicon-info-sign"></span> 
    phpCAS version is <b><?php echo phpCAS::getVersion(); ?></b>
</div>
<div class="logout-link"><a href="?logout=">Logout</a></div>
