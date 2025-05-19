# Protótipo de Interface do Módulo

## Estrutura de Páginas

1. **Configuração Geral**
   - Aba **Cores**
   - Aba **Dimensões**
   - Aba **Presets**
   - Aba **Importar/Exportar**

2. **Preview**
   - Área `<div id="preview">` que mostra o tema Horizonte aplicando as variáveis CSS em tempo real.

## Componentes de UI

- **Color Picker** para cada variável (usar bibliotecas como [Pickr](https://github.com/Simonwep/pickr)).
- **Sliders/Inputs** para ajustar valores numéricos (altura `header`, padding, gap).
- **Select/Dropdown** para escolher presets pré-definidos.
- **Botões**: "Salvar", "Restaurar Padrão", "Recarregar Preview".

## Comportamento em Tempo Real

- Ao alterar um valor, aplicar imediatamente via JS:
  ```js
  document.documentElement.style.setProperty('--color-primary', novaCor);
  document.documentElement.style.setProperty('--horizonte-header-height', novaAltura);
  ```
- Preview reflete alterações sem recarregar a página.

## Tecnologias Sugeridas

- **Front-end**: jQuery ou framework leve (Vue.js ou Alpine.js).
- **Back-end**: AJAX em PHP para persistência e carregamento de configurações.
- **Estilos**: CSS customizado + variáveis CSS (`:root`). 