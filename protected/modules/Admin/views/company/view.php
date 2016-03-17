<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Πίσω στις εταιρείες', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας εταιρείας', 'url'=>array('create')),
	array('label'=>'Επεξεργασία εταιρείας', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Διαγραφή εταιρείας', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Αναζήτηση εταιρειών', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση εταιρεία | <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'user.username',
                'user.password',
		'id',
		'brand',
		'description',
		'user_id',
                'afm',
                'doy',
                'address',
                'user.telephone',
                'tk',
                'user.first_name',
                'user.last_name',
                'identity_number',
                'user.email',
                
	),
)); ?>
