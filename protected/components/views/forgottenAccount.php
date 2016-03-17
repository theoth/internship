<?php
/* @var $this UserController */
/* @var $model YakmUser */
/* @var $form CActiveForm */
?>
<div id="block-in-1">
<h2><?php echo Yii::t('def', 'User Password Recovery'); //Ανάκτηση χρήστη / κωδικού ?></h2>

<?php if (Yii::app()->user->hasFlash('forgotten')) { ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('forgotten'); ?>
    </div>

<?php } else if (Yii::app()->user->hasFlash('error')) { ?>

    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>

<?php } else { ?>

    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'yakm-user-form',
            'enableAjaxValidation' => false, //TODO an einai true stelnei 3 fores email!
                ));
        ?>



        <?php echo $form->errorSummary($model); ?>



        <div class="row">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128,)); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

     


        <div class="row buttons submit">
            <?php echo CHtml::submitButton(Yii::t('def','Recover my password'));//Ανάκτηση του κωδικού μου ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->


<?php } //endif; ?>
</div>
