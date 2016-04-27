<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs=array(
	'Questionnaire Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireStudent', 'url'=>array('create')),
	array('label'=>'View QuestionnaireStudent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QuestionnaireStudent', 'url'=>array('admin')),
);
?>

<h1>Update QuestionnaireStudent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>