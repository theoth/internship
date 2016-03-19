<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Πίσω στις αιτήσεις φοιτητών', 'url'=>array('viewRequests')),
	array('label'=>'Δημιουργία νέας αίτησης', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#request-internship-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Αναζήτηση αιτήσεων</h1>




<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'request-internship-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'internship_position_id',
		'student_id',
		'date_request',
		'status',
		'title1',
		/*
		'code1',
		'title2',
		'code2',
		'title3',
		'code3',
		'title4',
		'code4',
		'title5',
		'code5',
		*/
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
