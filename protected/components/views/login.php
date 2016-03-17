<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>
<div id="block-in-1">
    <h1>Login</h1>

    <p><?php //echo Yii::t('eshop','Please fill out the following form with your login credentials') . ':'  ?></p>

    <?php if (Yii::app()->user->hasFlash('is-already-login')) {
    ?>
        <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('is-already-login'); ?>
    </div>
    <?php } ?>

    <div class="form">
        <?php
        $form = $this->controller->beginWidget('CActiveForm', array(
                    'id' => 'login-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
        ?>

<?php //<p class="note">Fields with <span class="required">*</span> are required.</p>  ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'username'); ?>
<?php echo $form->textField($model, 'username'); ?>
<?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password'); ?>
<?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="row rememberMe">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
<?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
            </div>
<?php //Ξέχασα το Password ή το Username μου  ?>
            <div id='forget-acount'><?php echo CHtml::link(Yii::t('def', "Forgot my password"), array('/site/forgottenAccount')); ?></div>

            <?php if ($model->scenario == 'withCaptcha' && CCaptcha::checkRequirements()): ?>
            <div class="row verify-block">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>
            <div>
<?php $this->widget('CCaptcha', array('captchaAction' => 'confirmValitator')); ?>
            <?php echo $form->textField($model, 'verifyCode'); ?>
                </div>
        <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
<?php endif; ?>

                <div class="row buttons submit">
<?php echo CHtml::submitButton(Yii::t('def', 'Login')); ?>
            </div>


<?php $this->controller->endWidget(); ?>

            </div><!-- form -->

            <?php //echo CHtml::link('Link Text',array('site/NewAccount'));  ?>

<?php /* <div id='new-acount'><?php echo CHtml::link(Yii::t('def',"Register"),array('/site/newAccount')); ?></div> */ ?>
</div>
