<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form booster.widgets.TbActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of booster.widgets.TbActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textFieldGroup($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textFieldGroup($model,'surname',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textFieldGroup($model,'username',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>64)); ?>
		<?php //echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textFieldGroup($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'email'); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'enabled'); ?>
		<?php echo $form->textFieldGroup($model,'enabled'); ?>
		<?php //echo $form->error($model,'enabled'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'file_cv'); ?>
		<?php echo $form->fileFieldGroup($model,'file_cv'); ?>
		<?php //echo $form->error($model,'file_cv'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'file_grades'); ?>
		<?php echo $form->fileFieldGroup($model,'file_grades'); ?>
		<?php //echo $form->error($model,'file_grades'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'f_ika'); ?>
		<?php echo $form->fileFieldGroup($model,'f_ika'); ?>
		<?php //echo $form->error($model,'f_ika'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(         'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Save') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->