<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */
/* @var $form booster.widgets.TbActiveForm */

?>

<?php

$companies = Company::getList();

$professors = Professor::getList();

$students = Student::getList();
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'internship-position-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of booster.widgets.TbActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'date_start'); ?>
		<?php echo $form->textFieldGroup($model,'date_start'); ?>
		<?php //echo $form->error($model,'date_start'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'date_end'); ?>
		<?php echo $form->textFieldGroup($model,'date_end'); ?>
		<?php //echo $form->error($model,'date_end'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textFieldGroup($model,'grade'); ?>
		<?php //echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownListGroup($model,'company_id',$companies,array('empty'=>'-')); ?>
		<?php //echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'professor_id'); ?>
		<?php echo $form->dropDownListGroup($model,'professor_id',$professors,array('empty'=>'-')); ?>
		<?php //echo $form->error($model,'professor_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->dropDownListGroup($model,'student_id',$students,array('empty'=>'-')); ?>
		<?php //echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'file_student_reference_name'); ?>
		<?php echo $form->fileFieldGroup($model,'file_student_reference_name');?>
		<?php //echo $form->error($model,'file_student_reference_name'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status_submit_student'); ?>
		<?php echo $form->textFieldGroup($model,'status_submit_student'); ?>
		<?php //echo $form->error($model,'status_submit_student'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'file_company_name'); ?>
		<?php echo $form->fileFieldGroup($model,'file_company_name');?>
		<?php //echo $form->error($model,'file_company_name'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status_submit_company'); ?>
		<?php echo $form->textFieldGroup($model,'status_submit_company'); ?>
		<?php //echo $form->error($model,'status_submit_company'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status_submit_professor'); ?>
		<?php echo $form->textFieldGroup($model,'status_submit_professor'); ?>
		<?php //echo $form->error($model,'status_submit_professor'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textFieldGroup($model,'status'); ?>
		<?php //echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textFieldGroup($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textAreaGroup($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'published'); ?>
		<?php echo $form->checkboxGroup($model,'published'); ?>
		<?php //echo $form->error($model,'published'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(         'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Save') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->