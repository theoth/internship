<div class="form">

        <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'internship-position-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of booster.widgets.TbActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions'=>array('target'=>'_blank'),
    ));
    ?>



        <?php echo $form->errorSummary($model); ?>



        <div class="row">

        <?php
        echo $form->datePickerGroup(
                $model, 'from', array(
            'widgetOptions' => array(
                'options' => array(
                    'language' => 'en',
                    'format' => 'yyyy-mm-dd'
                ),
            ),
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-5',
            ),
            'hint' => 'Click inside! This is a super cool date field.',
            'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                )
        );
        ?>

    </div>
    
    <div class="row">

        <?php
        echo $form->datePickerGroup(
                $model, 'to', array(
            'widgetOptions' => array(
                'options' => array(
                    'language' => 'en',
                    'format' => 'yyyy-mm-dd'
                ),
            ),
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-5',
            ),
            'hint' => 'Click inside! This is a super cool date field.',
            'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
                )
        );
        ?>

    </div>

     


       <div class="row buttons">
<?php $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Δημιουργία' , 'context'=>'primary')
);   ?>	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->