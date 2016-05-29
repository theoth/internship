<?php

class QuestionnaireStudentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/studentAdmin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
                                'actions' => array('index','view','delete'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
                $student=Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
                //var_dump($student); die();
                $in=InternshipPosition::model()->findByAttributes(array('student_id' => $student->id));
                //var_dump($in); die();
                $qu = QuestionnaireStudent::model()->findByPk($in->questionnaire_student_id);
                
                var_dump($qu); die();
                if($qu==NULL){
                
		$model=new QuestionnaireStudent;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                //var_dump($company);
                //die();
               // $model->student_id=$student->id;

		if(isset($_POST['QuestionnaireStudent']))
		{
			$model->attributes=$_POST['QuestionnaireStudent'];
			if($model->save())
				$this->redirect(array('internshipPosition/myindex'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
                
                }
                else{
                    $this->actionUpdate($model->id);
                }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
               // $student=Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
                //var_dump($company);
                //die();
               // $model->student_id=$student->id;

		if(isset($_POST['QuestionnaireStudent']))
		{
			$model->attributes=$_POST['QuestionnaireStudent'];
			if($model->save())
				$this->redirect(array('internshipPosition/myindex'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('QuestionnaireStudent');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new QuestionnaireStudent('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['QuestionnaireStudent']))
			$model->attributes=$_GET['QuestionnaireStudent'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return QuestionnaireStudent the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=QuestionnaireStudent::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param QuestionnaireStudent $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='questionnaire-student-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
