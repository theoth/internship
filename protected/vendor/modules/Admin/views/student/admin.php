<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Πίσω στους φοιτητές', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέου φοιτητή', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#student-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Αναζήτηση φοιτητών</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
//var_dump($model);
//die();
$this->widget('booster.widgets.TbGridView', array(
	'id'=>'student-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            'users.last_name',
            'users.first_name',
		'id',
            
		
		'user_id',
		'department',
                
                
            
		/*
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
		*/
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
