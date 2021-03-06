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

            <?php 

             //var_dump (Yii::app()->user->id); die();

           

            ?>

		<div id="logo"><?php echo  Yii::app()->name?> </div>

                <?php              $c = Company::model()->findByAttributes(array('user_id'=>Yii::app()->user->id)); 

?>

                <div><?php echo str_repeat('&nbsp;', 260) .  $c->brand; ?></div>

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

                               array('label'=>'αρχική σελίδα', 'url'=>array('/CompanyAdmin/site')),

                                //array('label'=>'Professors', 'url'=>array('/Admin/professor')),

                                //array('label'=>'Companies', 'url'=>array('/Admin/company')),

                                //array('label'=>'Requests', 'url'=>array('/Admin/requestInternship')),

                                array('label'=>'Οι θέσεις μου πρακτικής άσκησης', 'url'=>array('/CompanyAdmin/internshipPosition')),

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

		<?php //echo 'Theocharis S. Theodoridis' ?>

	</div><!-- footer -->



</div><!-- page -->



</body>

</html>

