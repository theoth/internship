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
		<div id="logo"><?php echo  Yii::app()->name ?> </div>
                <div><?php echo str_repeat('&nbsp;', 260)?>Administrator</div>
	</div><!-- header -->

	<div id="mainmenu">
		
            <?php
            $this->widget(
                    'booster.widgets.TbNavbar', array(
                'brand' => 'e-position',
                'fixed' => true,
                'fluid' => true,
                         'type' => 'inverse',
                'items' => array(
                    array(
                        'class' => 'booster.widgets.TbMenu',
                        'type' => 'navbar',
                        
                        'items' => array(
                            array('label'=>'Σύνοψη', 'url'=>array('/Admin/site')),
				array('label'=>'Φοιτητές', 'url'=>array('/Admin/student')),
                                array('label'=>'Καθηγητές', 'url'=>array('/Admin/professor')),
                                array('label'=>'Εταιρείες', 'url'=>array('/Admin/company')),
                                //array('label'=>'Αιτήσεις εταιρείων', 'url'=>array('/Admin/company')),
                                array('label'=>'Αιτήσεις φοιτητών', 'url'=>array('/Admin/requestInternship/viewRequests')),
                                array('label'=>'Θέσεις πρακτικής άσκησης', 'url'=>array('/Admin/internshipPosition')),
				//array('label'=>'Users','url'=>array('/Admin/users')),
                                //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Αποσύνδεση ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        )
                    )
                )
                    )
            );
            ?>
            
            
            
            
            
            
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
