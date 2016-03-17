<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'internship-position-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>
    <?php
    $this->menu=array(
	
	array('label'=>'Πίσω', 'url'=>array('requestinternship/view&id=' . $rid)),
);
?>
    

    
    <?php 
   
    ?>


    <?php echo 'Εταιρεία: ' . $model->company->brand; ?>
    <br/>
    
    <?php echo "τίτλος Θέσης: " . $model->title; ?>
    <br/>
    <?php echo "κωδικός θέσης: " . $model->id; ?><br/>

    <?php echo "Περιγραφή θέσης: " . $model->description; ?><br/>

    
    <?php echo "Φοιτητής: " . $student->getBothnamesurname(); ?><br/>


   <?php echo CHtml::hiddenField('confirm',1); ?> 
    
    <br>
    

    <div class="row buttons">
        <?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Επιβεβαίωση' : 'Επιβεβαίωση', 'context'=>'primary')
);   ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->