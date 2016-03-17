<?php
/* @var $this ProfessorController */
/* @var $model Professor */
/* @var $form booster.widgets.TbActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'professor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of booster.widgets.TbActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textFieldGroup($model,'username',array('size'=>25,'maxlength'=>25)); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>250)); ?>
		<?php //echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'activated'); ?>
		<?php echo $form->checkboxGroup($model,'activated'); ?>
		<?php //echo $form->error($model,'activated'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textFieldGroup($model,'last_name',array('size'=>25,'maxlength'=>25)); ?>
		<?php //echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textFieldGroup($model,'first_name',array('size'=>25,'maxlength'=>25)); ?>
		<?php //echo $form->error($model,'first_name'); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textFieldGroup($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php //echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textFieldGroup($model,'telephone',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'telephone'); ?>
	</div>

	

	

	<div class="row">
		<?php //echo $form->labelEx($model,'academicid'); ?>
		<?php echo $form->textFieldGroup($model,'academicid',array('size'=>12,'maxlength'=>12)); ?>
		<?php //echo $form->error($model,'academicid'); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'department'); ?>
		<?php echo $form->dropDownListGroup($model,'department',Utils::departmentsList(),array('prompt'=>'- Επιλέξτε τμήμα -'))?>
		<?php //echo $form->error($model,'department'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNew ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->