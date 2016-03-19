<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */
/* @var $form booster.widgets.TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'request-internship-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of booster.widgets.TbActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    

    <?php //echo $form->errorSummary($model); ?>


    <?php echo 'Εταιρεία: ' . $model->internshipPosition->company->brand; ?>
    <br/>
    <?php echo "Φοιτητής: " . $student->getBothnamesurname(); ?>
    <br/>
    <?php echo 'Ημερομηνία αίτησης: ' . $model->date_request; ?>
    <br/>
    <?php echo "τίτλος Θέσης: " . $model->internshipPosition->title; ?>
    <br/>
    <?php echo "κωδικός θέσης: " . $model->code1; ?><br/>

    <?php //echo 'Σειρά προτίμησης:' . $form->textFieldGroup($model, 'order', $model->order); ?>
    <?php //echo CHtml::hiddenField('RequestInternship', 1); ?>
    <?php
    $ca = RequestInternship::model()->count('student_id=:sid', array(':sid' => $model->student_id));
    $model->order = $ca + 1;
    echo $form->hiddenField($model, 'order');
    echo 'Σειρα προτίμησης: ' . $model->order . '<br/>';
    ?>


    <br>
    
    <div class="row buttons">
        <?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Επιβεβαίωση' : 'Επιβεβαίωση', 'context'=>'primary')
);   ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->