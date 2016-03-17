<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of YakmLogin
 *
 * @author konapaz
 */
class ForgottenAccount extends CWidget {

    public $conf = ''; //confirmation

    public function run() {// this method is called by CController::endWidget()
        $fuser = new ForgottenAccountForm;
        $user_found = new Users;


        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($fuser);
            Yii::app()->end();
        }


        // collect user input data
        if (isset($_POST['ForgottenAccountForm'])) {
            $fuser->attributes = $_POST['ForgottenAccountForm'];
            // validate user input and redirect to the previous page if valid
            //var_dump($fuser->validate()); die();
            if ($fuser->validate()) {

                $user_found = Users::model()->find('email=:email', array(':email' => $fuser->email));


                if ($user_found) {

                    if (!$user_found->activated) {
                        $fuser->addError('email', 'Your account is inactivated! please contact with us to solve this problem');
                        $this->render('forgottenAccount', array('model' => $fuser));
                        return; //epeidi einai widget
                    }

                    $user_found->activated = 2; //pros allagi kodikou
                    $user_found->status_data = myUtils::genCrypt(); //hash gia epikirwsi

                    $user_found->save(false);
                } else {
                    $user_found = new Users;
                }




                $emailData = Yii::t('def', 'You sent a request to reset your account password in ') . Yii::app()->name . "\r\n";
                $emailData .= 'urername: ' . $user_found->username . "\r\n";
                $emailData .= 'click the below link to reset your password:' . "\r\n";
                $emailData .= $this->controller->createAbsoluteUrl('forgottenAccount', array('confirm' => $user_found->status_data)) . "\r\n";

                if ($user_found && $user_found->email) {
                    $res = myUtils::sendEmail($user_found->username, 'Forgoteen account', $emailData, $user_found->email);
                } else
                    $res = true; //trick!

                if ($res) {//Η αίτηση σας είναι σε εξέλιξη.<br/>Παρακαλώ επιβεβαιώστε την αλλαγή του κωδικού του λογαριασμού σας απο τον σύνδεσμο που σας έχει αποσταλεί με e-mail
                    Yii::app()->user->setFlash('forgotten', Yii::t('def', 'Your request is in progress<br/>Please check your email. We sent a link to reset your password.'));
                } else { //Προέκυψε σφάλμα κατα την αποστολή e-mail.<br/>Παρακαλώ επικοινωνήστε με τον διαχειριστή της ιστοσελίδας
                    Yii::app()->user->setFlash('error', Yii::t('def', 'Error occurs during sending email.<br/>Please contact with administrator'));
                }
            } else {
                $this->render('forgottenAccount', array('model' => $fuser,));
                return;
            }


            //$this->controller->redirect(Yii::app()->user->returnUrl);
        } else if ($this->conf) {
            if (!Users::model()->exists('status_data=:hash1 AND activated=2', array(':hash1' => $this->conf))) {
                throw new CHttpException(404, 'The requested page is invalid.');
            } else {
                $user_found = Users::model()->find('status_data=:hash1 AND activated=2', array(':hash1' => $this->conf));
                $user_found->status_data = null;
                $user_found->activated = 4; //to auto login, after of that status going to be null
                //$user_found->enabled = 1; //energopoihse ton (se periptwsi pou kati pige strava kata tin egrafi tou) - an to status den einai 2 p.x. blockarismenos=3 tote den tha ftasei edw o kodikas
                $user_found->save(false);


                $identity = new UserIdentity($user_found->username, ''); //me keno kodiko
                $identity->AutoAuthenticate($user_found->id);
                $res = Yii::app()->user->login($identity);
                //$this->controller->redirect(array('user/update', 'id' => $user_found->id)); //maybe todo, restricted to site/login ?
                //Yii::app()->end();

                $this->controller->redirect(array('CompanyAdmin/Default/newPassword'));
            }
        }


        $this->render('forgottenAccount', array('model' => $fuser));
    }

}

?>
