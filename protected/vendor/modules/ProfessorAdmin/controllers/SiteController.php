<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    
    public $layout = '//layouts/ProfessorAdmin';
    
    
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    
    public function actionViewInternshipPosition($id) {
        $in = InternshipPosition::model()->findByPk($id);
        if (!$in)
            throw new CHttpException(404, "Η σελίδα δεν βρέθηκε");

        $this->render('viewInternshipPosition', array(
            'model' => $in,
        ));
    }
    
    public function actionIndex() {


        $c=new CDbCriteria;
        $c->compare('published',1);
        
        $dataProvider = new CActiveDataProvider('InternshipPosition', array(
            'criteria'=>$c,
            'sort' => array(
                'defaultOrder' => 'created DESC',
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $u = Users::model()->findByPk(Yii::app()->user->id);
                if ($u->type == 2)
                    $this->redirect(array('CompanyAdmin/default/index'));


                if ($u->type == 0) {
                    $this->redirect(array('StudentAdmin/default/index'));
                }

                if ($u->type == 1) {
                    $this->redirect(array('ProfessorAdmin/default/index'));
                }
                
                if ($u->type == 3) {
                    $this->redirect(array('Admin/default/index'));
                }
                
            }
            //$this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    public function actionRegistrationStudent() {
        $model = new Student;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Student'])) {
            $model->attributes = $_POST['Student'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
