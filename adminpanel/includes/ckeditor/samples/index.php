<!DOCTYPE html>
<!--
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->

<?php


$tags = array();
$tags[] = base64_encode('<script src="includes/ckeditor/ckeditor.js"></script>');
$tags[] = base64_encode('<script src="includes/ckeditor/samples/js/sample.js"></script>');
$tags[] = base64_encode('<link rel="stylesheet" href="includes/ckeditor/samples/css/samples.css">');
$tags[] = base64_encode('<link rel="stylesheet" href="includes/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">');

headerElements($tags,'pages');

?>
	
		<textarea cols="80" id="editor1" name="post" rows="10">

		</textarea>

		<script>



			CKEDITOR.replace( 'editor1', {
	
	language: 'ka'
});

		</script>



