<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('index')),
	
	array('label'=>'Υποβολή στοιχείων', 'url'=>array('update', 'id'=>$model->id)),
	
);
?>

<h1>Η θέση μου |<?php echo $model->id; ?></h1>
<br>
<br>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_start',
		'date_end',
		
		'company_id',
		'professor_id',
		'student_id',
		
		
		'title',
		'description',
		'published',
		'year',
		
		
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
		
	),
)); ?>
