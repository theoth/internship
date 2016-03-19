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

    <br>
    <br>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'internship_position_id'); ?>
		<?php echo $form->dropDownListGroup($model,'internship_position_id',array('widgetOptions' => array('data' => array( $positions,array('empty'=>'-'))))); ?>
		<?php //echo $form->error($model,'internship_position_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->dropDownListGroup($model,'student_id',array('widgetOptions' => array('data' => array( $students,array('empty'=>'-'))))); ?>
		<?php //echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model, 'date_request'); ?>
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

	

	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Δημιουργία' : 'Ενημέρωση', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->