<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RequestInternship', 'url'=>array('index')),
	array('label'=>'Create RequestInternship', 'url'=>array('create')),
	array('label'=>'Update RequestInternship', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RequestInternship', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RequestInternship', 'url'=>array('admin')),
);
?>

<h1>View RequestInternship #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'internship_position_id',
		'student_id',
		'date_request',
		'status',
		'title1',
		'code1',
		'title2',
		'code2',
		'title3',
		'code3',
		'title4',
		'code4',
		'title5',
		'code5',
	),
)); ?>
