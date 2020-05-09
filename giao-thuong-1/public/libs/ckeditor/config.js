/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		//{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		//{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		//'/',
		{ name: 'others' },
		{ name: 'basicstyles', groups: [ 'basicstyles'/*, 'cleanup'*/ ] },
		{ name: 'colors' },
		{ name: 'styles' },
		{ name: 'paragraph',   groups: [ 'align', 'list'/*, 'indent', 'blocks', 'bidi'*/ ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
	];

    // Turn off html encoding
    config.htmlEncodeOutput = false;
    config.entities = false;
    config.basicEntities = false;

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript,Anchor,Image';
	config.autoParagraph = false;

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	//config.removeDialogTabs = 'image:advanced;link:advanced';
	// Add extra plugins
	config.extraPlugins = 'panelbutton,colorbutton,justify,mediamanager,htmlwriter,youtube';
	// Remove multiple plugins
	//config.removePlugins = 'image';
	// Set mono-dark skin
    //config.skin = 'moono-dark';
    // Office2013 skin
	config.skin = 'office2013';
};

