# Diretrizes para Interações com a IA neste Projeto

Este documento estabelece as diretrizes e padrões a serem seguidos pela IA ao interagir com o projeto "Reino em Cristo Kids". O objetivo é garantir consistência, qualidade e aderência às melhores práticas.

## 1. Convenções Gerais

*   **Linguagem:** Todas as interações e saídas de código devem ser em Português (pt_BR).
*   **Estilo de Código:** Mantenha o estilo de código existente (indentação, espaçamento, quebra de linha, etc.).
*   **Nomenclatura:** Siga os padrões de nomenclatura já estabelecidos no projeto (camelCase para JS, kebab-case para CSS, etc.).
*   **Comentários:** Adicione comentários apenas quando estritamente necessário para explicar lógica complexa ou decisões de design. Comentários devem ser concisos e claros.

## 2. Estrutura de Arquivos

*   **Organização:** Mantenha a estrutura de arquivos atual:
    *   `index.php`: Arquivo principal HTML.
    *   `src/css/`: Para arquivos CSS (ex: `style.css`, `tailwind.output.css`).
    *   `src/js/`: Para arquivos JavaScript (ex: `main.js`).
    *   `src/image/`: Para recursos de imagem.
*   **Novos Arquivos:** Ao criar novos arquivos, posicione-os nos diretórios apropriados.

## 3. Tecnologias Específicas

### HTML (`index.php`)

*   **Semântica:** Utilize tags HTML semânticas.
*   **Acessibilidade:** Considere a acessibilidade ao adicionar novos elementos.
*   **Estrutura:** Mantenha a estrutura de cabeçalho, conteúdo principal (`main`) e rodapé fixos.

### CSS (`src/css/style.css`, `src/css/tailwind.output.css`)

*   **Tailwind CSS:** Priorize o uso de classes utilitárias do Tailwind CSS.
*   **CSS Personalizado:** Para estilos que não podem ser facilmente alcançados com Tailwind, adicione CSS personalizado em `src/css/style.css`.
*   **Scrollbar:** Mantenha o estilo de scrollbar discreto.

### JavaScript (`src/js/main.js`)

*   **Vanilla JS:** Utilize JavaScript puro (Vanilla JS), evitando bibliotecas ou frameworks adicionais, a menos que explicitamente solicitado e justificado.
*   **Modularidade:** Organize o código em funções bem definidas.
*   **Performance:** Otimize o código JavaScript para performance, especialmente em dispositivos móveis.
*   **Event Listeners:** Gerencie event listeners de forma eficiente.

## 4. Processo de Desenvolvimento

*   **Configuração:** Utilize o script `setup.sh` para configurar o ambiente de desenvolvimento.
*   **Build do Tailwind:** Lembre-se de que o CSS do Tailwind precisa ser gerado (`npx tailwindcss ...`).
*   **Testes:** Se forem introduzidos testes no futuro, siga os padrões estabelecidos.

## 5. UI/UX

*   **Responsividade:** Garanta que todas as alterações sejam responsivas e funcionem bem em diferentes tamanhos de tela.
*   **Transições:** Mantenha as transições suaves para elementos interativos (ex: slides, swipes).
*   **Feedback Visual:** Forneça feedback visual adequado para interações do usuário.

Ao seguir estas diretrizes, a IA contribuirá para a manutenção de um projeto coeso e de alta qualidade.
