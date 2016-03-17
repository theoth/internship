<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form booster.widgets.TbActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'company-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of booster.widgets.TbActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textFieldGroup($model,'brand',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textAreaGroup($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textFieldGroup($model,'user_id'); ?>
		<?php //echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(         'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Save') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->