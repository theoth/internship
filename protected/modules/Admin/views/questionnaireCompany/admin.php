<?php
/* @var $this QuestionnaireCompanyController */
/* @var $model QuestionnaireCompany */

$this->breadcrumbs=array(
	'Questionnaire Companies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List QuestionnaireCompany', 'url'=>array('index')),
	array('label'=>'Create QuestionnaireCompany', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#questionnaire-company-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Questionnaire Companies</h1>

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
	'id'=>'questionnaire-company-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'company_id',
		'in1',
		'in2',
		'in3',
		'in4',
		/*
		'in5',
		'in6',
		'in7',
		'in8',
		'st1',
		'st2',
		'st3',
		'st4',
		'st5',
		'st6',
		'st7',
		'st8',
		'st9',
		'st10',
		'comments',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
