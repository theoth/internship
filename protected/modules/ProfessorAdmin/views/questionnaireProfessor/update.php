<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */

$this->breadcrumbs=array(
	'Questionnaire Professors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$in=InternshipPosition::model()->findByAttributes(array('questionnaire_professor_id'=>$model->id));

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('internshipPosition/view','id'=>$in->id)),
	//array('label'=>'Create QuestionnaireProfessor', 'url'=>array('create')),
	//array('label'=>'View QuestionnaireProfessor', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage QuestionnaireProfessor', 'url'=>array('admin')),
);
?>

<h1>Συμπλήρωση ερωτηματολογίου</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>