<?php
/* @var $this QuestionnaireCompanyController */
/* @var $model QuestionnaireCompany */

$this->breadcrumbs=array(
	'Questionnaire Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuestionnaireCompany', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireCompany', 'url'=>array('create')),
	array('label'=>'View QuestionnaireCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QuestionnaireCompany', 'url'=>array('admin')),
);
?>

<h1>Update QuestionnaireCompany <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>