#!/bin/bash

echo "Iniciando a configuração do TailwindCSS..."

# 1. Inicializar o npm (se ainda não o fez)
if [ ! -f "package.json" ]; then
  echo "Inicializando npm..."
  npm init -y
else
  echo "package.json já existe. Pulando inicialização do npm."
fi

# 2. Instalar TailwindCSS e suas dependências
echo "Instalando TailwindCSS, PostCSS e Autoprefixer..."
npm install -D tailwindcss postcss autoprefixer

# 3. Gerar os arquivos de configuração do TailwindCSS e PostCSS
if [ ! -f "tailwind.config.js" ]; then
  echo "Gerando tailwind.config.js e postcss.config.js..."
  npx tailwindcss init -p
else
  echo "tailwind.config.js já existe. Pulando geração de arquivos de configuração."
fi

# 4. Criar o diretório src/css
echo "Criando diretório src/css..."
mkdir -p src/css

# 5. Criar o arquivo CSS de entrada do Tailwind
if [ ! -f "src/css/tailwind.css" ]; then
  echo "Criando src/css/tailwind.css..."
  echo -e "@tailwind base;\n@tailwind components;\n@tailwind utilities;" > src/css/tailwind.css
else
  echo "src/css/tailwind.css já existe. Pulando criação do arquivo de entrada."
fi

echo "\n-------------------------------------------------------------------"
echo "PRÓXIMOS PASSOS IMPORTANTES:"
echo "-------------------------------------------------------------------"
echo "1. Edite 'tailwind.config.js':"
echo "   Abra 'tailwind.config.js' e atualize a seção 'content' para incluir seus arquivos HTML/PHP/JS:"
echo "   content: [
     \"./index.php\",
     \"./src/**/*.{html,js,php}\",
   ],
   Isso garante que o TailwindCSS saiba onde procurar suas classes."
echo "\n2. Atualize 'index.php':"
echo "   Substitua o link do CDN do TailwindCSS (que já foi removido) pela referência ao seu novo arquivo CSS gerado:"
echo "   <link rel=\"stylesheet\" href=\"/src/css/tailwind.output.css\">"

echo "3. Para desenvolver \(observar alterações\):"
echo "   Execute em um terminal separado: npx tailwindcss -i ./src/css/tailwind.css -o ./src/css/tailwind.output.css --watch"

echo "4. Para produção (gerar CSS minificado):"
echo "   Execute: npx tailwindcss -i ./src/css/tailwind.css -o ./src/css/tailwind.output.css --minify"
echo "-------------------------------------------------------------------"

echo "Configuração inicial do TailwindCSS concluída!"
