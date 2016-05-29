<?php

class RequestInternshipController extends Controller {

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
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete','NewRequest'),
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
        // $in = InternshipPosition::model()->findByAttributes(array('id' => $data->internship_position_id));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new RequestInternship;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['RequestInternship'])) {
            $model->attributes = $_POST['RequestInternship'];
            
            
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionNewRequest($iid, $uid) {
        $s = Student::model()->findByAttributes(array('user_id' => $uid));
        if (!$s)
            throw new CHttpException(404, 'Student not found!');
        ;
        if(($s->counter_requests)>=3)
            throw new CHttpException(404, 'Δεν μπορείτε να κάνετε παραπάνω από τρεις αιτήσεις');

        $ext = RequestInternship::model()->findByAttributes(array('student_id' => $s->id, 'internship_position_id' => $iid));
        $model = new RequestInternship;



        $i = InternshipPosition::model()->findByPk($iid);

        $model->student_id = $s->id;

        $model->internship_position_id = $iid;

        $model->title1 = $i->title;
        $model->code1 = $iid;
        $model->date_request = date('Y-m-d h:i:s');
        
        
        
        



        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        //var_dump($_POST);

        if (isset($_POST['RequestInternship'])) {
            $model->attributes = $_POST['RequestInternship'];
            //var_dump($model->attributes);
            //echo($model->order);
            //var_dump($model->save()); die();
            if ($model->save()) {
                //var_dump($model);
                //die();
                $counter=$model->student->counter_requests;
                $counter=$counter+1;
                $model->student->counter_requests=$counter;
                $model->student->save();
                $model->internshipPosition->status=3;
                $model->internshipPosition->save();
                
                
                $this->redirect(array('view', 'id' => $model->id));
            }
        }


        $this->render('create', array(
            'model' => $model,
            'student' => $s,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        $s = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['RequestInternship'])) {
            $model->attributes = $_POST['RequestInternship'];
            //var_dump($model->attributes); die();
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
            'student' => $s,
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
        $c = new CDbCriteria();
        $student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        //$hasRequest = RequestInternship::model()->findByAttributes(array('student_id' => $student->id, 'internship_position_id' => $data->id));
        $c->compare('student_id', $student->id);
        $dataProvider = new CActiveDataProvider('RequestInternship', array(
            'criteria' => $c,
            'sort' => array(
                'defaultOrder' => '`order`',
            )
        ));


        $OrderIRForm = new OrderIRForm();
        $OrderIRForm->loadIds($student->id);

        if (isset($_POST['OrderIRForm'])) {
          $OrderIRForm->attributes = $_POST['OrderIRForm'];
          $OrderIRForm->save();
        }
        
        
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'orderIRForm' => $OrderIRForm,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new RequestInternship('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['RequestInternship']))
            $model->attributes = $_GET['RequestInternship'];

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
        $model = RequestInternship::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Student $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'RequestInternship-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
