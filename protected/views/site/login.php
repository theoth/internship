<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */


?>

<h1>Σύνδεση</h1>



<div class="form">
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <br>
    <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textFieldGroup($model,'username'); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordFieldGroup($model,'password'); ?>
		<?php //echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBoxGroup($model,'rememberMe'); ?>
		<?php //echo $form->label($model,'rememberMe'); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Σύνδεση', 'context'=>'primary')
); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<div id='forget-acount'><?php echo CHtml::link(Yii::t('def', "Forgot my password"), array('/site/forgottenAccount')); ?></div>
<div id='new-acount'><?php echo CHtml::link(Yii::t('def', "Δημιουγία εταιρικού λογαριασμού"), array('/site/newAccountCompany')); ?></div>
