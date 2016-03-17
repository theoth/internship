<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */
/* @var $form booster.widgets.TbActiveForm */

$students = Student::GetList();

$positions = InternshipPosition::GetList();

?>






<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'request-internship-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of booster.widgets.TbActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'internship_position_id'); ?>
		<?php echo $form->dropDownListGroup($model,'internship_position_id',$positions,array('empty'=>'-')); ?>
		<?php //echo $form->error($model,'internship_position_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->dropDownListGroup($model,'student_id',$students,array('empty'=>'-')); ?>
		<?php //echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
        <?php //echo $form->labelEx($model, 'date_request'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'date_request',
            'htmlOptions' => array(
                'size' => '10', // textFieldGroup size
                'maxlength' => '10', // textFieldGroup maxlength
            ),
            'options' => array(
                'dateFormat' => 'yy-mm-dd',
            ),
        ));
        ?>

        <?php //echo $form->error($model, 'date_start'); ?>
    </div>


            
        <div class="row">
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textFieldGroup($model,'status'); ?>
		<?php //echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'title1'); ?>
		<?php echo $form->textFieldGroup($model,'title1',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'title1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'code1'); ?>
		<?php echo $form->textFieldGroup($model,'code1',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'code1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'title2'); ?>
		<?php echo $form->textFieldGroup($model,'title2',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'title2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'code2'); ?>
		<?php echo $form->textFieldGroup($model,'code2',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'code2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'title3'); ?>
		<?php echo $form->textFieldGroup($model,'title3',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'title3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'code3'); ?>
		<?php echo $form->textFieldGroup($model,'code3',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'code3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'title4'); ?>
		<?php echo $form->textFieldGroup($model,'title4',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'title4'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'code4'); ?>
		<?php echo $form->textFieldGroup($model,'code4',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'code4'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'title5'); ?>
		<?php echo $form->textFieldGroup($model,'title5',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'title5'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'code5'); ?>
		<?php echo $form->textFieldGroup($model,'code5',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'code5'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(         'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Save') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->