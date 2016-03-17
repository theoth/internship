<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List InternshipPosition', 'url'=>array('index')),
	array('label'=>'Create InternshipPosition', 'url'=>array('create')),
	array('label'=>'Update InternshipPosition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InternshipPosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InternshipPosition', 'url'=>array('admin')),
);
?>

<h1>View InternshipPosition #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_start',
		'date_end',
		'grade',
		'company_id',
		'professor_id',
		'student_id',
		'file_student_reference_name',
		'status_submit_student',
		'file_company_name',
		'status_submit_company',
		'status_submit_professor',
		'status',
		'title',
		'description',
		'published',
	),
)); ?>
