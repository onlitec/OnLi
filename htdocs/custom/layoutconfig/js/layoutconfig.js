document.addEventListener('DOMContentLoaded', function () {
  // Inicializa Pickr para cada botão de cor
  document.querySelectorAll('.pickr-btn').forEach(function (btn) {
    var varName = btn.getAttribute('data-var');
    var initial = getComputedStyle(document.documentElement).getPropertyValue(varName).trim();
    var pickr = Pickr.create({
      el: btn,
      theme: 'classic',
      default: initial || '#ffffff',
      components: {
        preview: true,
        hue: true,
        interaction: {
          input: true,
          save: true
        }
      }
    });
    pickr.on('save', function (color) {
      var hex = color.toHEXA().toString();
      document.documentElement.style.setProperty(varName, hex);
      pickr.hide();
      // TODO: enviar via AJAX para salvar no servidor
    });
  });
});

// Inicializa inputs de dimensão
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.dim-input').forEach(function (input) {
    var varName = input.getAttribute('data-var');
    var initial = getComputedStyle(document.documentElement).getPropertyValue(varName).trim();
    if (initial.endsWith('rem')) {
      input.value = parseFloat(initial);
    } else if (initial.endsWith('px')) {
      input.value = parseFloat(initial) / 16;
    }
    input.addEventListener('change', function () {
      var val = input.value;
      if (isNaN(val)) return;
      document.documentElement.style.setProperty(varName, val + 'rem');
      // TODO: enviar via AJAX para salvar no servidor
    });
  });
});

// Inicializa presets
var layoutPresets = {};

function refreshPresetOptions() {
  var select = document.getElementById('preset-select');
  if (!select) return;
  select.innerHTML = '';
  Object.keys(layoutPresets).forEach(function (key) {
    var opt = document.createElement('option');
    opt.value = key;
    opt.text = key;
    select.appendChild(opt);
  });
}

document.addEventListener('DOMContentLoaded', function () {
  // Captura valores iniciais como preset default
  var defaultPreset = {};
  Object.keys(layoutPresets).forEach(function(k) { delete layoutPresets[k]; });
  document.querySelectorAll('[data-var]').forEach(function(elem) {
    var varName = elem.getAttribute('data-var');
    defaultPreset[varName] = getComputedStyle(document.documentElement).getPropertyValue(varName).trim();
  });
  layoutPresets['default'] = defaultPreset;
  refreshPresetOptions();

  // Apply Preset
  document.getElementById('apply-preset').addEventListener('click', function () {
    var key = document.getElementById('preset-select').value;
    var preset = layoutPresets[key];
    if (preset) {
      Object.keys(preset).forEach(function (varName) {
        document.documentElement.style.setProperty(varName, preset[varName]);
      });
    }
  });

  // Save Preset
  document.getElementById('save-preset').addEventListener('click', function () {
    var name = document.getElementById('new-preset-name').value.trim();
    if (!name) return alert('Nome do preset é obrigatório');
    var current = {};
    Object.keys(layoutPresets['default']).forEach(function (varName) {
      current[varName] = getComputedStyle(document.documentElement).getPropertyValue(varName).trim();
    });
    layoutPresets[name] = current;
    refreshPresetOptions();
    alert('Preset "' + name + '" salvo');
  });

  // Delete Preset
  document.getElementById('delete-preset').addEventListener('click', function () {
    var key = document.getElementById('preset-select').value;
    if (key === 'default') return alert('Não é possível excluir preset padrão');
    delete layoutPresets[key];
    refreshPresetOptions();
    alert('Preset "' + key + '" removido');
  });

  // Export Presets
  document.getElementById('btn-export').addEventListener('click', function () {
    var txt = document.getElementById('export-json');
    txt.value = JSON.stringify(layoutPresets, null, 2);
  });

  // Import Presets
  document.getElementById('btn-import').addEventListener('click', function () {
    var input = document.getElementById('import-json').value;
    try {
      var imported = JSON.parse(input);
      layoutPresets = imported;
      refreshPresetOptions();
      alert('Presets importados com sucesso');
    } catch (e) {
      alert('JSON inválido');
    }
  });
}); 