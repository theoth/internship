<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs=array(
	'Questionnaire Students'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireStudent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#questionnaire-student-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Questionnaire Students</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'questionnaire-student-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'student_id',
		'in1',
		'in2',
		'in3',
		'in4',
		/*
		'in5',
		'in6',
		'in7',
		'in8',
		'in9',
		'in10',
		'in11',
		'in12',
		'in13',
		'in14',
		'in15',
		'in16',
		'in17',
		'in18',
		'in19',
		'in20',
		'in21',
		'in22',
		'in23',
		'comments',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
