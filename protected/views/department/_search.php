<?php
/* @var $this DepartmentController */
/* @var $model Department */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses1'); ?>
		<?php echo $form->textField($model,'re_courses1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses2'); ?>
		<?php echo $form->textField($model,'re_courses2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses3'); ?>
		<?php echo $form->textField($model,'re_courses3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses4'); ?>
		<?php echo $form->textField($model,'re_courses4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses5'); ?>
		<?php echo $form->textField($model,'re_courses5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses6'); ?>
		<?php echo $form->textField($model,'re_courses6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses7'); ?>
		<?php echo $form->textField($model,'re_courses7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses8'); ?>
		<?php echo $form->textField($model,'re_courses8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses9'); ?>
		<?php echo $form->textField($model,'re_courses9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_courses10'); ?>
		<?php echo $form->textField($model,'re_courses10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses1'); ?>
		<?php echo $form->textField($model,'el_courses1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses2'); ?>
		<?php echo $form->textField($model,'el_courses2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses3'); ?>
		<?php echo $form->textField($model,'el_courses3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses4'); ?>
		<?php echo $form->textField($model,'el_courses4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses5'); ?>
		<?php echo $form->textField($model,'el_courses5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses6'); ?>
		<?php echo $form->textField($model,'el_courses6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses7'); ?>
		<?php echo $form->textField($model,'el_courses7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses8'); ?>
		<?php echo $form->textField($model,'el_courses8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses9'); ?>
		<?php echo $form->textField($model,'el_courses9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'el_courses10'); ?>
		<?php echo $form->textField($model,'el_courses10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period'); ?>
		<?php echo $form->textField($model,'period'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->