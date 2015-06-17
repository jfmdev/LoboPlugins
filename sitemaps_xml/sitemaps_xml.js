/*
 * Copyright (C) 2013 Jose F. Maldonado
 *
 * This file is part of SitemapsXml.
 *
 * SitemapsXml is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SitemapsXml is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with SitemapsXml. If not, see <http://www.gnu.org/licenses/>.
 */

jQuery(document).ready(function() {
    if(jQuery('form.sitemaps').size() > 0 && jQuery("#textarea_sitemaps").size() > 0) {
        // Add behaviour to button.
        jQuery('form.sitemaps button').click(function() {
            // Set action.
            jQuery("form.sitemaps input[name='action']").val( jQuery(this).attr('name') );
        
            // Submit form.
            jQuery(this).closest("form").get(0).submit();
            return false;
        });
    
        // Add CodeMirror to text area.
        var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('textarea_sitemaps'));
    }
});