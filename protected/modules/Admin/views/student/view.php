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
	array('label'=>'Αναζήτηση φοιτητών', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση φοιτητή | <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'user_id',
                'user.first_name',
                'user.last_name',
                'user.username',
                'user.password',
		'department_id',
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
                
            array('type'=>'raw', 'label'=>'Αναλυτική βαθμολογία','value'=>CHtml::link('αρχείο', Yii::app()->baseUrl . '/images/file_grades/' . $model->file_grades_name)),
               
               array('type'=>'raw', 'label'=>'Βιογραφικό','value'=>CHtml::link('αρχείο', Yii::app()->baseUrl . '/images/file_cv/' . $model->file_grades_name)),
                array('type'=>'raw', 'label'=>'Βεβαίωση ΙΚΑ','value'=>CHtml::link('αρχείο', Yii::app()->baseUrl . '/images/file_ika/' . $model->file_grades_name)),

		
                'user.activated',

	),
)); ?>
