<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */

$this->breadcrumbs=array(
	'Questionnaire Professors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	//array('label'=>'Create QuestionnaireStudent', 'url'=>array('create')),
	//array('label'=>'View QuestionnaireStudent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Πίσω', 'url'=>array('questionnaireProfessor/view','id'=>$model->id)),
);
?>

<h1>Συμπλήρωση ερωτηματολογίου</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>