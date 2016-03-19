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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

   
    <div class="row">
        <?php //echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 250)); ?>
        <?php //echo $form->error($model, 'password'); ?>
    </div>
     
       



   
	

	<div class="row buttons">
		<?php echo CHtml::submitButton( 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->