<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form booster.widgets.TbActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'company-form',
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
        <?php //echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textFieldGroup($model, 'username', array('size' => 25, 'maxlength' => 25)); ?>
        <?php //echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordFieldGroup($model, 'password', array('size' => 60, 'maxlength' => 250)); ?>
        <?php //echo $form->error($model, 'password'); ?>
    </div>
   
        <div class="row">
        <?php //echo $form->labelEx($model, 'activated'); ?>
        <?php echo $form->checkboxGroup($model, 'activated'); ?>
        <?php //echo $form->error($model, 'activated'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textFieldGroup($model, 'last_name', array('size' => 25, 'maxlength' => 25)); ?>
        <?php //echo $form->error($model, 'last_name'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textFieldGroup($model, 'first_name', array('size' => 25, 'maxlength' => 25)); ?>
        <?php //echo $form->error($model, 'first_name'); ?>
    </div>



    <div class="row">
        <?php //echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textFieldGroup($model, 'email', array('size' => 30, 'maxlength' => 30)); ?>
        <?php //echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'telephone'); ?>
        <?php echo $form->textFieldGroup($model, 'telephone', array('size' => 10, 'maxlength' => 10)); ?>
        <?php //echo $form->error($model, 'telephone'); ?>
    </div>
        
	<div class="row">
		<?php //echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textFieldGroup($model,'brand',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textAreaGroup($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'description'); ?>
	</div>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'afm'); ?>
		<?php echo $form->textFieldGroup($model,'afm',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'afm'); ?>
	</div>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'doy'); ?>
		<?php echo $form->textFieldGroup($model,'doy',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'doy'); ?>
	</div>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'tk'); ?>
		<?php echo $form->textFieldGroup($model,'tk',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'tk'); ?>
	</div>
        
        <div class="row">
		<?php //echo $form->labelEx($model,'identity_number'); ?>
		<?php echo $form->textFieldGroup($model,'identity_number',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'identity_number'); ?>
	</div>

	

	<div class="row buttons">
		<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNew ? 'Δημιουργία' : 'Ενημέρωση', 'context'=>'primary')
);   ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->