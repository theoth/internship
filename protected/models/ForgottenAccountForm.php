<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addCardForm
 *
 * @author konapaz
 */
class ForgottenAccountForm extends CFormModel {

    public $email;
    public $verifyCode;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('email', 'email'),
            array('email', 'required'),
            //array('verifyCode', 'captcha', 'captchaAction' => 'confirmValitator' , 'allowEmpty' => !CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'email' => Yii::t('def', 'your e-mail'),
            'verifyCode' => Yii::t('def', 'Verify code'),
        );
    }

}

?>


