<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        // collect user input data
        if (isset($_POST['Users'])) {
            $nuser->attributes = $_POST['Users'];
            // validate user input and redirect to the previous page if valid
            if ($nuser->validate()) {
                $nuser->activated = 0; //den einai energos akoma
                $nuser->status = 1; //epikirwsi apo email kata eggrafi
                $nuser->status_data = myUtils::genCrypt(); //hash gia epikirwsi
                $nuser->save(false);




                //send email fot change the account - TODO na ginei me email kai oxi emfanisi sto site!!!
                $emailData = Yii::t('def', 'You sent a request to register in ') . Yii::app()->name . "\r\n";
                $emailData .= 'urername: ' . $nuser->username . "\r\n";
                $emailData .= 'click the below link to activate your account:' . "\r\n";
                $emailData .= $this->controller->createAbsoluteUrl('newAccount', array('confirm' => $nuser->status_data)) . "\r\n";

                //sendEmail($name, $subject, $body, $receiverEmail)
                $res = myUtils::sendEmail($nuser->username, 'Registration', $emailData, $nuser->email);


                if ($res) {
                    Yii::app()->user->setFlash('registered', Yii::t('def', 'Your registration almost completed!<br/>please click on link that we sent to your email')); //Η εγγραφή σας πραγματοποιήθηκε!<br/>Για να ολοκληρώσετε την διαδικασία εγγραφής σας κάντε κλικ στο σύνδεσμο του e-mail που σας έχουμε αποστείλει.
                } else {
                    Yii::app()->user->setFlash('error', Yii::t('def', 'An error occured while sending e-mail.<br/>Please contact with us')); //'Προέκυψε σφάλμα κατα την αποστολή e-mail.<br/>Παρακαλώ επικοινωνήστε με τον διαχειριστή της ιστοσελίδας'
                }
            }
            //$this->controller->redirect(Yii::app()->user->returnUrl);
        } else if ($this->conf) {
            if (!Users::model()->exists('status_data=:hash1 AND status=1', array(':hash1' => $this->conf))) {
                throw new CHttpException(404, 'The requested page is invalid.');
            } else {
                $toConfUser = Users::model()->find('status_data=:hash1 AND status=1', array(':hash1' => $this->conf));


                if ($toConfUser) {
                    $toConfUser->status_data = null;
                    $toConfUser->status = null;
                    $toConfUser->activated = 1; //energopoihse ton
                    $toConfUser->type = 2;
                    $toConfUser->save(false);
                }
                $this->controller->redirect(array('login')); //maybe todo, restricted to site/login ?
                //Yii::app()->end();
            }
        }
        
        
        
         if ($this->conf) {
            if (!Users::model()->exists('status_data=:hash1 AND status=1', array(':hash1' => $this->conf))) {
                throw new CHttpException(404, 'The requested page is invalid.');
            } else {
                $toConfUser = Users::model()->find('status_data=:hash1 AND status=1', array(':hash1' => $this->conf));

                if ($toConfUser) {
                    $toConfUser->status_data = null;
                    $toConfUser->status = null;
                    $toConfUser->activated = 1; //energopoihse ton
                    $toConfUser->type = 2;
                    $toConfUser->save(false);
                }
                $this->controller->redirect(array('login')); //maybe todo, restricted to site/login ?
                //Yii::app()->end();
            }
        }
        
        
        
        
                    //send email fot change the account - TODO na ginei me email kai oxi emfanisi sto site!!!
                    $emailData = Yii::t('def', 'You sent a request to register in ') . Yii::app()->name . "\r\n";
                    $emailData .= 'urername: ' . $c->username . "\r\n";
                    $emailData .= 'We are proceed your request and we inform you about the activation of your account as soon as possible.' . "\r\n";
                    //$emailData .= 'click the below link to activate your account:' . "\r\n";
                    //$emailData .= $this->controller->createAbsoluteUrl('newAccount', array('confirm' => $nuser->status_data)) . "\r\n";
                    //sendEmail($name, $subject, $body, $receiverEmail)
                    $res = myUtils::sendEmail($c->username, 'Registration', $emailData, $nuser->email);

                    
                      if ($res) {
                        Yii::app()->user->setFlash('registered', Yii::t('def', 'Your registration almost completed!<br/>please click on link that we sent to your email')); //Η εγγραφή σας πραγματοποιήθηκε!<br/>Για να ολοκληρώσετε την διαδικασία εγγραφής σας κάντε κλικ στο σύνδεσμο του e-mail που σας έχουμε αποστείλει.
                    } else {
                        Yii::app()->user->setFlash('error', Yii::t('def', 'An error occured while sending e-mail.<br/>Please contact with us')); //'Προέκυψε σφάλμα κατα την αποστολή e-mail.<br/>Παρακαλώ επικοινωνήστε με τον διαχειριστή της ιστοσελίδας'
                    }