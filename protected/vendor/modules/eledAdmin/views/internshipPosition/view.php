<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Θέσεις πρακτικής άσκησης', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας θέσης', 'url'=>array('create')),
	array('label'=>'Επεξεργασία θέσης', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Διαγραφή θέσης', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Διαχείριση θέσεων', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση θέσης με id: <?php echo $model->id; ?></h1>

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
		'status_submit_student',
		'status_submit_company',
		'status_submit_professor',
		'status',
		'title',
		'description',
		'published',
		'year',
		'st_absence1',
		'st_text1',
		'st_notes1',
		'st_text2',
		'st_notes2',
		'st_text3',
		'st_notes3',
		'st_absence2',
		'st_absence3',
		'st_final_text',
		'st_final_notes',
		'co_absence1',
		'co_absence2',
		'co_absence3',
		'co_text1',
		'co_notes1',
		'co_text2',
		'co_notes2',
		'co_text3',
		'co_notes3',
		'co_final_text',
		'co_final_notes',
		'prof_final_text',
	),
)); ?>
