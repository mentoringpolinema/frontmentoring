/**
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
		var detail_materi = CKEDITOR.document.getById( 'detail_materi' );
		var detail_pertemuan = CKEDITOR.document.getById( 'detail_pertemuan' );
		var detail_pengumuman = CKEDITOR.document.getById( 'detail_pengumuman' );
		var detail_tugas = CKEDITOR.document.getById( 'detail_tugas' );

		// Depending on the wysiwygarea plugin availability initialize classic or inline editor.
		if ( wysiwygareaAvailable ) {
			CKEDITOR.replace( 'detail_kegiatan' );
			CKEDITOR.replace( 'detail_materi' );
			CKEDITOR.replace( 'detail_pengumuman' );
			CKEDITOR.replace( 'detail_pertemuan' );
			CKEDITOR.replace( 'detail_tugas' );
		} else {
			detail_kegiatan.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_kegiatan' );
			detail_pengumuman.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_pengumuman' );
			detail_materi.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_materi' );
			detail_pertemuan.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_pertemuan' );
			detail_tugas.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'detail_tugas' );
			editorElement.setAttribute( 'contenteditable', 'true' );
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