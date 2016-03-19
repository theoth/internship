<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */
/* @var $form booster.widgets.TbActiveForm */
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
        <?php //echo $form->labelEx($model, 'date_start'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'date_start',
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
        <?php //echo $form->labelEx($model, 'date_end'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'date_end',
            'htmlOptions' => array(
                'size' => '10', // textFieldGroup size
                'maxlength' => '10', // textFieldGroup maxlength
            ),
            'options' => array(
                'dateFormat' => 'yy-mm-dd',
            ),
        ));
        ?>
        <?php //echo $form->error($model, 'date_end'); ?>
    </div>

	<div class="row">
		<?php //echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textFieldGroup($model,'grade'); ?>
		<?php //echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textFieldGroup($model,'company_id'); ?>
		<?php //echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'professor_id'); ?>
		<?php echo $form->textFieldGroup($model,'professor_id'); ?>
		<?php //echo $form->error($model,'professor_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->textFieldGroup($model,'student_id'); ?>
		<?php //echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status_submit_student'); ?>
		<?php echo $form->textFieldGroup($model,'status_submit_student'); ?>
		<?php //echo $form->error($model,'status_submit_student'); ?>
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
		<?php echo $form->textFieldGroup($model,'published'); ?>
		<?php //echo $form->error($model,'published'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textFieldGroup($model,'year'); ?>
		<?php //echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_absence1'); ?>
		<?php echo $form->textFieldGroup($model,'st_absence1'); ?>
		<?php //echo $form->error($model,'st_absence1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_text1'); ?>
		<?php echo $form->textAreaGroup($model,'st_text1',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_text1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_notes1'); ?>
		<?php echo $form->textAreaGroup($model,'st_notes1',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_notes1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_text2'); ?>
		<?php echo $form->textAreaGroup($model,'st_text2',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_text2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_notes2'); ?>
		<?php echo $form->textAreaGroup($model,'st_notes2',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_notes2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_text3'); ?>
		<?php echo $form->textAreaGroup($model,'st_text3',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_text3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_notes3'); ?>
		<?php echo $form->textAreaGroup($model,'st_notes3',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_notes3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_absence2'); ?>
		<?php echo $form->textFieldGroup($model,'st_absence2'); ?>
		<?php //echo $form->error($model,'st_absence2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_absence3'); ?>
		<?php echo $form->textFieldGroup($model,'st_absence3'); ?>
		<?php //echo $form->error($model,'st_absence3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_final_text'); ?>
		<?php echo $form->textAreaGroup($model,'st_final_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_final_text'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'st_final_notes'); ?>
		<?php echo $form->textAreaGroup($model,'st_final_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'st_final_notes'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_absence1'); ?>
		<?php echo $form->textFieldGroup($model,'co_absence1'); ?>
		<?php //echo $form->error($model,'co_absence1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_absence2'); ?>
		<?php echo $form->textFieldGroup($model,'co_absence2'); ?>
		<?php //echo $form->error($model,'co_absence2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_absence3'); ?>
		<?php echo $form->textFieldGroup($model,'co_absence3'); ?>
		<?php //echo $form->error($model,'co_absence3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_text1'); ?>
		<?php echo $form->textAreaGroup($model,'co_text1',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_text1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_notes1'); ?>
		<?php echo $form->textAreaGroup($model,'co_notes1',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_notes1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_text2'); ?>
		<?php echo $form->textAreaGroup($model,'co_text2',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_text2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_notes2'); ?>
		<?php echo $form->textAreaGroup($model,'co_notes2',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_notes2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_text3'); ?>
		<?php echo $form->textAreaGroup($model,'co_text3',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_text3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_notes3'); ?>
		<?php echo $form->textAreaGroup($model,'co_notes3',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_notes3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_final_text'); ?>
		<?php echo $form->textAreaGroup($model,'co_final_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_final_text'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_final_notes'); ?>
		<?php echo $form->textAreaGroup($model,'co_final_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'co_final_notes'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'prof_final_text'); ?>
		<?php echo $form->textAreaGroup($model,'prof_final_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'prof_final_text'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget(         'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Save') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->