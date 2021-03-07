﻿/**
 * Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/* exported initSample */

if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
	CKEDITOR.tools.enableHtml5Elements( document );

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 150;
CKEDITOR.config.width = 'auto';

var initSample = ( function() {
	var wysiwygareaAvailable = isWysiwygareaAvailable(),
		isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );

	return function() {
		var detail_kegiatan = CKEDITOR.document.getById( 'detail_kegiatan' );
		var editorElement = CKEDITOR.document.getById( 'detail_materi' );
		var detail_pengumuman = CKEDITOR.document.getById( 'detail_pengumuman' );

		// Depending on the wysiwygarea plugin availability initialize classic or inline editor.
		if ( wysiwygareaAvailable ) {
			CKEDITOR.replace( 'detail_kegiatan' );
			CKEDITOR.replace( 'detail_materi' );
			CKEDITOR.replace( 'detail_pengumuman' );
		} else {
			detail_kegiatan.setAttribute( 'contenteditable', 'true' );
			detail_pengumuman.setAttribute( 'contenteditable', 'true' );
			detail_kegiatan_edit.setAttribute( 'contenteditable', 'true' );
			editorElement.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_kegiatan' );
			CKEDITOR.inline( 'detail_materi' );
			CKEDITOR.inline( 'detail_pengumuman' );

			// TODO we can consider displaying some info box that
			// without wysiwygarea the classic editor may not work.
		}
	};

	function isWysiwygareaAvailable() {
		// If in development mode, then the wysiwygarea must be available.
		// Split REV into two strings so builder does not replace it :D.
		if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
			return true;
		}

		return !!CKEDITOR.plugins.get( 'wysiwygarea' );
	}
} )();

var initGetDataKegiatan = ( function() {
	var wysiwygareaAvailable = isWysiwygareaAvailable();

	return function(id) {
		var detail_kegiatan_edit = CKEDITOR.document.getById( 'detail_kegiatan_edit' );

		// Depending on the wysiwygarea plugin availability initialize classic or inline editor.
		if ( wysiwygareaAvailable ) {
			CKEDITOR.replace( 'detail_kegiatan_edit');
		} else {
			detail_kegiatan_edit.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_kegiatan_edit' );
		}
	};

	function isWysiwygareaAvailable() {
		// If in development mode, then the wysiwygarea must be available.
		// Split REV into two strings so builder does not replace it :D.
		if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
			return true;
		}

		return !!CKEDITOR.plugins.get( 'wysiwygarea' );
	}
} )();