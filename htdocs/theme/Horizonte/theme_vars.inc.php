<?php
/* Copyright (C) 2024 OnLi Horizonte Theme
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *	\file       htdocs/theme/Horizonte/theme_vars.inc.php
 *	\brief      File to declare variables of CSS style sheet for OnLi Horizonte theme
 *  \ingroup    core
 */

global $theme_bordercolor, $theme_datacolor, $theme_bgcolor, $theme_bgcoloronglet;
$theme_bordercolor = array(222, 226, 230);
$theme_datacolor = array(array(0, 123, 255), array(40, 167, 69), array(255, 193, 7), array(220, 53, 69), array(23, 162, 184), array(108, 117, 125), array(52, 58, 64), array(111, 66, 193), array(253, 126, 20), array(32, 201, 151), array(102, 16, 242), array(187, 51, 255), array(255, 102, 102), array(45, 152, 218));
if (!defined('ISLOADEDBYSTEELSHEET')) {
    if (getDolGlobalString('MAIN_OPTIMIZEFORCOLORBLIND')) {
        if (getDolGlobalString('MAIN_OPTIMIZEFORCOLORBLIND') == 'flashy') {
            $theme_datacolor = array(array(157, 56, 191), array(0, 147, 183), array(250, 190, 30), array(221, 75, 57), array(0, 166, 90), array(140, 140, 220), array(190, 120, 120), array(190, 190, 100), array(115, 125, 150), array(100, 170, 20), array(150, 135, 125), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
        } else {
            // for now we use the same configuration for all types of color blind
            $theme_datacolor = array(array(248, 220, 1), array(9, 85, 187), array(42, 208, 255), array(0, 0, 0), array(169, 169, 169), array(253, 102, 136), array(120, 154, 190), array(146, 146, 55), array(0, 52, 251), array(196, 226, 161), array(222, 160, 41), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
        }
    }
}

$theme_bgcolor = array(hexdec('FF'), hexdec('FF'), hexdec('FF'));
$theme_bgcoloronglet = array(hexdec('F8'), hexdec('F9'), hexdec('FA'));

// Colors
$colorbackbody = '255,255,255';
$colorbackhmenu1 = '52,58,64'; // topmenu - dark gray
$colorbackvmenu1 = '248,249,250'; // vmenu - light gray
$colortopbordertitle1 = '222,226,230'; // top border of title
$colorbacktitle1 = '248,249,250'; // title of tables,list
$colorbacktabcard1 = '255,255,255'; // card
$colorbacktabactive = '248,249,250';
$colorbacklineimpair1 = '255,255,255'; // line impair
$colorbacklineimpair2 = '255,255,255'; // line impair
$colorbacklinepair1 = '248,249,250'; // line pair
$colorbacklinepair2 = '248,249,250'; // line pair
$colorbacklinepairhover = '240,242,245'; // line hover
$colorbacklinepairchecked = '230,235,245'; // line checked
$colorbacklinebreak = '248,249,250'; // line break
$colortexttitlenotab = '0,123,255'; // blue
$colortexttitlenotab2 = '23,162,184'; // cyan
$colortexttitle = '73,80,87';
$colortexttitlelink = '0,123,255';
$colortext = '33,37,41';
$colortextlink = '0,123,255';
$fontsize = '0.875rem';
$fontsizesmaller = '0.75rem';
$topMenuFontSize = '1rem';
$toolTipBgColor = 'rgba(255, 255, 255, 0.98)';
$toolTipFontColor = '#333';
$butactionbg = '0, 123, 255';
$textbutaction = '255, 255, 255';

// text color
$textSuccess   = '#28a745';
$colorblind_deuteranopes_textSuccess = '#37de5d';
$textWarning   = '#ffc107';
$textDanger    = '#dc3545';
$colorblind_deuteranopes_textWarning = $textWarning;

// Badges colors
$badgePrimary   = '#007bff';
$badgeSecondary = '#6c757d';
$badgeInfo      = '#17a2b8';
$badgeSuccess   = '#28a745';
$badgeWarning   = '#ffc107';
$badgeDanger    = '#dc3545';
$badgeDark      = '#343a40';
$badgeLight     = '#f8f9fa';

// badge color adjustment for color blind
$colorblind_deuteranopes_badgeSuccess   = '#37de5d';
$colorblind_deuteranopes_badgeSuccess_textColor7 = '#000';

// Status
$statusIconWhite = '#fff';
$statusBackAndText = array(
    'status0' => array('background' => '#bed6f5', 'text' => '#000'),
    'status1' => array('background' => '#dcd2f9', 'text' => '#000'),
    'status2' => array('background' => '#ffd6f5', 'text' => '#000'),
    'status3' => array('background' => '#ffe6ba', 'text' => '#000'),
    'status4' => array('background' => '#e4f0ba', 'text' => '#000'),
    'status5' => array('background' => '#c0eeea', 'text' => '#000'),
    'status6' => array('background' => '#e8e8e8', 'text' => '#000'),
    'status7' => array('background' => '#e8e8e8', 'text' => '#000'),
    'status8' => array('background' => '#e8e8e8', 'text' => '#000'),
    'status9' => array('background' => '#e8e8e8', 'text' => '#000'),
);

// Buttons
// Buttons colors
$buttonColorText = '#ffffff';
$buttonBackground = '#007bff';
$buttonBackgroundHover = '#0069d9';
