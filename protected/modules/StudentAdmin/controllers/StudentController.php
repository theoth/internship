<?php

class StudentController extends Controller {

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
                'actions' => array( 'submitCourses','view', ),
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
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionSubmitCourses($iid,$uid) {
        
        
        $student=Student::model()->findByAttributes(array('user_id'=>$uid));
        //var_dump($student);die();
        $student = $this->loadModel($student->id);
        $model = new StudentForm();
        $model->attributes = $student->attributes;
        $model->attributes = $student->user->attributes;
        $model->isNew = false;
        $model->student_id = $iid;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['StudentForm'])) {
            
           // var_dump($_POST);
         //var_dump($_FILES); 
           $model->attributes = $_POST['StudentForm'];
           
            //var_dump($student->attributes);
           
            //var_dump($model->attributes);
             
            if ($model->validate()) {
                
                //$_FILES['Student'] = $_FILES['StudentForm'];
                $student->attributes = $model->attributes;
                
                $student->submit_courses=1;
                if($student->save()){
                
                if($iid!=NULL){
                    $this->redirect(array('RequestInternship/NewRequest', 'iid' => $iid, 'uid' => $uid));
                }
                $this->redirect(array('view', 'id' => $student->id));
            }
            
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

        $user=  Users::model()->findByPk(Yii::app()->user->id);
        $department=Department::model()->findByAttributes(array('type_admin'=>$user->type));
        
        if ($department != NULL) {
            
            $did = $department->id;
            $dataProvider = new CActiveDataProvider('Student', array(
                'criteria' => array(
                    'condition' => 'department_id=:did',
                    'params' => array(':did' => $did)
                )
                    )
            );
            //var_dump($dataProvider->data);die();
            
        } else {
            $dataProvider = new CActiveDataProvider('Student');
        }
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
       
        
        
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

        $user=  Users::model()->findByPk(Yii::app()->user->id);
        $department=Department::model()->findByAttributes(array('type_admin'=>$user->type));
        if ($department != NULL) {
            $did = $department->id;
            if ($model->department_id != $did) {
                throw new CHttpException(404, 'You are not authorized to perform this action.');
            } else {
                return $model;
            }
        } else {

            return $model;
        }
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
