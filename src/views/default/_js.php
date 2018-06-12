<?php

use yii\helpers\Html;
use yii\helpers\Url;

//

?>
<?php if( $printTags ?? false ) : ?>
<script type='text/javascript'><?php endif; ?>
	
	<?php switch($section) : case 'onload' : ?>
	
	$( function () {
		
	
	} );
	
	<?php break; case 'modal' : ?>
	
	var _confirm = function ( _$target, _config ) {
		
		var _deferred = yozh.Modal.helpers.confirm( _$target, _config );
		
		return _deferred;
	}
	
	var _done = function ( _response, _status, xhr, _$target ) {
		
		/*
		$( '#selector' + _$target.data( 'id' ) ).find( '.icon' )
			.removeClass( 'icon-status-new' )
			.addClass( 'icon-status-close' )
		;
		
		_$target.parent().html( _response );
		*/
		
	}
	
	<?php break; case 'template' : ?>
	
	
	<?php break; default: ?>
	
	<?php endswitch; ?>
	<?php if( $printTags ?? false ) : ?></script><?php endif; ?>
