<?php
include_once DOL_DOCUMENT_ROOT.'/core/modules/OnLiModules.class.php';

/**
 *  Classe de definição do módulo LayoutConfig
 */
class modLayoutconfig extends OnLiModules
{
    public function __construct($db)
    {
        parent::__construct($db);
        
        // ID do módulo (deve ser único)
        $this->numero = 500001; // Mudei para 500001 para evitar conflito com outros módulos
        
        // Chave usada para identificar o módulo
        $this->rights_class = 'layoutconfig';
        
        // Família do módulo
        $this->family = 'Custom';
        
        // Nome do módulo
        $this->name = 'layoutconfig';
        
        // Descrição do módulo
        $this->description = 'Módulo para customização de layout do tema Horizonte.';
        
        // Versão do módulo
        $this->version = '1.0.0';
        
        // Nome da constante usada para habilitar/desabilitar o módulo
        $this->const_name = 'MAIN_MODULE_'.strtoupper($this->name);
        
        // Ícone do módulo
        $this->picto = DOL_URL_ROOT . '/custom/layoutconfig/img/object_layoutconfig.png';

        // Páginas de configuração
        $this->config_page_url = array('layoutconfig_setup.php@custom/layoutconfig');

        // Permissões
        $r=0;
        $this->rights[$r][0] = $this->numero+1;
        $this->rights[$r][1] = 'Admin layoutconfig';
        $this->rights[$r][2] = 'w';
        $this->rights[$r][3] = 'layoutconfig_admin';
        $this->rights[$r][4] = 1;

        // Diretórios a criar no enable
        $this->dirs = array('/layoutconfig/custom');
        
        // Dependências
        $this->need_dolibarr_version = array(12, 0); // Versão mínima do Dolibarr
        $this->phpmin = array(7, 4); // Versão mínima do PHP
    }

    public function init($options = '')
    {
        $sql = array();
        return parent::init($options);
    }

    public function remove($options = '')
    {
        $sql = array();
        return parent::remove($options);
    }
}
