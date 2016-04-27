<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'questionnaire-student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->textFieldGroup($model,'student_id'); ?>
		<?php //echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'in1'); ?>
		<?php echo $form->radioButtonListGroup($model,'in1',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in1'); ?>
	</div>
        <br>
        
	<div class="row">
		<?php //echo $form->labelEx($model,'in2'); ?>
		<?php echo $form->radioButtonListGroup($model,'in2',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in2'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in3'); ?>
		<?php echo $form->radioButtonListGroup($model,'in3',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in3'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in4'); ?>
		<?php echo $form->radioButtonListGroup($model,'in4',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in4'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in5'); ?>
		<?php echo $form->radioButtonListGroup($model,'in5',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in5'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in6'); ?>
		<?php echo $form->radioButtonListGroup($model,'in6',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in6'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in7',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in8'); ?>
		<?php echo $form->radioButtonListGroup($model,'in8',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in8'); ?>
	</div>
        <br>

	<div class="row">
		<?php //echo $form->labelEx($model,'in8'); ?>
		<?php echo $form->radioButtonListGroup($model,'in9',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in8'); ?>
	</div>
        <br>

	<div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in10',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in11',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>

	<div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in12',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        
       <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in13',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in14',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in15',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in16',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in17',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in18',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in19',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in20',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
	
	

	<div class="row">
		<?php //echo $form->labelEx($model,'in21'); ?>
		<?php echo $form->textAreaGroup($model,'in21',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in21'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'in22'); ?>
		<?php echo $form->textAreaGroup($model,'in22',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in22'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'in23'); ?>
		<?php echo $form->textAreaGroup($model,'in23',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in23'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textAreaGroup($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->