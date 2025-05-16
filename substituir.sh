#!/bin/bash
files=$(find . -type f)
total=$(echo "$files" | wc -l)
count=0

echo "Total de arquivos a processar: $total"
while IFS= read -r file; do
  ((count++))
  echo "[$count/$total] Processando: $file"
  sed -i 's/OnLi/OnLi/g' "$file"
done <<< "$files"
