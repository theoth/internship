<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form booster.widgets.TbActiveForm */

$department=Department::model()->findByPk($model->department_id);

$now=date('Y-m-d');
if($now<$department->req_date_end){
?>



<div class="form">

    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'student-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of booster.widgets.TbActiveForm for details on this.
        'enableClientValidation' => true,
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        ),
    ));
    ?>



    <?php echo $form->errorSummary($model); ?>

    <br>
    <br>




    

    <div class="row">
        <?php //echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textFieldGroup($model, 'passed_courses', array('size' => 25, 'maxlength' => 2)); ?>
        <?php //echo $form->error($model, 'last_name'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textFieldGroup($model, 'gen_average', array('size' => 25, 'maxlength' => 3)); ?>
        <?php //echo $form->error($model, 'first_name'); ?>
    </div>
    
    <div class="row">
        <?php //echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textFieldGroup($model, 'win_el_average', array('size' => 25, 'maxlength' => 3)); ?>
        <?php //echo $form->error($model, 'first_name'); ?>
    </div>
    
    <div class="row">
        <?php //echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textFieldGroup($model, 'sum_el_average', array('size' => 25, 'maxlength' => 3)); ?>
        <?php //echo $form->error($model, 'first_name'); ?>
    </div>
    
    <div class="row">
        <?php //echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textFieldGroup($model, 'passed_win_el_courses', array('size' => 25, 'maxlength' => 3)); ?>
        <?php //echo $form->error($model, 'first_name'); ?>
    </div>
    
    <div class="row">
        <?php //echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textFieldGroup($model, 'passed_sum_el_courses', array('size' => 25, 'maxlength' => 3)); ?>
        <?php //echo $form->error($model, 'first_name'); ?>
    </div>


    <div class="row buttons">
<?php
$this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => $model->isNew ? 'Δημιουργία' : 'Ενημέρωση', 'context' => 'primary')
);
?>
    </div>

<?php $this->endWidget(); 
?>

</div><!-- form -->

<?php
}
else {
    echo'Δεν γίνετε να αλλάξετε τα στοιχεία βαθμολογίας σας μετά το πέρας της υποβολής αιτήσεων.';
    
}
?>