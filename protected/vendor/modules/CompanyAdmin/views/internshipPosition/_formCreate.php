<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */
/* @var $form booster.widgets.TbActiveForm */

$Companies = Company::GetList();
$Professors=Professor::GetList();
$Students=Student::GetList();

$comp=Company::model()->findByPk(Yii::app()->user->id);

//$comp_name=$comp->company->brand;

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

    <br>
    <br>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
        
                <?php //echo $form->labelEx($model,'period'); ?>
		<?php echo $form->dropDownListGroup($model,'period',array('widgetOptions' => array('data' => array( InternshipPosition::periodList())))); ?>
		<?php //echo $form->error($model,'period'); ?>
            
        
    </div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownListGroup($model,'company_id',array('widgetOptions' => array('data' => array( $Companies,array('empty'=>'-')),'htmlOptions'=>array('disabled'=>true)))); ?>
		<?php //echo $form->error($model,'company_id'); ?>
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
		<?php //echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textFieldGroup($model,'year',array('widgetOptions' =>array('htmlOptions' => array('disabled' => true)))); ?>
		<?php //echo $form->error($model,'year'); ?>
	</div>

	


	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Δημιουργία' : 'Ενημέρωση', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->