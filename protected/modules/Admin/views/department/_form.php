<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */

$Users=Users::getAdminList();
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'department-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">

        <?php
        echo $form->datePickerGroup(
                $model, 'req_date_start', array(
            'widgetOptions' => array(
                'options' => array(
                    'language' => 'en',
                    'format' => 'yyyy-mm-dd'
                ),
            ),
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-5',
            ),
            'hint' => 'Πατήστε μέσα στο πεδίο.',
            'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                )
        );
        ?>

    </div>
        
        <div class="row">

        <?php
        echo $form->datePickerGroup(
                $model, 'req_date_end', array(
            'widgetOptions' => array(
                'options' => array(
                    'language' => 'en',
                    'format' => 'yyyy-mm-dd'
                ),
            ),
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-5',
            ),
            'hint' => 'Πατήστε μέσα στο πεδίο.',
            'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                )
        );
        ?>

    </div>

	<div class="row">
		<?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textFieldGroup($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'name'); ?>
	</div>
        
        

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses1'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses1'); ?>
		<?php //echo $form->error($model,'re_courses1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses2'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses2'); ?>
		<?php //echo $form->error($model,'re_courses2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses3'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses3'); ?>
		<?php //echo $form->error($model,'re_courses3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses4'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses4'); ?>
		<?php //echo $form->error($model,'re_courses4'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses5'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses5'); ?>
		<?php //echo $form->error($model,'re_courses5'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses6'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses6'); ?>
		<?php //echo $form->error($model,'re_courses6'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses7'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses7'); ?>
		<?php //echo $form->error($model,'re_courses7'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses8'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses8'); ?>
		<?php //echo $form->error($model,'re_courses8'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses9'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses9'); ?>
		<?php //echo $form->error($model,'re_courses9'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'re_courses10'); ?>
		<?php echo $form->textFieldGroup($model,'re_courses10'); ?>
		<?php //echo $form->error($model,'re_courses10'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses1'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses1'); ?>
		<?php //echo $form->error($model,'el_courses1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses2'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses2'); ?>
		<?php //echo $form->error($model,'el_courses2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses3'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses3'); ?>
		<?php //echo $form->error($model,'el_courses3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses4'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses4'); ?>
		<?php //echo $form->error($model,'el_courses4'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses5'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses5'); ?>
		<?php //echo $form->error($model,'el_courses5'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses6'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses6'); ?>
		<?php //echo $form->error($model,'el_courses6'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses7'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses7'); ?>
		<?php //echo $form->error($model,'el_courses7'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses8'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses8'); ?>
		<?php //echo $form->error($model,'el_courses8'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses9'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses9'); ?>
		<?php //echo $form->error($model,'el_courses9'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'el_courses10'); ?>
		<?php echo $form->textFieldGroup($model,'el_courses10'); ?>
		<?php //echo $form->error($model,'el_courses10'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'period'); ?>
		<?php echo $form->textFieldGroup($model,'period'); ?>
		<?php //echo $form->error($model,'period'); ?>
	</div>

	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Δημιουργία' : 'Ενημέρωση', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->