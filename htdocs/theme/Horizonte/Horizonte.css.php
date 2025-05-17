<?php header("Content-Type: text/css; charset=UTF-8"); ?>
/* OnLi Horizonte Theme - Horizonte Theme */
/* Removendo o Bootstrap para evitar conflitos de CSS */
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");
/* Import FontAwesome so icons render correctly */
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");

/* Reset e estilos base - versão mais leve */
body {
    margin: 0;
    padding: 0;
    font-size: 100%;
}

body {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    line-height: 1.5;
    color: var(--color-text);
    background-color: var(--color-bg);
}

/* Modern theme custom properties */
:root {
    --color-primary: #3b82f6;
    --color-primary-dark: #2563eb;
    --color-secondary: #06b6d4;
    --color-accent: #f59e0b;
    --color-bg: #f3f4f6;
    --color-text: #1f2937;
    --horizonte-header-height: 4rem;
}

/* Adiciono regras de layout e container após o :root */
/* Layout geral: containers e colunas */
#id-container {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1rem;
    margin-top: 5rem !important;
}
#id-left {
    flex: 0 0 250px;
}
#id-right {
    flex: 1;
}
/* Container principal centralizado */
.page-container, main, .main-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem;
}
/* Ajuste de imagens */
img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
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
.tmenudiv, .tmenudiv ul {
    margin: 0; padding: 0; list-style: none;
    display: flex; flex-wrap: wrap; align-items: center; justify-content: center;
}
.tmenudiv ul li {
    margin: 0 1rem 0 0;
}

.tmenudiv {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
    padding: 1rem 1rem !important;
    min-height: 4rem !important;
    background-color: var(--color-primary) !important;
    box-sizing: border-box !important;
    z-index: 1000 !important;
    height: var(--horizonte-header-height) !important;
}
.tmenu a, .tmenu span {
    color: #fff !important;
    margin-right: 1rem;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    transition: background-color 0.2s;
}
.tmenu a:hover {
    background-color: var(--color-primary-dark) !important;
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

/* Buttons */
.btn, button, input[type="submit"], .butaction {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background-color: var(--color-secondary) !important;
    color: #fff !important;
    border-radius: 0.375rem;
    border: none;
    cursor: pointer;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    transition: background-color 0.2s;
}
.btn:hover, button:hover, .butaction:hover {
    background-color: #0284c7 !important;
}

/* Sidebar vmenu modern */
.vmenu {
    background-color: #fff;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 0.5rem 1rem !important;
}
.vmenu a, .vmenu span {
    display: block;
    color: var(--color-text) !important;
    padding: 0.75rem 1rem;
    border-radius: 0.375rem;
    transition: background-color 0.2s;
}
.vmenu a:hover, .vmenu span:hover {
    background-color: var(--color-bg) !important;
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

/* Horizontal menu for getmenudiv (mobile/tablet menu) */
body.getmenudiv ul {
    display: flex !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
}
body.getmenudiv li {
    margin: 0 1rem 0 0 !important;
    padding: 0 !important;
}
body.getmenudiv li a, body.getmenudiv li span {
    display: flex !important;
    align-items: center !important;
    padding: 0.5rem 0 !important;
}

/* Ajustes personalizados de menu superior e menu esquerdo */
.tmenudiv ul li {
    flex: 0 0 auto !important;
}
.tmenudiv ul li a, .tmenudiv ul li span {
    display: inline-flex !important;
    align-items: center !important;
    height: 100% !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
.tmenudiv {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
}
/* Ajuste do bloco de login/versão no topo */
.login_block, .login_block_other {
    margin-top: 0 !important;
    background-color: var(--color-primary) !important;
    color: #fff !important;
    display: flex !important;
    align-items: center !important;
    padding: 0.25rem 1rem !important;
}
/* Reduzindo espaçamento do menu esquerdo */
.vmenu {
    padding: 0.25rem 1rem !important;
}

/* Full width override para menu superior */
body > .tmenudiv {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 !important;
    padding: 0.5rem 1rem !important;
    background-color: var(--color-primary) !important;
    box-sizing: border-box !important;
    z-index: 1000 !important;
}
/* Ajusta conteúdo principal para não ficar sob o menu */
#id-container {
    margin-top: 5rem !important;
}

/* Posiciona login_block no canto superior direito */
.login_block.usedropdown {
    position: fixed !important;
    top: 0 !important;
    right: 0 !important;
    margin: 0 !important;
    background-color: var(--color-primary) !important;
    z-index: 1001 !important;
    padding: 0.75rem 1rem !important;
    min-height: 3rem !important;
    height: var(--horizonte-header-height) !important;
}
.login_block.usedropdown .login_block_tools,
.login_block.usedropdown .login_block_other,
.login_block.usedropdown .login_block_user {
    display: inline-flex !important;
    align-items: center !important;
}
