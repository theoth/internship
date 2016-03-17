<?php

class ProfessorController extends Controller
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
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ProfessorForm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProfessorForm']))
		{
			$model->attributes=$_POST['ProfessorForm'];
			
                        if ($model->validate()) {
                            $p = new Users();
                            $professor = new Professor();
                            
                            $p->attributes = $model->attributes;
                            $p->type = 1; //professor type
                            $professor->attributes = $model->attributes;
                            $b1 = $p->save(false);
                            
                            $b2 = false;
                            
                            if($b1) {
                                $professor->user_id = $p->id;
                                $b2 = $professor ->save();
                                
                            }
                             var_dump(CHtml::errorSummary($p));
                            var_dump(CHtml::errorSummary($professor));
                            if ($b1 && $b2)
                                $this->redirect(array('view', 'id' => $professor->id));
            }
                            
		}

		$this->render('create',array(
			'model' => $model,
                    
		));
                
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$professor=$this->loadModel($id);
                $model = new ProfessorForm();
                $model->attributes = $professor->attributes;
                $model->attributes = $professor->user->attributes;
                $model->isNew = false;
                $model->professor_id = $id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProfessorForm']))
		{
                    
                    if ($model->validate()){
                         $model->attributes = $_POST['ProfessorForm'];

                $professor->attributes = $model->attributes;
                $professor->user->attributes = $model->attributes;

                $professor->save();
                $professor->user->save();
                $this->redirect(array('view', 'id' => $professor->id));
                        
                    }
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
		$dataProvider=new CActiveDataProvider('Professor');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Professor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Professor']))
			$model->attributes=$_GET['Professor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Professor the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Professor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Professor $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='professor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
