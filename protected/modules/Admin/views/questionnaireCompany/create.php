<?php
/* @var $this QuestionnaireCompanyController */
/* @var $model QuestionnaireCompany */

$this->breadcrumbs=array(
	'Questionnaire Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuestionnaireCompany', 'url'=>array('index')),
	array('label'=>'Manage QuestionnaireCompany', 'url'=>array('admin')),
);
?>

<h1>Create QuestionnaireCompany</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>