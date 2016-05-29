<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */
/* @var $form booster.widgets.TbActiveForm */

$Companies = Company::GetList();
$Professors=Professor::GetList();
$Students=Student::GetList();

$comp=Company::model()->findByPk(Yii::app()->user->id);

$Departments=Department::GetList();

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

	<?php echo $form->errorSummary($model); ?>

	

	

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
        <?php //echo $form->labelEx($model, 'department'); ?>
        <?php echo $form->dropDownListGroup($model, 'department_id', array('widgetOptions' => array('data' => $Departments, 'htmlOptions'=>array('empty' => '-')))); ?>
        <?php //echo $form->error($model, 'department'); ?>
        </div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textFieldGroup($model,'year',array('widgetOptions' =>array('htmlOptions' => array('disabled' => true)))); ?>
		<?php //echo $form->error($model,'year'); ?>
	</div>
    
        <div class="row">
		<?php //echo $form->labelEx($model,'published'); ?>
		<?php echo $form->checkboxGroup($model,'repeated'); ?>
		<?php //echo $form->error($model,'published'); ?>
	</div>
    
    <?php 
    $flag=true;
    if($form->checkboxGroup($model,'repeated')==1){
        $flag=false;
    }
    ?>
   <script>
    $('#InternshipPosition_repeated').click(function () {
        
        if ($(this).is(':checked')){
            $('#InternshipPosition_r_date_end').removeAttr('disabled');
        }
        else{
            $('#InternshipPosition_r_date_end').attr('disabled', 'disabled');
        }
    });
    </script>
    
    
    
    <div class="row">
        
        <?php echo $form->datePickerGroup(
			$model,
			'r_date_end',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'en',
                                                'format' => 'yyyy-mm-dd'
					),
                                        'htmlOptions' => array(
                                            'disabled' => $flag
                                        )
				),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => 'Η θέση θα δύναται να ανατίθεται πολλαπλές φορές έως την ημερομηνία που θα καθορίσετε.',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
        
    </div>

	


	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Δημιουργία' : 'Ενημέρωση', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->