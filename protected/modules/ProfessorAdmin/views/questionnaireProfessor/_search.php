<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */
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
		<?php echo $form->label($model,'professor_id'); ?>
		<?php echo $form->textField($model,'professor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st1'); ?>
		<?php echo $form->textField($model,'st1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st2'); ?>
		<?php echo $form->textField($model,'st2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st3'); ?>
		<?php echo $form->textField($model,'st3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st4'); ?>
		<?php echo $form->textField($model,'st4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st5'); ?>
		<?php echo $form->textField($model,'st5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st6'); ?>
		<?php echo $form->textArea($model,'st6',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st7'); ?>
		<?php echo $form->textArea($model,'st7',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->textArea($model,'in12',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in13'); ?>
		<?php echo $form->textArea($model,'in13',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in14'); ?>
		<?php echo $form->textArea($model,'in14',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in15'); ?>
		<?php echo $form->textArea($model,'in15',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in16'); ?>
		<?php echo $form->textArea($model,'in16',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in17'); ?>
		<?php echo $form->textArea($model,'in17',array('rows'=>6, 'cols'=>50)); ?>
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