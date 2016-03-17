<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InternshipPosition', 'url'=>array('index')),
	array('label'=>'Create InternshipPosition', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#internship-position-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Internship Positions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'internship-position-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date_start',
		'date_end',
		'grade',
		'company_id',
		'professor_id',
		/*
		'student_id',
		'file_student_reference_name',
		'status_submit_student',
		'file_company_name',
		'status_submit_company',
		'status_submit_professor',
		'status',
		'title',
		'description',
		'published',
		*/
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
