<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Department', 'url'=>array('index')),
	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'Update Department', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Department', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1>View Department #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		're_courses1',
		're_courses2',
		're_courses3',
		're_courses4',
		're_courses5',
		're_courses6',
		're_courses7',
		're_courses8',
		're_courses9',
		're_courses10',
		'el_courses1',
		'el_courses2',
		'el_courses3',
		'el_courses4',
		'el_courses5',
		'el_courses6',
		'el_courses7',
		'el_courses8',
		'el_courses9',
		'el_courses10',
		'period',
	),
)); ?>
