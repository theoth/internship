<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */

$this->breadcrumbs=array(
	'Questionnaire Professors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuestionnaireProfessor', 'url'=>array('index')),
	array('label'=>'Manage QuestionnaireProfessor', 'url'=>array('admin')),
);
?>

<h1>Create QuestionnaireProfessor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>