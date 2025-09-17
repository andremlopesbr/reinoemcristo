# Apresentação do Ministério Infantil "Reino em Cristo Kids"

Este projeto é uma página de apresentação visual e interativa para o ministério infantil "Reino em Cristo Kids" da Igreja Reino em Cristo em Belém/PA.

## 📖 Sobre o Projeto

A página funciona como um slideshow, guiando o visitante através dos pilares fundamentais do ministério. O objetivo é comunicar de forma clara e atraente a missão, visão e valores do "Reino em Cristo Kids".

### ✨ Funcionalidades

-   **Apresentação em Slides**: Navegação intuitiva entre as seções.
-   **Design Moderno**: Interface limpa e agradável, utilizando Tailwind CSS.
-   **Responsivo**: Adaptável a diferentes tamanhos de tela (desktop, tablet e mobile).
-   **Navegação por Teclado**: Use as setas direcionais (esquerda e direita) para navegar pelos slides.
-   **Layout Fixo**: Cabeçalho e rodapé fixos, com conteúdo rolável entre eles.
-   **Scrollbar Discreto**: Barra de rolagem com estilo mais sutil.
-   **Progressive Web App (PWA)**: Experiência de aplicativo nativo, com instalação na tela inicial e suporte offline básico.

### 🎨 Seções da Apresentação

1.  **Boas-Vindas**: Tela inicial com o logo e nome do ministério.
2.  **Nossa Missão**: O propósito central do ministério.
3.  **Nossa Visão**: O que se almeja para as crianças.
4.  **Quem Somos**: Detalhes sobre a identidade e as atividades.
5.  **Faixas Etárias**: Divisão das turmas por idade.
6.  **Elementos-Chave**: Os pilares do ensino e da adoração.
7.  **Frutos Esperados**: Os resultados almejados na vida das crianças.
8.  **Convite Final**: Um chamado para fazer parte do ministério.

## 📁 Estrutura de Arquivos

O projeto agora está organizado da seguinte forma:

```
reinoemcristo/
├── .git/
├── .gitignore
├── index.php
├── manifest.json
├── README.md
├── service-worker.js
├── setup.sh
└── src/
    ├── css/
    │   ├── style.css
    │   └── tailwind.css
    ├── image/
    │   └── ... (imagens do projeto)
    └── js/
        └── main.js
```

-   `index.php`: O arquivo principal HTML, agora com links para CSS e JS externos.
-   `manifest.json`: O manifesto da aplicação web, essencial para funcionalidades PWA.
-   `service-worker.js`: O Service Worker que habilita recursos offline e caching.
-   `src/css/style.css`: Contém estilos CSS personalizados.
-   `src/css/tailwind.css`: O arquivo de entrada para o Tailwind CSS.
-   `src/js/main.js`: Contém toda a lógica JavaScript da apresentação.
-   `setup.sh`: Script para configurar o ambiente de desenvolvimento (TailwindCSS).

## 🚀 Como Configurar e Visualizar

Para configurar o ambiente de desenvolvimento e visualizar a página:

1.  **Clone este repositório.**

2.  **Execute o script de configuração:**
    Abra seu terminal na raiz do projeto e execute:
    ```bash
    bash setup.sh
    ```
    Este script irá:
    -   Inicializar o `npm` (se necessário).
    -   Instalar o Tailwind CSS e suas dependências.
    -   Gerar os arquivos de configuração `tailwind.config.js` e `postcss.config.js`.
    -   Criar o arquivo `src/css/tailwind.css`.

3.  **Configure o `tailwind.config.js` (Passo Manual Importante!):**
    Abra o arquivo `tailwind.config.js` (na raiz do projeto) e atualize a seção `content` para que o Tailwind saiba onde procurar suas classes. Exemplo:
    ```javascript
    /** @type {import('tailwindcss').Config} */
    module.exports = {
      content: [
        "./index.php",
        "./src/**/*.{html,js,php}",
      ],
      theme: {
        extend: {},
      },
      plugins: [],
    }
    ```

4.  **Atualize o `index.php` (Passo Manual Importante!):**
    Certifique-se de que o `index.php` esteja linkando para o arquivo CSS gerado pelo Tailwind. Adicione (ou verifique se já existe) a seguinte linha no `<head>`:
    ```html
    <link rel="stylesheet" href="/src/css/tailwind.output.css">
    ```
    (O link para o CDN do Tailwind CSS já foi removido).

5.  **Gerar o CSS do Tailwind (Modo Desenvolvimento):**
    Para que as alterações do Tailwind CSS sejam aplicadas durante o desenvolvimento, execute o seguinte comando em um terminal **separado**:
    ```bash
    npx tailwindcss -i ./src/css/tailwind.css -o ./src/css/tailwind.output.css --watch
    ```
    Este comando irá observar seus arquivos e reconstruir o `tailwind.output.css` automaticamente.

6.  **Visualizar a Página:**
    Abra o arquivo `index.php` em um navegador de sua preferência. Não é necessário um servidor web para visualizar a página.

## 🌐 Progressive Web App (PWA)

Este projeto foi configurado como um Progressive Web App (PWA), oferecendo uma experiência de usuário aprimorada, similar a um aplicativo nativo. Isso inclui:

-   **Instalabilidade:** Os usuários podem adicionar o aplicativo à tela inicial de seus dispositivos.
-   **Suporte Offline Básico:** Graças ao `service-worker.js`, o aplicativo pode carregar recursos básicos mesmo sem conexão com a internet.
-   **Experiência Imersiva:** O `manifest.json` define como o aplicativo aparece e se comporta quando instalado.

**Importante:** Para que as funcionalidades PWA funcionem completamente (especialmente a instalabilidade), o aplicativo deve ser servido via **HTTPS**.

## 📦 Gerando CSS para Produção

Quando for implantar o projeto, gere o CSS otimizado e minificado com o seguinte comando:

```bash
npx tailwindcss -i ./src/css/tailwind.css -o ./src/css/tailwind.output.css --minify
```

## 🛠️ Tecnologias Utilizadas

-   **HTML5**
-   **Tailwind CSS**: Gerenciado localmente para estilização rápida e moderna.
-   **JavaScript**: Para a lógica de navegação dos slides e funcionalidades PWA.
-   **Progressive Web App (PWA)**: Com `manifest.json` e `service-worker.js` para instalabilidade e offline.
-   **Google Fonts**: Para a tipografia (família 'Poppins').

## 🤖 Prompt para Interações com IA

Para futuras interações com a IA, um arquivo `GEMINI_PROMPT.md` será criado com as diretrizes e padrões do projeto para garantir consistência.

---

*Ministério Infantil da Igreja Reino em Cristo – Belém/PA*