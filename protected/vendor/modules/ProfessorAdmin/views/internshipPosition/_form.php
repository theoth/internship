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
        
)); 
//$student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
?>

	

	<br/>
        
    <b> <?php echo "Η υποβολή θα ανοίξει:" . $model->date_end; ?></b>
    <br/>
    <br/>
    <br/>
    
    
    <?php
        
        
        $month = date('n', strtotime($model->date_start));
        
        $month_current=date('n');
        $year_current=date('y');
        $year = date('y', strtotime($model->date_start));
        
        $flag3=true;
        
        
        if ($month_current>=$month+3 && $year_current==$year){
            $flag3=false;
            $body='Εκπληρώθηκε η Θέση με κωδικό ' . $model->id . 'Πρέπει να υποβάλλετε τον βαθμό και την τελική σας έκθεση.';
            $this->SendMail($model->professor_id,$body);
            
        }
        
        
        
        ?>
    
    
    

	<div class="row">
		<?php //echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textFieldGroup($model,'grade',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'grade'); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->labelEx($model,'prof_final_text'); ?>
		<?php echo $form->textAreaGroup($model,'prof_final_text',array('widgetOptions' => array('htmlOptions' => array('disabled' => $flag3)))); ?>
		<?php //echo $form->error($model,'prof_final_text'); ?>
	</div>

	<div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Υποβολή', 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->