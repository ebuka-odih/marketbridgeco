jQuery( document ).ready( function( $ ) {
    'use strict';
	function gfgf_init() {
		$( '.gfgf_wrap, .gfgf_fieldset, .gfgf_accordion' ).each( function() {
			var self = $( this );
			if ( self.find( '.gfield_groups' ).length == 0 ) {
				if ( self.hasClass( 'gfgf_accordion' ) )
					self.find( '.gfgf_accordion_body' ).addClass( 'gfgf_pr0' );
				else
					self.addClass( 'gfgf_pr0' );
			}
		});
		$( '.gfield_accordion_group .gfield_error' ).each( function() {
			$( this ).closest( '.gfgf_accordion_body' ).show();
			$( this ).closest( '.gfield_accordion_group' ).addClass( 'ac_open ac_open_icon' );
		});
		$( '.gfield_accordion_group.ac_open' ).each( function() {
			$( this ).find( '.gfgf_accordion_body' ).show();
		});
		$( '.gfgf_accordion_header' ).on( 'click', function() {
			var self = $( this ),
				accordion = self.closest( '.gfield_accordion_group' ),
				accordionBody = self.next(),
				accordionSiblings = accordion.siblings( '.ac_open' );

			if ( accordion.hasClass( 'ac_open_one' ) && !accordion.hasClass( 'ac_open' ) ) {
				accordionSiblings.find( '.gfgf_accordion_body' ).slideUp( 300, function() {
					accordionSiblings.removeClass( 'ac_open ac_open_icon' );
				});
			}
			if ( accordion.hasClass( 'ac_open' ) ) {
				accordionBody.slideUp( 300, function() {
					accordion.removeClass( 'ac_open ac_open_icon' );
				});
			} else {
				accordion.addClass( 'ac_open' );
				accordionBody.slideDown( 300, function() {
					accordion.addClass( 'ac_open_icon' );
				});
			}
		});
	}
	gfgf_init();
	jQuery( document ).on( 'gform_post_render', function() {
		gfgf_init();
	});
	gform.addAction( 'gform_post_conditional_logic_field_action', function ( formId, action, targetId ) {
		if ( $( targetId ).parent().hasClass( 'gfgf_fields' ) ) {
			$( targetId ).find( '.gf-default-disabled' ).removeAttr( 'disabled' ).removeClass( 'gf-default-disabled' )
		}
	});
});