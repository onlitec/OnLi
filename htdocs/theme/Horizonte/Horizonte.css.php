<?php header("Content-Type: text/css; charset=UTF-8"); ?>
/* OnLi Horizonte Theme - Horizonte Theme */
/* Removendo o Bootstrap para evitar conflitos de CSS */
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");

/* Reset e estilos base - versão mais leve */
body {
    margin: 0;
    padding: 0;
    font-size: 100%;
}

body {
    font-family: 'Roboto', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-size: 14px;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
}

/* Corrigindo cores e contrastes */
.vmenu, .vmenu .menu_contenu, .menu_contenu_icone, .menu_top, .menu_top_logo {
    background-color: #fff !important;
}

.login_block {
    background-color: #f8f9fa !important;
    border-radius: 4px;
    padding: 10px;
    margin-top: 10px;
}

.login_block_other {
    background-color: #fff !important;
}

/* Corrigindo fundo da página */
body, body.bodylogin, body.bodylogin div.login_main, div.backgroundsemitransparent, div.login_main {
    background-color: #fff !important;
}

/* Corrigindo cores de fundo */
.mainmenu, .mainmenu a, .mainmenu a.tmenu, .mainmenu a.tmenusel {
    color: #212529 !important;
}

.mainmenu a.tmenu:hover, .mainmenu a.tmenusel {
    background-color: #e9ecef !important;
    color: #007bff !important;
}

/* Corrigindo cores de fundo para tabelas */
table.noborder, table.formdoc, div.tabBar table.border {
    background-color: #fff !important;
}

/* Corrigindo cores de fundo para divs */
div.tabBar, div.fiche, div.div-table-responsive, div.div-table-responsive-no-min, div.login_block, div.login_block_other, div.pagination, div.tabsAction, div.underbanner {
    background-color: #fff !important;
}

/* Garantindo que todos os elementos de fundo tenham cor branca */
.page-container, main, .main-content, #id-container, #id-right, #id-left {
    background-color: #fff !important;
}

/* Estilos globais para tabelas e formulários */
table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 1rem;
}

td, th {
    padding: 8px;
    vertical-align: middle;
    border: 1px solid #dee2e6;
}
input, select, textarea {
    padding: 6px 12px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    width: auto;
    max-width: 100%;
}
.button, input[type="submit"], input[type="button"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}
.button:hover, input[type="submit"]:hover, input[type="button"]:hover {
    background-color: #0069d9;
}

/* Estilos para o menu principal */
.tmenudiv {
    background-color: #fff !important;
    border-bottom: 1px solid #dee2e6;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.tmenu {
    display: table !important;
    background-color: transparent !important;
    padding: 0.5rem 1rem;
    width: 100%;
}

/* Estilos para a área inicial */
.fichehalfleft, .fichehalfright {
    float: left;
    width: 50%;
    padding: 15px;
    box-sizing: border-box;
}

/* Corrigindo layout da área principal */
.fiche {
    margin: 0;
    padding: 15px;
    background-color: #fff;
}

/* Corrigindo problemas de layout em tabelas */
table.noborder {
    border-collapse: separate;
    border-spacing: 0;
    border: none;
    margin-bottom: 15px;
}

table.noborder td, table.noborder th {
    border: none;
}

table.liste th {
    background-color: #f8f9fa;
    color: #495057;
    font-weight: 600;
}

/* Corrigindo alinhamento de formulários */
form.formconfirm {
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 4px;
    margin-bottom: 15px;
}

/* Corrigindo layout de tabelas em admin */
table.allwidth {
    width: 100%;
}

/* Corrigindo layout de tabelas em configuração */
table.tableforfield {
    border-collapse: separate;
    border-spacing: 0;
    border: none;
}

table.tableforfield tr.liste_titre td {
    background-color: #f8f9fa;
    font-weight: 600;
    border-bottom: 2px solid #dee2e6;
    padding: 8px;
}

table.tableforfield tr.oddeven td {
    padding: 8px;
    border-bottom: 1px solid #dee2e6;
}

.div-table-responsive {
    overflow-x: auto;
}

