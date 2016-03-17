<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */


?>

<h1>Επικοινωνήστε μαζί μας.</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>Θα χαρούμε να απαντήσουμε στις ερωτήσεις σας.</p>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
    <br>
    <br>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textFieldGroup($model,'name'); ?>
		<?php //echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textFieldGroup($model,'email'); ?>
		<?php //echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textFieldGroup($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textAreaGroup($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textFieldGroup($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php 
                $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Υποβολή', 'context'=>'primary')
);
                
                //echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
