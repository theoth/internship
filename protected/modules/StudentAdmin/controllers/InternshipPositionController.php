<?php

class InternshipPositionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/StudentAdmin';

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
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete', 'myindex'),
                'expression' => array('Controller', 'isUserStudent'),
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

        $model = new InternshipPosition('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['InternshipPosition']))
            $model->attributes = $_GET['InternshipPosition'];

        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new InternshipPosition;

        $department = Department::model()->findByAttributes(array('user_id' => Yii::app()->user->id));

        if ($department != NULL) {
            $model->department_id = $department->id;
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['InternshipPosition'])) {
            $model->attributes = $_POST['InternshipPosition'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        $st = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        if ($model->student_id != $st->id) {
            throw new CHttpException(404, 'You are not authorized to perform this action.');
        }


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

        $student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));

        $did = $student->department_id;
        $criteria = new CDbCriteria();
        $criteria->addCondition('student_id IS NULL');
        $criteria->addCondition('published=1');
        $criteria->addCondition('department_id=:did');
        $criteria->params = (array(':did' => $did));


        $dataProvider = new CActiveDataProvider('InternshipPosition', array('criteria' => $criteria));


        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'student' => $student,
        ));
    }

    public function actionMyindex($month = NULL) {
        $criteria = new CDbCriteria();
        //$criteria->addCondition('student_id IS NULL');
        //$criteria->addCondition('published=1');
        $student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $criteria->compare('student_id', $student->id);
        $dataProvider = new CActiveDataProvider('InternshipPosition', array('criteria' => $criteria));
        //$model=$this->loadModel($student->internshipposition->id);
        //echo ($student->id);
        $model = InternshipPosition::model()->findByAttributes(array('student_id' => $student->id));
        ////var_dump($in);
        //echo ($model->title);
        //die();
        //if (empty($model))
        //die();

        $this->render('myindex', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
            'student' => $student,
            'month' => $month,
        ));
    }

    public function SendMail($sid, $body) {
        $student = Student::model()->findByPk($cid);
        $name = '=?UTF-8?B?' . base64_encode('Πλατφόρμα πρακτικής άσκησης') . '?=';
        $subject = '=?UTF-8?B?' . base64_encode('Υποβολή στοιχείων') . '?=';
        $headers = "From: $name <{'e-position'}>\r\n" .
                "Reply-To: {'e-position@gmail.com'}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";
        $email = $student->users->email;

        // if (!YII_DEBUG)
        mail($email, $subject, $body, $headers);
        /* else {
          var_dump($name );
          var_dump($subject);
          var_dump($headers);
          var_dump($body);
          } */
        //Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
        //$this->refresh();      
    }

    /**
     * Manages all models.
     */
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

        $student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        $did = $student->department_id;
        if ($model->department_id != $did) {
            throw new CHttpException(404, 'You are not authorized to perform this action.');
        } else {
            return $model;
        }
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

}
