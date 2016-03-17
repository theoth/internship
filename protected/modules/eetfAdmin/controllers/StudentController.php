<?php

class StudentController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2Admin';

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
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
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

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new StudentForm;
        $model->isNew = true;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['StudentForm'])) {

            $model->attributes = $_POST['StudentForm'];
            if ($model->validate()) {
                $u = new Users();
                $student = new Student();


                $u->attributes = $model->attributes;
                $u->type = 0; //student dld
                $student->attributes = $model->attributes;
                $a1 = $u->save();
                
                $a2 = false;
                if ($a1) {
                    $student->user_id = $u->id;
                    //var_dump($student);
                    //die();
                    $a2 = $student->save();
                }
                //var_dump(CHtml::errorSummary($u));
                //var_dump(CHtml::errorSummary($student));

                
                
                if ($a1 && $a2)
                    $this->redirect(array('view', 'id' => $student->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $student = $this->loadModel($id);
        $model = new StudentForm();
        $model->attributes = $student->attributes;
        $model->attributes = $student->user->attributes;
        $model->isNew = false;
        $model->student_id = $id;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['StudentForm'])) {
            if ($model->validate()) {
                $model->attributes = $_POST['StudentForm'];

                $student->attributes = $model->attributes;
                $student->user->attributes = $model->attributes;

                $student->save();
                $student->user->save();
                $this->redirect(array('view', 'id' => $student->id));
            }
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
        $dataProvider = new CActiveDataProvider('Student');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
        //this->layout;
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Student('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Student']))
            $model->attributes = $_GET['Student'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Student the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Student::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Student $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'student-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
