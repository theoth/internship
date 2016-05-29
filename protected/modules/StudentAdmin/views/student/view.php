<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'Φοιτητές', 'url'=>array('index')),
	//array('label'=>'Δημιουργία νέου φοιτητή', 'url'=>array('create')),
	//array('label'=>'Επεξεργασία φοιτητή', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Διαγραφή φοιτητή', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Ενημέρωση', 'url'=>array('submitCourses','iid'=>NULL,'uid'=>$model->users->id)),
);
?>

<h1>Στοιχεία βαθμολογίας</h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'passed_courses',
                'gen_average',
                'passed_win_el_courses',
                'win_el_average',
                'passed_sum_el_courses',
                'sum_el_average',
		

	),
)); ?>
