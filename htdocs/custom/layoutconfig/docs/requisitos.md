# Requisitos do Módulo de Configuração de Layout

## Objetivo

- Prover uma interface amigável para personalização do tema Horizonte.
- Permitir alterações de cores, dimensões e presets sem editar arquivos diretamente.
- Mostrar preview em tempo real das mudanças.

## Funcionalidades Principais

- **Color pickers** para variáveis CSS (ex.: `--color-primary`, `--color-bg`).
- **Sliders/inputs** para dimensões (altura do header, larguras de containers, espaçamento).
- **Seleção de presets** de skins pré-configuradas.
- **Importação/Exportação** de presets (formato JSON).
- **Histórico** e restauração de configurações anteriores.
- **Permissões** de acesso: apenas administradores podem alterar o layout.

## Integração Técnica

- Armazenar valores no banco de dados (`llx_const`) ou em arquivo gerado (`theme_vars.inc.php`).
- Hook em `main.inc.php` ou `top_htmlhead()` para injetar CSS gerado dinamicamente.
- API AJAX para salvar, restaurar e carregar configurações. 