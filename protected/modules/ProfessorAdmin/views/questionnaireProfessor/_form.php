<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'questionnaire-professor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

    <br>

	<div class="row">
		<?php //echo $form->labelEx($model,'st1'); ?>
		<?php echo $form->radioButtonListGroup($model,'st1',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st1'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st2'); ?>
		<?php echo $form->radioButtonListGroup($model,'st2',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st2'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st3'); ?>
		<?php echo $form->radioButtonListGroup($model,'st3',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st3'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st4'); ?>
		<?php echo $form->radioButtonListGroup($model,'st4',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st4'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'st5'); ?>
		<?php echo $form->radioButtonListGroup($model,'st5',array('widgetOptions' => array('data' =>  Utils::ligoPoly()))); ?>
		<?php //echo $form->error($model,'st5'); ?>
	</div>
        <br>

	<div class="row">
		<?php //echo $form->labelEx($model,'st6'); ?>
		<?php echo $form->textAreaGroup($model,'st6',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st6'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st7'); ?>
		<?php echo $form->textAreaGroup($model,'st7',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st7'); ?>
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
		<?php echo $form->radioButtonListGroup($model,'in10',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'in7'); ?>
		<?php echo $form->radioButtonListGroup($model,'in11',array('widgetOptions' => array('data' =>  Utils::naiOxi()))); ?>
		<?php //echo $form->error($model,'in7'); ?>
	</div>
        <br>

	<div class="row">
		<?php //echo $form->labelEx($model,'in12'); ?>
		<?php echo $form->textAreaGroup($model,'in12',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in12'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in13'); ?>
		<?php echo $form->textAreaGroup($model,'in13',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in13'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in14'); ?>
		<?php echo $form->textAreaGroup($model,'in14',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in14'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in15'); ?>
		<?php echo $form->textAreaGroup($model,'in15',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in15'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in16'); ?>
		<?php echo $form->textAreaGroup($model,'in16',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in16'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'in17'); ?>
		<?php echo $form->textAreaGroup($model,'in17',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'in17'); ?>
	</div>
        <br>
	<div class="row">
		<?php //echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textAreaGroup($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'comments'); ?>
	</div>
        <br>
	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Δημιουργία' : 'Ενημέρωση', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->