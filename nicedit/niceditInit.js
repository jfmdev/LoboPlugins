/*
 * Copyright (C) 2013 Jose F. Maldonado
 *
 * This file is part of 'NicEdit for Wolf'.
 *
 * 'NicEdit for Wolf' is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * 'NicEdit for Wolf' is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with 'NicEdit for Wolf'. If not, see <http://www.gnu.org/licenses/>.
 */

var nicedit_area;

jQuery(document).ready(function() {
    // If NicEdit is selected, add it.
    jQuery('.filter-selector').live('wolfSwitchFilterIn', function(ev,f,el) {
        if(f=='nicedit') {
            nicedit_area = new nicEditor({fullPanel : true}).panelInstance( el.attr('id') );
        }
    });
    
    // If NicEdit is not selected, remove it.
    jQuery('.filter-selector').live('wolfSwitchFilterOut', function(ev,f,el) {
        if(f=='nicedit') {
            nicedit_area.removeInstance( el.attr('id') );
        }
    });
});

