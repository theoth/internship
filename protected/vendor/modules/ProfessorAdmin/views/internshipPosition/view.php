<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('index')),
	//array('label'=>'Create InternshipPosition', 'url'=>array('create')),
	array('label'=>'Υποβολή στοιχείων', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete InternshipPosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage InternshipPosition', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση θέσης πρακτικής άσκησης με κωδικό:  <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_start',
		'date_end',
		'grade',
		'company_id',
		'professor_id',
		'student_id',
		//'status_submit_student',
		//'status_submit_company',
		//'status_submit_professor',
		//'status',
		'title',
		'description',
		//'published',
		'year',
		
		
	),
)); ?>

<?php
if($model->status==1){
$month;
echo CHtml::link('1ος μήνας', array('internshipposition/view', 'id'=>$model->id , 'month'=>1));

 

if ($month==1){
    
        echo str_repeat('&nbsp;',160); echo CHtml::link('κλείσιμο', array('internshipposition/view','id'=>$model->id, 'month'=>0));

    
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		
		
		
		'st_absence1',
		'st_text1',
		'st_notes1',
		
		'co_absence1',
		
		'co_text1',
		'co_notes1',
		
	),
));
}


echo '<br/>';
echo CHtml::link('2ος μήνας', array('internshipposition/view', 'id'=>$model->id , 'month'=>2));  

if ($month==2){
    
       echo str_repeat('&nbsp;',160); echo CHtml::link('κλείσιμο', array('internshipposition/view','id'=>$model->id, 'month'=>0)); 

    
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		
		
		
		'st_absence2',
		'st_text2',
		'st_notes2',
		
		'co_absence2',
		
		'co_text2',
		'co_notes2',
		
	),
));
}


echo '<br/>';
echo CHtml::link('3ος μήνας', array('internshipposition/view', 'id'=>$model->id , 'month'=>3)); 


if ($month==3){
//str_repeat('&nbsp;', 5);
        echo str_repeat('&nbsp;',160); echo CHtml::link('κλείσιμο', array('internshipposition/view','id'=>$model->id, 'month'=>0)); 

    
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		
		
		
		'st_absence3',
		'st_text3',
		'st_notes3',
		
		'co_absence3',
		
		'co_text3',
		'co_notes3',
                'co_final_text',
		'co_final_notes',
		'prof_final_text',
		
	),
));
}
}

?>
