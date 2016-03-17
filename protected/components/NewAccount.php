<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class NewAccount extends CWidget {

    public $conf = ''; //confirmation

    public function run() {// this method is called by CController::endWidget()
        $model = new CompanyForm;


        if (isset($_POST['CompanyForm'])) {
            $model->attributes = $_POST['CompanyForm'];
            $model->activated = 0;
            if ($model->validate()) {
                $c = new Users();
                $company = new Company();

                $c->attributes = $model->attributes;
                $c->type = 2; //company type
                $c->activated = 0; //den einai energos akoma

                $company->attributes = $model->attributes;

                
                
                $c1 = $c->save(false);

                $c2 = false;

                if ($c1) {
                    $company->user_id = $c->id;
                    $c2 = $company->save();
                }

                //var_dump(CHtml::errorSummary($c));
                //var_dump(CHtml::errorSummary($company));
                //die();
                if ($c1 && $c2) {

                    Yii::app()->user->setFlash('register', Yii::t('def', 'Your registration almost completed!<br/>Συντομα θα σας ενημερώσουμε!')); //Η εγγραφή σας πραγματοποιήθηκε!<br/>Για να ολοκληρώσετε την διαδικασία εγγραφής σας κάντε κλικ στο σύνδεσμο του e-mail που σας έχουμε αποστείλει.
                    
                  

                    //$this->redirect(array('view', 'id' => $company->id));
                } else {
                    $model->addErrors($c->getErrors());
                    $model->addErrors($company->getErrors());
                }
            }
        }


        $this->render('_formCompany', array('model' => $model));
        // echo CHtml::link('Link Text',array('site/NewAccount')); 
    }

}

?>
