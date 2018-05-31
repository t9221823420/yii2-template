<?php

use yii\helpers\Html;
use yozh\form\ActiveForm;

?>

<div class="">
	
	<?php $form = ActiveForm::begin(); ?>
	
	<?php $fields = $form->fileds( $model,
		method_exists( $model, 'attributeEditList' )
                ? $model->attributeEditList()
                : array_keys( $model->attributes ),
		false
	);
	
    foreach( $fields as $field ) {
        print $field;
    }

	?>

    <div class="form-group">
		<?= Html::submitButton( Yii::t( 'app', 'Save'), [ 'class' => 'btn btn-success' ] ) ?>
    </div>
	
	<?php ActiveForm::end(); ?>

</div>