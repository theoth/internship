<?php
/* @var $this QuestionnaireCompanyController */
/* @var $model QuestionnaireCompany */

$this->breadcrumbs=array(
	'Questionnaire Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List QuestionnaireCompany', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireCompany', 'url'=>array('create')),
	array('label'=>'Update QuestionnaireCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QuestionnaireCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuestionnaireCompany', 'url'=>array('admin')),
);
?>

<h1>View QuestionnaireCompany #<?php echo $model->id; ?></h1>

<?php 
$ansLigoPoly=utils::ligoPoly();
$ansNaiOxi=utils::naiOxi();
 $texts = $model->AttributeLabels();
 //var_dump($texts);die();
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		array('label' => $texts['in1'],'value'=>$ansLigoPoly[$model->in1]),
		array('label' => $texts['in2'],'value'=>$ansLigoPoly[$model->in2]),
		array('label' => $texts['in3'],'value'=>$ansLigoPoly[$model->in3]),
		array('label' => $texts['in4'],'value'=>$ansLigoPoly[$model->in4]),
		array('label'=>$texts['in5'],'value'=>$ansLigoPoly[$model->in5]),
		array('label' => $texts['in6'],'value'=>$ansNaiOxi[$model->in6]),
		array('label' => $texts['in7'],'value'=>$ansNaiOxi[$model->in7]),
		array('label' => $texts['in8'],'value'=>$ansNaiOxi[$model->in8]),
		array('label' => $texts['st1'],'value'=>$ansLigoPoly[$model->st1]),
		array('label' => $texts['st2'],'value'=>$ansLigoPoly[$model->st2]),
		array('label' => $texts['st3'],'value'=>$ansLigoPoly[$model->st3]),
		array('label' => $texts['st4'],'value'=>$ansLigoPoly[$model->st4]),
		array('label' => $texts['st5'],'value'=>$ansLigoPoly[$model->st5]),
		array('label' => $texts['st6'],'value'=>$ansLigoPoly[$model->st6]),
		array('label' => $texts['st7'],'value'=>$ansLigoPoly[$model->st7]),
		array('label' => $texts['st8'],'value'=>$ansLigoPoly[$model->st8]),
		array('label' => $texts['st9'],'value'=>$ansLigoPoly[$model->st9]),
		array('label' => $texts['st10'],'value'=>$ansNaiOxi[$model->st10]),
		'comments',
	),
)); ?>
