<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs=array(
	'Questionnaire Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireStudent', 'url'=>array('create')),
	array('label'=>'Update QuestionnaireStudent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QuestionnaireStudent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuestionnaireStudent', 'url'=>array('admin')),
);
?>

<h1>View QuestionnaireStudent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'in1',
		'in2',
		'in3',
		'in4',
		'in5',
		'in6',
		'in7',
		'in8',
		'in9',
		'in10',
		'in11',
		'in12',
		'in13',
		'in14',
		'in15',
		'in16',
		'in17',
		'in18',
		'in19',
		'in20',
		'in21',
		'in22',
		'in23',
		'comments',
	),
)); ?>
