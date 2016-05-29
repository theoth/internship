<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('viewNewPositions')),
	
);
?>

<h1>Εμφάνιση θέσης | <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'published',
                'title',
		'date_start',
		'date_end',
                'description',
                'company_id',
		'company.brand',
		'status',
	),
)); 

?>

<div class="row buttons">
        <?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'link', 'url'=> array('publishPosition','iid'=>$model->id), 'label' => 'Δημοσίευση', 'context'=>'primary')
);   ?>
    </div>

