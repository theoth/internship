<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('view','id'=>$rid)),
	
);
?>

<h1>Εμφάνιση φοιτητή |<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'user_id',
                'user.first_name',
                'user.last_name',
                'user.username',
                'user.password',
		'department',
                'user.aem',
		'father_name',
		'mother_name',
                'user.email',
                'user.telephone',
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
                
                'file_cv_name',
		'file_grades_name',
		'file_ika',
                'user.activated',

	),
)); ?>
