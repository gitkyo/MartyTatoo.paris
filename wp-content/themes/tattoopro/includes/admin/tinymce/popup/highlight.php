<script type="text/javascript">
jQuery( function( $ ) {

	$( '#wolf-insert' ).click( function() {

		var html = tinyMCE.activeEditor.selection.getContent(),
		//var html = 'test';
		// set up variables to contain our input values
			color = $( '#highlight' ).val();

		output = '[wolf_highlight_text';
		output += ' color="' +color + '"';
		output += ']'+ html + '[/wolf_highlight_text]';

		if ( window.tinyMCE  ) {

			//alert(output);
			window.parent.send_to_editor( output );
			//window.tinyMCE.execInstanceCommand( 'content', 'mceInsertContent', false, output);
			tb_remove();
			return false;
		}
	} );
} );
</script>
<div id="wolf-popup-head"><strong><?php _e( 'Highlight Text', 'tattoopro' ); ?></strong></div>
<div id="wolf-popup">
	<form action="#" method="get">
		<table class="form-table">
			<tbody>
				<tr>
					<th><label for="highlight"><?php _e( 'Color', 'tattoopro' ); ?></label></th>
					<td>
						<select name="highlight" id="highlight">
							<option value="yellow"  selected="selected"><?php _e( 'yellow', 'tattoopro' ); ?></option>
							<option value="green"><?php _e( 'green', 'tattoopro' ); ?></option>
							<option value="red"><?php _e( 'red', 'tattoopro' ); ?></option>
							<option value="black"><?php _e( 'black', 'tattoopro' ); ?></option>
							<option value="white"><?php _e( 'white', 'tattoopro' ); ?></option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="submit"><input type="submit" id="wolf-insert" class="button-primary" value="<?php _e( 'Wrap selected words', 'tattoopro' ); ?>"></p>
	</form>
</div>