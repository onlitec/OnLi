<?php
/**
 * funções auxiliares do módulo LayoutConfig
 */

/**
 * Cabeçalhos da área administrativa
 */
function layoutconfigAdminPrepareHead()
{
    global $langs, $conf;
    $langs->load('layoutconfig@layoutconfig');
    $h = 0;
    $head = array();
    $head[$h][0] = dol_buildpath('/custom/layoutconfig/admin/layoutconfig_setup.php', 1);
    $head[$h][1] = $langs->trans('Settings');
    $h++;
    return $head;
} 