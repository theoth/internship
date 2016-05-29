<?php
/* @var $this QuestionnaireStudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Questionnaire Students',
);

$this->menu=array(
	array('label'=>'Create QuestionnaireStudent', 'url'=>array('create')),
	array('label'=>'Manage QuestionnaireStudent', 'url'=>array('admin')),
);
?>

<h1>Questionnaire Students</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
