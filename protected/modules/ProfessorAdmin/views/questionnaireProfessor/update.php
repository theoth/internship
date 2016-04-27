<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */

$this->breadcrumbs=array(
	'Questionnaire Professors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuestionnaireProfessor', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireProfessor', 'url'=>array('create')),
	array('label'=>'View QuestionnaireProfessor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QuestionnaireProfessor', 'url'=>array('admin')),
);
?>

<h1>Update QuestionnaireProfessor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>