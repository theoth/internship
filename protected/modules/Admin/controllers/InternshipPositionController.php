<?php

class InternshipPositionController extends Controller {

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
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('statisticsForm', 'create','statistics', 'studentBook','ProfessorBook','CompanyBook', 'update', 'index', 'view', 'admin', 'delete', 'award', 'history', 'viewNewPositions', 'publishPosition', 'detailsNewPosition', 'printOutForm', 'printOutGrid'),
                'expression' => array('Controller', 'isUserAdmin'),
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
    //$month=0;
    public function actionView($id, $month = NULL) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'month' => $month,
        ));
    }
    
    
    public function actionStatisticsForm() {
        //echo($from.$to);die();
       
        $model=new StatisticsForm();
        
        echo CHtml::errorSummary($model);
        
        if (isset($_POST['StatisticsForm'])) {
            
            $model->attributes = $_POST['StatisticsForm'];
            $this->redirect(array('statistics', 'from' => $model->from, 'to' => $model->to));
           
        }
        
         $this->render('_statisticsForm', array(
            'model' => $model,
        ));
       
        
    }
    
    
    
    public function actionStatistics($from,$to) {
        //echo($from.$to);die();
       
        $this->render('statistics', array(
            'from'=>$from,
            'to'=> $to,
            //'model'=>$model,
        ));
    }

    public function actionStudentBook($id) {

        $model = $this->loadModel($id);

        $model_quest = QuestionnaireStudent::model()->findByPk($model->questionnaire_student_id);
//$this->redirect(array('requestInternship/viewRequests'));

        $this->layout = '//layouts/mainAdminOnlyContent';
        $this->render('StudentBook', array(
            'model' => $this->loadModel($id),
            'model_quest' => $model_quest,
            'htmlOptions'=>array('target'=>'_blank'),
            
        ));
    }

    public function actionProfessorBook($id) {
        $model = $this->loadModel($id);

        $model_quest = QuestionnaireProfessor::model()->findByPk($model->questionnaire_professor_id);
//$this->redirect(array('requestInternship/viewRequests'));

        $this->layout = '//layouts/mainAdminOnlyContent';
        $this->render('ProfessorBook', array(
            'model' => $this->loadModel($id),
            'model_quest' => $model_quest,
            
        ));
    }

    public function actionCompanyBook($id) {
        $model = $this->loadModel($id);

        $model_quest = QuestionnaireCompany::model()->findByPk($model->questionnaire_company_id);
//$this->redirect(array('requestInternship/viewRequests'));

        $this->layout = '//layouts/mainAdminOnlyContent';
        $this->render('CompanyBook', array(
            'model' => $this->loadModel($id),
            'model_quest' => $model_quest,
            
        ));
    }

    public function actionDetailsNewPosition($id) {
        $this->render('detailsNewPosition', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionViewNewPositions() {
        $dataProvider = new CActiveDataProvider('InternshipPosition'
                , array(
            'criteria' => array(
                'condition' =>
                'published=0',
            )
                )
        );
        $this->render('viewNewPositions', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionPublishPosition($iid) {
        $in = InternshipPosition::model()->findByPk($iid);

        $in->published = 1;

        if ($in->save()) {

            $this->redirect(array('viewNewPositions'));
        }
    }

    public function actionPrintOutForm() {
        $model = new PrintOutForm;

        if (isset($_POST['PrintOutForm'])) {
            $model->attributes = $_POST['PrintOutForm'];
            $this->redirect(array('printOutGrid', 'from' => $model->from, 'to' => $model->to));
        }

        $this->render('printOut', array(
            'model' => $model,
        ));
    }

    public function actionPrintoutgrid($from, $to) {
        $model = new InternshipPosition('search');
        $model->unsetAttributes();  // clear any default values


        $this->layout = '//layouts/mainAdminOnlyContent';
        $this->render('printOutGrid', array(
            'model' => $model,
            'from' => $from,
            'to' => $to,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new InternshipPosition;
        $user = Users::model()->findByPk(Yii::app()->user->id);
        $department = Department::model()->findByAttributes(array('type_admin' => $user->type));

        if ($department != NULL) {
            $model->department_id = $department->id;
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['InternshipPosition'])) {
            $model->attributes = $_POST['InternshipPosition'];
            //var_dump($model);die();
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['InternshipPosition'])) {
            $model->attributes = $_POST['InternshipPosition'];

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
            //var_dump(CHtml::errorSummary($model)); die();
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionAward($id, $sid, $rid) {
        $model = $this->loadModel($id);
        $student = Student::model()->findByPk($sid);

        $de = Department::model()->findByPk($model->department_id);


        $days_current_month = date('d');


        if ($days_current_month > 15) {

            $model->date_start = date('Y-m-d', strtotime("+2 months -$days_current_month days +1 days"));
            $model->date_end = date('Y-m-d', strtotime("+$de->period months -1 days", strtotime($model->date_start)));
        } else {
            $model->date_start = date('Y-m-d', strtotime("+1 months -$days_current_month days +1 days"));
            $model->date_end = date('Y-m-d', strtotime("+$de->period months -1 days", strtotime($model->date_start)));
        }

        $model->deadline = date('Y-m-d', strtotime($model->date_end . '+ 10 days'));






        if (isset($_POST['confirm'])) {

            $model->student_id = $sid;
            $model->status = 1;

            if ($model->save(false)) {


                $student->is_in = 1;
                $student->save();

                $r_success = RequestInternship::model()->findByAttributes(array('id' => $rid)); //i aitisi poy ekplirothike


                $r = RequestInternship::model()->findAllByAttributes(array('student_id' => $sid), 'id<>:rid', array(':rid' => $rid));

                //$tr=$
                //foreach ($r as $i) {
                //oi ypoloipes aitiseis plin autis poy afora tin thesi pou dothike ginontai 2, ws mi ekplirosimes diladi
                foreach ($r as $i) {
                    $i->status = 2;
                    $i->save();
                }

                $r_success->status = 1;
                //i thesi pou ekplirothike ginetai 1


                $r_success->save();

                $this->redirect(array('requestInternship/viewRequests'));
            }
            //echo CHtml::errorSummary($model);die();
        }
        //var_dump(CHtml::errorSummary($model));

        $this->render('award', array(
            'model' => $model,
            'student' => $student,
            'rid' => $rid
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

        $user = Users::model()->findByPk(Yii::app()->user->id);
        $department = Department::model()->findByAttributes(array('type_admin' => $user->type));


        if ($department != NULL) {
            $did = $department->id;
            $dataProvider = new CActiveDataProvider('InternshipPosition', array(
                'criteria' => array(
                    'condition' => 'department_id=:did',
                    'params' => array(':did' => $did)
                )
                    )
            );
        } else {
            $dataProvider = new CActiveDataProvider('InternshipPosition');
        }
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
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

    public function actionHistory() {
        $model = new InternshipPosition('searchCompleted');

        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['InternshipPosition']))
            $model->attributes = $_GET['InternshipPosition'];

        $this->render('history', array(
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

        $user = Users::model()->findByPk(Yii::app()->user->id);
        $department = Department::model()->findByAttributes(array('type_admin' => $user->type));
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
     * @param InternshipPosition $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'internship-position-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
