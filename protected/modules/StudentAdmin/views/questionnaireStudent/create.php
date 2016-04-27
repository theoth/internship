<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs=array(
	'Questionnaire Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	array('label'=>'Manage QuestionnaireStudent', 'url'=>array('admin')),
);
?>

<h1>Create QuestionnaireStudent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>