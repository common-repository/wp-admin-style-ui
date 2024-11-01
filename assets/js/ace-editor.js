jQuery(function($){

	/**
	 * Check ACE Loaded
	 */
	if( !window.ace )
		return;

	/**
	 * Create ACE Editor
	 */
	var $editor = $("div[ace-editor=true],textarea[ace-editor=true]");
	if($editor.length < 2){
		$editor.each(function(i, el){
			var $element = $(el);

			// editor
			$editor = ace.edit(el);

			// set theme
			var $theme = $element.attr('ace-theme');
			if( $theme ){
				$editor.setTheme("ace/theme/"+$theme);
			}

			// mode language
			var $mode = $element.attr('ace-mode');
			if( $mode ){
				$editor.getSession().setMode("ace/mode/"+$mode);
			}

			// ready only
			var $readonly = $element.attr('readonly') || $element.attr('ace-readonly');
			if( $readonly ){
				$editor.setReadOnly(true);
			}
			
			// tabsize
			$editor.getSession().setTabSize(3);

			// margin
			$editor.setShowPrintMargin(false);
			$editor.getSession().setUseWrapMode(true);
		});
	}

});