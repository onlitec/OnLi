<?php
/**
 * fix_decode.php
 *
 * Decodifica valores de overwrite_trans que estão com HTML entities.
 */
require __DIR__ . '/htdocs/master.inc.php';

// Acesso ao banco
global $db;

$sqlSel = "SELECT rowid, transvalue FROM " . MAIN_DB_PREFIX . "overwrite_trans";
$res = $db->query($sqlSel);
if (!$res) {
    echo "Erro na seleção: " . $db->lasterror() . "\n";
    exit(1);
}
while ($o = $db->fetch_object($res)) {
    $decoded = html_entity_decode($o->transvalue, ENT_QUOTES, 'UTF-8');
    if ($decoded !== $o->transvalue) {
        $sqlUpd = "UPDATE " . MAIN_DB_PREFIX . "overwrite_trans SET transvalue='" . $db->escape($decoded) . "' WHERE rowid=" . ((int) $o->rowid);
        $db->query($sqlUpd);
    }
}
echo "Decodificação concluída.\n";
