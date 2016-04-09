<?php

class RequestInternshipController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2Admin';

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
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete','viewRequests','viewInternshipPosition','viewInternshipPosition2','viewStudent'),
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        public function actionViewrequests()
	{
                
                $dataProvider=new CActiveDataProvider('InternshipPosition', array(
                    'criteria'=>array(  
                        
                        'condition'=>'t.status=3',          
                        'with'=>array(
                              
                                'requestInternships' => array(
                                //'on'=>"".$categories_id,
                                'condition'=>'requestInternships.status=0',
                                'joinType' => 'INNER JOIN', 
                                //'order' => 'categories.position ASC',
                                                        )                       
                                ),'together'=>true,

                    ),
                    'pagination'=>array(
                        'pageSize'=>10,
                    ),
                ));
                
		$this->render('viewRequests',array(
			'd' => $dataProvider,
		));
	}
        
         public function actionViewInternshipPosition($id, $month = NULL) {
          
             
        
             
        $this->render('viewInternshipPosition', array(
            'model' => InternshipPosition::model()->findByPk($id),
            'month' => $month,
        ));
        //die();
    }
    
    public function actionViewInternshipPosition2($id, $month = NULL,$rid) {
          
             
        
             
        $this->render('viewInternshipPosition2', array(
            'model' => InternshipPosition::model()->findByPk($id),
            'month' => $month,
            'rid' => $rid,
        ));
        //die();
    }
    
    public function actionViewStudent($id,$rid) {
          
             
        
             
        $this->render('viewStudent', array(
            'model' => Student::model()->findByPk($id),
            
            'rid' => $rid,
        ));
        //die();
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RequestInternship;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RequestInternship']))
		{
			$model->attributes=$_POST['RequestInternship'];
                        $model->code1=$model->internship_position_id;
                        $in=InternshipPosition::model()->findByPk($model->code1);
                        $model->title1=$in->title;
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['RequestInternship']))
		{
			$model->attributes=$_POST['RequestInternship'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('RequestInternship');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RequestInternship('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RequestInternship']))
			$model->attributes=$_GET['RequestInternship'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RequestInternship the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RequestInternship::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RequestInternship $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='request-internship-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
