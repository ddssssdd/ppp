/*
 * jQuery File Upload Plugin JS Example 6.11
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/*jslint nomen: true, unparam: true, regexp: true */
/*global $, window, document */

$(function () {
    'use strict';
    if (!$('#fileupload'))
    	return;

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'upload/index/'
    });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    // Load existing files:
    $.ajax({
        // Uncomment the following to send cross-domain cookies:
        xhrFields: {withCredentials: false},
        url: $('#fileupload').fileupload('option', 'url'),
        dataType: 'jsonp',
        context: $('#fileupload')[0]
    }).done(function (result) {
    	
        if (result && result.length) {
            $(this).fileupload('option', 'done')
                .call(this, null, {result: result});
        }
    });

});
