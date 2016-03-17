<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_start'); ?>
		<?php echo $form->textField($model,'date_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_end'); ?>
		<?php echo $form->textField($model,'date_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade'); ?>
		<?php echo $form->textField($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'professor_id'); ?>
		<?php echo $form->textField($model,'professor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_student_reference_name'); ?>
		<?php echo $form->textField($model,'file_student_reference_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_submit_student'); ?>
		<?php echo $form->textField($model,'status_submit_student'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_company_name'); ?>
		<?php echo $form->textField($model,'file_company_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_submit_company'); ?>
		<?php echo $form->textField($model,'status_submit_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_submit_professor'); ?>
		<?php echo $form->textField($model,'status_submit_professor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->