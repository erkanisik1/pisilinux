/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */


CKEDITOR.editorConfig = function( config ) {
	
	config.toolbarGroups = [	
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] }, 
		{ name: 'colors', groups: [ 'colors' ] },'/',
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert'},

	];
	config.skin = 'bootstrapck';
	config.extraPlugins = 'youtube, codesnippet';
	config.language = 'en';
	config.height = "600";
	config.removePlugins = 'newpage,flash,about,language,div'; 
};