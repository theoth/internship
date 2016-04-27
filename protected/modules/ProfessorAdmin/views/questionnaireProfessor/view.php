<?php
/* @var $this QuestionnaireProfessorController */
/* @var $model QuestionnaireProfessor */

$this->breadcrumbs=array(
	'Questionnaire Professors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List QuestionnaireProfessor', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireProfessor', 'url'=>array('create')),
	array('label'=>'Update QuestionnaireProfessor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QuestionnaireProfessor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuestionnaireProfessor', 'url'=>array('admin')),
);
?>

<h1>View QuestionnaireProfessor #<?php echo $model->id; ?></h1>

<?php 
$ansLigoPoly=utils::ligoPoly();
$ansNaiOxi=utils::naiOxi();
$texts = $model->AttributeLabels();
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'professor_id',
		array('label' => $texts['st1'],'value'=>$ansLigoPoly[$model->st1]),
		array('label' => $texts['st2'],'value'=>$ansLigoPoly[$model->st2]),
		array('label' => $texts['st3'],'value'=>$ansLigoPoly[$model->st3]),
		array('label' => $texts['st4'],'value'=>$ansLigoPoly[$model->st4]),
		array('label' => $texts['st5'],'value'=>$ansLigoPoly[$model->st5]),
		'st6',
		'st7',
		array('label' => $texts['in1'],'value'=>$ansLigoPoly[$model->in1]),
		array('label' => $texts['in2'],'value'=>$ansLigoPoly[$model->in2]),
		array('label' => $texts['in3'],'value'=>$ansLigoPoly[$model->in3]),
		array('label' => $texts['in4'],'value'=>$ansLigoPoly[$model->in4]),
		array('label'=>$texts['in5'],'value'=>$ansLigoPoly[$model->in5]),
		array('label' => $texts['in6'],'value'=>$ansLigoPoly[$model->in6]),
		array('label' => $texts['in7'],'value'=>$ansLigoPoly[$model->in7]),
		array('label' => $texts['in8'],'value'=>$ansLigoPoly[$model->in8]),
		array('label' => $texts['in9'],'value'=>$ansLigoPoly[$model->in9]),
		array('label' => $texts['in10'],'value'=>$ansNaiOxi[$model->in10]),
		array('label' => $texts['in11'],'value'=>$ansNaiOxi[$model->in11]),
		'in12',
		'in13',
		'in14',
		'in15',
		'in16',
		'in17',
		'comments',
	),
)); ?>
