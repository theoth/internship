<?php

class CompanyController extends Controller {

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
                'actions' => array('index', 'view', ),
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
    public function actionCreate() {
        $model = new CompanyForm;
        $model->isNew = true;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['CompanyForm'])) {
            $model->attributes = $_POST['CompanyForm'];

            if ($model->validate()) {
                $c = new Users();
                $company = new Company();

                $c->attributes = $model->attributes;
                $c->type = 2; //company type
                $company->attributes = $model->attributes;
                $c1 = $c->save(false);

                $c2 = false;

                if ($c1) {
                    $company->user_id = $c->id;
                    $c2 = $company->save();
                }
                
                //var_dump(CHtml::errorSummary($c));
                //var_dump(CHtml::errorSummary($company));
                if ($c1 && $c2)
                    $this->redirect(array('view', 'id' => $company->id));
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
        $company = $this->loadModel($id);
        $model = new CompanyForm();
        $model->attributes = $company->attributes;
        $model->attributes = $company->user->attributes;
        $model->isNew = false;
        $model->company_id = $id;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['CompanyForm'])) {

            if ($model->validate()) {
                $model->attributes = $_POST['CompanyForm'];

                $company->attributes = $model->attributes;
                $company->user->attributes = $model->attributes;

                $company->save();
                $company->user->save();
                $this->redirect(array('view', 'id' => $company->id));
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
        $dataProvider = new CActiveDataProvider('Company');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Company('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Company']))
            $model->attributes = $_GET['Company'];

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
        $model = Company::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Company $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'company-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}