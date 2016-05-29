<?php

class InternshipPositionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/Companyadmin';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete','history'),
                'expression' => array('Controller', 'isUserCompany'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
            
            
            
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    
     public function SendMail($sid,$body)
    {   
                $student=Student::model()->findByPk($sid);
                $name = '=?UTF-8?B?' . base64_encode('Πλατφόρμα πρακτικής άσκησης') . '?=';
                $subject = '=?UTF-8?B?' . base64_encode('Υπενθύμιση υποβολής στοιχείων') . '?=';
                $headers = "From: $name <{'admin@admin.gr'}>\r\n" .
                        "Reply-To: {'admin@admin.gr'}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";
                $email=$student->users->email;
                
                if (!YII_DEBUG)
                    mail($email, $subject, $body, $headers);
                else {
                    var_dump($name );
                    var_dump($subject);
                    var_dump($headers);
                    var_dump($body);
                }
                //Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                //$this->refresh();      
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $company = Company::model()->findByAttributes(array('user_id' => Yii::app()->user->id));

        $model = new InternshipPosition;

        $model->created = date('Y-m-d h:i:s');
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        $model->company_id = $company->id;
        $model->year = date('Y');

        if (isset($_POST['InternshipPosition'])) {
            $model->attributes = $_POST['InternshipPosition'];
            $model->published = 0;
            $modelQuSt=new QuestionnaireStudent;
            $modelQuSt->save();
            //var_dump($modelQuSt);
            $model->questionnaire_student_id=$modelQuSt->id;
            $modelQuPr=new QuestionnaireProfessor;
            $modelQuPr->save();
            $model->questionnaire_professor_id=$modelQuPr->id;
            $modelQuCo=new QuestionnaireCompany;
            $modelQuCo->save();
            $model->questionnaire_company_id=$modelQuCo->id;
            
            //var_dump($_POST['InternshipPosition']);die();
            
        if ($model->save()) {
                
                
                
                $this->redirect(array('view', 'id' => $model->id));
        } 
        }
        $this->render('create', array(
            'model' => $model,
        ));
    }
    
    
    public function end_internship($id) {
        $model = $this->loadModel($id);
        $model->status = 2;
        $model->save();
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        
        $co = Company::model()->findByAttributes(array('user_id'=>Yii::app()->user->id));
        if ($model->company_id != $co->id) {
            throw new CHttpException(404,'You are not authorized to perform this action.');
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        
        if (isset($_POST['InternshipPosition'])) {
            $model->attributes = $_POST['InternshipPosition'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        {
                //$student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
                $professor = Professor::model()->findByAttributes(array('user_id' => Yii::app()->user->id));

                $c = new CDbCriteria();
                $company = Company::model()->findByAttributes(array('user_id' => Yii::app()->user->id));    
                $c->compare('company_id',$company->id);
		$dataProvider=new CActiveDataProvider('InternshipPosition',array(
                    'criteria' => $c,
                
                    ));
		
	
        
        $this->render('index',array(
                        
			'dataProvider'=>$dataProvider,));
        }

    /**
     * Manages all models.
     */
    }
    public function actionAdmin() {
        $model = new InternshipPosition('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['InternshipPosition']))
            $model->attributes = $_GET['InternshipPosition'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return InternshipPosition the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = InternshipPosition::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param InternshipPosition $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'internship-position-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    public function actionHistory() {
        $model = new InternshipPosition('searchCompletedCompany');
        
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['InternshipPosition']))
            $model->attributes = $_GET['InternshipPosition'];

        $this->render('history', array(
            'model' => $model,
        ));
    }

}
