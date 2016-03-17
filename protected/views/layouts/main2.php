    <?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
            
            
            
            <?php
            
            $str=NULL;
            
            if(!Yii::app()->user->isGuest){
            
           if($this->isUserStudent()==true){
               $str='/StudentAdmin/';
           }
           else if($this->isUserAdmin()==true){
               $str='/Admin/';
           }
           else if($this->isUserProfessor()==true){
               $str='/ProfessorAdmin/';
           }
           else if($this->isUserCompany()==true){
               $str='/CompanyAdmin/';
           }
           else if($this->isUsereetfAdmin()==true){
               $str='/eetfAdmin/';
           }
           else if($this->isUsermechAdmin()==true){
               $str='/mechAdmin/';
           }
           else if($this->isUsericteAdmin()==true){
               $str='/icteAdmin/';
           }
           else if($this->isUsernuredAdmin()==true){
               $str='/nuredAdmin/';
           }
           else if($this->isUserenvengAdmin()==true){
               $str='/envengAdmin/';
           }
           else {
               $str='/eledAdmin/';
           }
            }
            
            if($str!=NULL){
            
            $this->widget(
                    'booster.widgets.TbNavbar', array(
                'brand' => 'e-position',
                'fixed' => false,
                'fluid' => true,
                         'type' => 'inverse',
                'items' => array(
                    array(
                        'class' => 'booster.widgets.TbMenu',
                        'type' => 'navbar',
                        'items' => array(
                            array('label'=>'Αρχική σελίδα', 'url'=>array('/site/index')),
				array('label'=>'Σχετικά', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Επικοινωνία', 'url'=>array('/site/contact')),
                            array('label'=>'Dashboard', 'url'=>array($str.'/site')),
				array('label'=>'Σύνδεση', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Αποσύνδεση ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        )
                    )
                )
                    )
            );
            
            }
            else {
                
                $this->widget(
                    'booster.widgets.TbNavbar', array(
                'brand' => 'e-position',
                'fixed' => false,
                'fluid' => true,
                         'type' => 'inverse',
                'items' => array(
                    array(
                        'class' => 'booster.widgets.TbMenu',
                        'type' => 'navbar',
                        'items' => array(
                            array('label'=>'Αρχική σελίδα', 'url'=>array('/site/index')),
				array('label'=>'Σχετικά', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Επικοινωνία', 'url'=>array('/site/contact')),
                            array('label'=>'Dashboard', 'url'=>array($str.'/site/DashboardError')),
				array('label'=>'Σύνδεση', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Αποσύνδεση ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        )
                    )
                )
                    )
            );
                
                
            }
            ?>
            
            
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Theocharis S. Theodoridis<br/>
		All Rights Reserved.<br/>
		<?php //echo 'Theocharis S. Theodoridis' ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
