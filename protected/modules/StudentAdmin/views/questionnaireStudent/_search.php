<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */
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
		<?php echo $form->label($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in1'); ?>
		<?php echo $form->textField($model,'in1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in2'); ?>
		<?php echo $form->textField($model,'in2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in3'); ?>
		<?php echo $form->textField($model,'in3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in4'); ?>
		<?php echo $form->textField($model,'in4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in5'); ?>
		<?php echo $form->textField($model,'in5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in6'); ?>
		<?php echo $form->textField($model,'in6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in7'); ?>
		<?php echo $form->textField($model,'in7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in8'); ?>
		<?php echo $form->textField($model,'in8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in9'); ?>
		<?php echo $form->textField($model,'in9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in10'); ?>
		<?php echo $form->textField($model,'in10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in11'); ?>
		<?php echo $form->textField($model,'in11'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in12'); ?>
		<?php echo $form->textField($model,'in12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in13'); ?>
		<?php echo $form->textField($model,'in13'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in14'); ?>
		<?php echo $form->textField($model,'in14'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in15'); ?>
		<?php echo $form->textField($model,'in15'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in16'); ?>
		<?php echo $form->textField($model,'in16'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in17'); ?>
		<?php echo $form->textField($model,'in17'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in18'); ?>
		<?php echo $form->textField($model,'in18'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in19'); ?>
		<?php echo $form->textField($model,'in19'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in20'); ?>
		<?php echo $form->textField($model,'in20'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in21'); ?>
		<?php echo $form->textArea($model,'in21',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in22'); ?>
		<?php echo $form->textArea($model,'in22',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in23'); ?>
		<?php echo $form->textArea($model,'in23',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->