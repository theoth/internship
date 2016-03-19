<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Πίσω στους καθηγητές', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέου καθηγητή', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#professor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Αναζήτηση καθηγητών</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'professor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            'user.last_name',
            'user.first_name',
		'id',
		'user_id',
		'department',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
