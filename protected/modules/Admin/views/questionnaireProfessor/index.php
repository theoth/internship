<?php
/* @var $this QuestionnaireProfessorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Questionnaire Professors',
);

$this->menu=array(
	array('label'=>'Create QuestionnaireProfessor', 'url'=>array('create')),
	array('label'=>'Manage QuestionnaireProfessor', 'url'=>array('admin')),
);
?>

<h1>Questionnaire Professors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
