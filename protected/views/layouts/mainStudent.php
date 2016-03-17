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

	<title> <?php //echo "Τελευταίες δημοσιεύσεις θέσεων πρακτικής άσκησης" ;?></title>

</head>

<body>
<div class="container" id="page">

	<div id="header">
            <?php 
            $u = Users::model()->findByAttributes(array('id'=>Yii::app()->user->id)); 
            ?>
		<div id="logo"><?php echo  Yii::app()->name ?> </div>
                <div><?php echo str_repeat('&nbsp;', 260) . $u->last_name; ?></div>
	</div><!-- header -->

	<div id="mainmenu">
	<?php
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
                               array('label'=>'αρχική σελίδα', 'url'=>array('/StudentAdmin/site')),
                                //array('label'=>'Professors', 'url'=>array('/Admin/professor')),
                                //array('label'=>'Companies', 'url'=>array('/Admin/company')),
                                array('label'=>'Οι αιτήσεις μου', 'url'=>array('/StudentAdmin/requestinternship')),
                                array('label'=>'Θέσεις πρακτικής άσκησης', 'url'=>array('/StudentAdmin/internshipposition')),
                                array('label'=>'Η θέση μου', 'url'=>array('/StudentAdmin/internshipposition/myindex')),
				//array('label'=>'Users','url'=>array('/Admin/users')),
                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)))); ?>	
            
            
            
            
         
	</div><!-- mainmenu -->
	

	<?php echo $content; ?>

                
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Theocharis S. Theodoridis<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
