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

	<br/>
    <br/>
    <br/>    
    <?php
        
        
        $month = date('n', strtotime($model->date_start));
        
        $month_current=date('n');
        $year_current=date('y');
        $year = date('y', strtotime($model->date_start));
        
        $flag1=true;
        $flag2=true;
        $flag3=true;
        
        if($year_current==$year+1){
            $month_current=$month_current+12;
        }
        
        if($month_current>=$month+1 && $year_current==$year){
            $flag1 = false;
        $body = 'άνοιξε ο πρώτος μήνας,πρέπει να υποβάλλετε τη φόρμα σας για τον φοιτητή.';
        $this->SendMail($model->company_id, $body);
        }
        if ($month_current>=$month+2 && $year_current==$year){
            $flag2=false;
        $body = 'άνοιξε ο δεύτερος μήνας,πρέπει να υποβάλλετε τη φόρμα σας για τον φοιτητή.';
        $this->SendMail($model->company_id, $body);
        }
        if ($month_current>=$month+3 && $year_current==$year){
            $flag3=false;
        $body = 'άνοιξε ο τρίτος μήνας,πρέπει να υποβάλλετε την τελική φόρμα σας για τον φοιτητή.';
        $this->SendMail($model->company_id, $body);
        }
        
        
        
        ?>

	
        

	

	<div class="row">
		<?php //echo $form->labelEx($model,'co_absence1'); ?>
		<?php echo $form->textFieldGroup($model,'co_absence1',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag1)))); ?>
		<?php //echo $form->error($model,'co_absence1'); ?>
	</div>
    
    <div class="row">
		<?php //echo $form->labelEx($model,'co_text1'); ?>
		<?php echo $form->textAreaGroup($model,'co_text1',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag1)))); ?>
		<?php //echo $form->error($model,'co_text1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_notes1'); ?>
		<?php echo $form->textAreaGroup($model,'co_notes1',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag1)))); ?>
		<?php //echo $form->error($model,'co_notes1'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_absence2'); ?>
		<?php echo $form->textFieldGroup($model,'co_absence2',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag2)))); ?>
		<?php //echo $form->error($model,'co_absence2'); ?>
	</div>
    
    
	<div class="row">
		<?php //echo $form->labelEx($model,'co_text2'); ?>
		<?php echo $form->textAreaGroup($model,'co_text2',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag2)))); ?>
		<?php //echo $form->error($model,'co_text2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_notes2'); ?>
		<?php echo $form->textAreaGroup($model,'co_notes2',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag2)))); ?>
		<?php //echo $form->error($model,'co_notes2'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_absence3'); ?>
		<?php echo $form->textFieldGroup($model,'co_absence3',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'co_absence3'); ?>
	</div>

	


	<div class="row">
		<?php //echo $form->labelEx($model,'co_text3'); ?>
		<?php echo $form->textAreaGroup($model,'co_text3',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'co_text3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_notes3'); ?>
		<?php echo $form->textAreaGroup($model,'co_notes3',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'co_notes3'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_final_text'); ?>
		<?php echo $form->textAreaGroup($model,'co_final_text',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'co_final_text'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'co_final_notes'); ?>
		<?php echo $form->textAreaGroup($model,'co_final_notes',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'co_final_notes'); ?>
	</div>


	<div class="row buttons">
		<?php $this->widget(         'booster.widgets.TbButton', array('buttonType' => 'submit', 'label'=> $model->isNewRecord ? 'Create' : 'Υποβολή', 'context'=>'primary') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->