<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form booster.widgets.TbActiveForm */
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

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php //echo $form->errorSummary($model); ?>




    <div class="row">
        <?php //echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textFieldGroup($model, 'username', array('size' => 25, 'maxlength' => 25)); ?>
        <?php //echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 250)); ?>
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
        <?php //echo $form->labelEx($model, 'aem'); ?>
        <?php echo $form->textFieldGroup($model, 'aem'); ?>
        <?php //echo $form->error($model, 'aem'); ?>
    </div>


    <hr/>

    <div class="row">
        <?php //echo $form->labelEx($model, 'file_cv'); ?>
        <?php echo $form->fileFieldGroup($model, 'file_cv', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'file_cv'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'file_grades'); ?>
        <?php echo $form->fileFieldGroup($model, 'file_grades', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'file_grades'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'file_ika'); ?>
        <?php echo $form->fileFieldGroup($model, 'file_ika', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'file_ika'); ?>
    </div>



    <div class="row">
        <?php //echo $form->labelEx($model, 'department'); ?>
        <?php echo $form->dropDownListGroup($model, 'department', Utils::departmentsList(),array('prompt'=>'- Επιλέξτε τμήμα -')); ?>
        <?php //echo $form->error($model, 'department'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'father_name'); ?>
        <?php echo $form->textFieldGroup($model, 'father_name', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'father_name'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'mother_name'); ?>
        <?php echo $form->textFieldGroup($model, 'mother_name', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'mother_name'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'address'); ?>
        <?php echo $form->textFieldGroup($model, 'address', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'address'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownListGroup($model, 'gender', array(1 => 'male', 0 => 'female')); ?>
        <?php //echo $form->error($model, 'gender'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'identity_number'); ?>
        <?php echo $form->textFieldGroup($model, 'identity_number', array('size' => 15, 'maxlength' => 15)); ?>
        <?php //echo $form->error($model, 'identity_number'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'afm'); ?>
        <?php echo $form->textFieldGroup($model, 'afm', array('size' => 15, 'maxlength' => 15)); ?>
        <?php //echo $form->error($model, 'afm'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'doy'); ?>
        <?php echo $form->textFieldGroup($model, 'doy', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'doy'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'ama_ika'); ?>
        <?php echo $form->textFieldGroup($model, 'ama_ika', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'ama_ika'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'amka'); ?>
        <?php echo $form->textFieldGroup($model, 'amka', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'amka'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'year_in'); ?>
        <?php echo $form->textFieldGroup($model, 'year_in'); ?>
        <?php //echo $form->error($model, 'year_in'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'birth_day'); ?>
        <?php echo $form->textFieldGroup($model, 'birth_day'); ?>
        <?php //echo $form->error($model, 'birth_day'); ?>
    </div>

    <div class="row">
        <?php //echo $form->labelEx($model, 'IBAN'); ?>
        <?php echo $form->textFieldGroup($model, 'IBAN', array('size' => 45, 'maxlength' => 45)); ?>
        <?php //echo $form->error($model, 'IBAN'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNew ? 'Create' : 'Update'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->