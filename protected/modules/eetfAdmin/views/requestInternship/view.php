<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Αιτήσεις φοιτητών', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας αίτησης', 'url'=>array('create')),
	array('label'=>'Επεξεργασία αίτησης', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Διαγραφή αίτησης', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Διαχείριση αιτήσεων', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση αίτησης με id: <?php echo $model->id; ?></h1>

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
