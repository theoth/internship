<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/mainAdmin'); ?>
<div class="span-19">
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<div class="span-5 last">
    <div id="sidebar">
        <?php
        if (!empty($this->menu)) {

            $this->widget('booster.widgets.TbNavbar', array(
                'brand' => false, // <-- This dysplays some title on the left
                'fixed' => 'right',
                'fluid' => 'true',
                'type' => 'inverse',
                'items' => array(
                    array(
                        'class' => 'booster.widgets.TbMenu',
                        'type' => 'navbar',
                        'items' => $this->menu,
                        'htmlOptions' => array('class' => 'operations'),
                    )
                )
            ));
            //$this->endWidget();
        }
        ?>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>

