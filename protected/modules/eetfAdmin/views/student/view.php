<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Φοιτητές', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέου φοιτητή', 'url'=>array('create')),
	array('label'=>'Επεξεργασία φοιτητή', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Διαγραφή φοιτητή', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Διαχείριση φοιτητών', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση φοιτητή με id: <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file_cv_name',
		'file_grades_name',
		'file_ika',
		'user_id',
		'department',
		'father_name',
		'mother_name',
		'address',
		'gender',
		'identity_number',
		'afm',
		'doy',
		'ama_ika',
		'amka',
		'year_in',
		'birth_day',
		'IBAN',
                'user.username',
                'user.password',
                'user.first_name',
                'user.last_name',
	),
)); ?>
