<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>'index.php?r=StudentAdmin/internshipposition'),
	//array('label'=>'Create InternshipPosition', 'url'=>array('create')),
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

<h1>Αναζήτηση θέσης πρακτικής άσκησης</h1>



<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'internship-position-grid',
	'dataProvider'=>$model->available_search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'date_start',
		//'date_end',
		//'grade',
		'company.brand',
                'title',
                'description',
                'company.city',
                'company.address',
		//'professor_id',
		/*
		'student_id',
		'status_submit_student',
		'status_submit_company',
		'status_submit_professor',
		'status',
		
		
		'published',
		'year',
		'st_absence1',
		'st_text1',
		'st_notes1',
		'st_text2',
		'st_notes2',
		'st_text3',
		'st_notes3',
		'st_absence2',
		'st_absence3',
		'st_final_text',
		'st_final_notes',
		'co_absence1',
		'co_absence2',
		'co_absence3',
		'co_text1',
		'co_notes1',
		'co_text2',
		'co_notes2',
		'co_text3',
		'co_notes3',
		'co_final_text',
		'co_final_notes',
		'prof_final_text',
		*/
		array(
			'class'=>'booster.widgets.TbButtonColumn',
                        'template' => '{view}',
		),
	),
)); ?>
