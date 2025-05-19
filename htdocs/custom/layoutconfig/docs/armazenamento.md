# Armazenamento de Configurações

## Abordagens Possíveis

1. **Banco de Dados (`llx_const`)**
   - Cada variável de tema (cor, dimensão) salva como constante.
   - Simples de ler e gravar via API de configuração do Dolibarr.

2. **Arquivo Gerado (`theme_vars.inc.php`)**
   - Gerar um arquivo PHP com CSS dinâmico:
     ```php
     <?php header('Content-Type: text/css'); ?>
     :root {
       --color-primary: #...
       --horizonte-header-height: 4rem;
     }
     ```
   - Carregado automaticamente por `style.css.php` do tema.

3. **JSON Persistido**
   - Gravar todas as variáveis em um JSON no sistema de arquivos.
   - PHP lê e converte para CSS em `head_htmlhead()`.

## Fluxo de Salvamento

1. Usuário altera valores na UI → JS envia pedido AJAX para endpoint do módulo.
2. PHP valida e grava no método escolhido (const ou arquivo).
3. Resposta AJAX retorna status e, em caso de sucesso, aplica novamente no preview.

## Carregamento no Tema

- Hook em `top_htmlhead()` ou `add_css()` para:
  - Ler constantes do banco ou arquivo CSS.
  - Injetar `<link rel="stylesheet" href="/.../theme_vars.inc.php">`.

## Cache e Performance

- Evitar leituras repetidas; usar cache em memória (APCu) ou cache de arquivo.
- Invalidar cache ao salvar novas configurações. 