/* Melhorando tabelas padrão */
table.liste {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

table.liste th, table.liste td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

table.liste thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    background-color: #f8f9fa;
}

@media (max-width: 767px) {
    .fichehalfleft, .fichehalfright {
        width: 100%;
        float: none;
    }
}

.dashboardhome .boxstatsindicator {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12);
    margin-bottom: 20px;
    padding: 15px;
    overflow: hidden;
}

.dashboardhome .boxstatsindicator .boxstats {
    text-align: center;
    padding: 10px;
}

.dashboardhome .boxstatsindicator .boxstats .boxstatsprimary {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
}

.dashboardhome .boxstatsindicator .boxstats .boxstatssecondary {
    font-size: 14px;
    color: #6c757d;
}
.tmenu a, .tmenu span {
    color: #212529;
    margin-right: 1rem;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 0.75rem;
    border-radius: 4px;
    transition: background-color 0.2s;
    display: inline-block;
}
.tmenu a:hover {
    background-color: rgba(255,255,255,0.1);
    color: #007bff;
}
.tmenu a.tmenusel {
    background-color: rgba(255,255,255,0.2);
    color: #007bff;
}

/* Estilos para dashboard e tabelas de configuração */
.div-table-responsive-no-min {
    margin: 1rem 0;
    background-color: #fff;
    border-radius: 0;
    box-shadow: none;
    padding: 0;
    overflow-x: auto;
    display: block;
    width: 100%;
}

.editmode.tableforfield {
    width: 100%;
    border: none;
    margin-top: 1rem;
}

.editmode.tableforfield tr.liste_titre {
    background-color: #f8f9fa;
    border-bottom: 2px solid #e9ecef;
}

.editmode.tableforfield tr.liste_titre td {
    font-weight: 600;
    font-size: 1.1rem;
    padding: 1rem;
    color: #495057;
}

/* Corrigindo o layout das linhas da tabela */
.editmode.tableforfield tr.oddeven {
    border-bottom: 1px solid #e9ecef;
    background-color: #fff;
}

/* Removendo estilos que podem estar causando problemas */
.editmode.tableforfield tr.oddeven,
.editmode.tableforfield tr.liste_titre,
.editmode.tableforfield tr {
    display: table-row !important;
}

.editmode.tableforfield tr.oddeven td {
    padding: 0.75rem 1rem;
    vertical-align: middle;
    display: table-cell !important;
    border: 1px solid #dee2e6;
}

.editmode.tableforfield tr.oddeven td:first-child {
    font-weight: 500;
    color: #495057;
}

/* Ajustando largura das colunas */
.editmode.tableforfield td.titlefield,
.editmode.tableforfield td.titlefieldcreate,
.editmode.tableforfield td.titlefieldconnect,
.editmode.tableforfield td.titlefieldmiddle {
    width: 25% !important;
}

.editmode.tableforfield tr.oddeven:hover {
    background-color: #f8f9fa;
}

/* Estilos para botões on/off */
.switchstatus, .valigntextmiddle {
    vertical-align: middle;
}

/* Estilos para seleção de temas */
.img-skinthumb {
    border-radius: 4px;
    transition: transform 0.2s;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    max-width: 150px;
    height: auto;
}

.img-skinthumb:hover {
    transform: scale(1.05);
}

/* Estilos para inputs e controles */
.flat {
    border-radius: 4px !important;
}

select.flat, input.flat {
    border: 1px solid #ced4da;
    padding: 6px 12px;
}

/* Correção para alinhamento de formulários */
form {
    margin: 0;
}

/* Estilos para cabeçalhos e títulos */
.titlefield, .titlefieldmiddle {
    font-weight: 600;
    color: #495057;
}

/* Estilos para botões de ação */
.butAction {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    margin: 0 4px;
}

.butAction:hover {
    background-color: #0069d9;
    color: white;
    text-decoration: none;
}

/* Estilos para mensagens e alertas */
.info, .warning, .error {
    padding: 15px;
    margin: 10px 0;
    border-radius: 4px;
}

.info {
    background-color: #d1ecf1;
    color: #0c5460;
}

.warning {
    background-color: #fff3cd;
    color: #856404;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
}
