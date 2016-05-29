<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs=array(
	'Questionnaire Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	//array('label'=>'Create QuestionnaireStudent', 'url'=>array('create')),
	//array('label'=>'View QuestionnaireStudent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Πίσω', 'url'=>array('internshipPosition/myindex')),
);
?>

<h1>Συμπλήρωση ερωτηματολογίου </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>