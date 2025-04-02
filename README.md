# inventario-stardew

Introdução

O inventário é uma tabela onde tem linhas e colunas para fazer uma organização de itens do jogo, organizar os itens do usuário como no stardew valley, podemos usar o inventário para guardar os itens essenciais como picareta, regador, enxada, espada, vara-de-pesca e comidas.

Os sistemas que utilizam de um inventário seria o que tem um banco de dados onde podemos armazenar os itens, um exemplo são os inventários utilizados em jogos, outro exemplo é o inventário de empresas onde se cria um patrimônio da empresa,e ele possui um número que está identificando onde ele está. 

Essa funcionalidade é importante pois é uma forma ótima de organizar os pertences que possuímos, desde jogos a vida empresarial.

2. Implementação
front-end
Ferramentas Utilizadas:
HTML: Estrutura a página com elementos como título, parágrafo e botão.


CSS: Estiliza a página, controlando fundo, cores, fontes e o layout.


Editor de Texto/IDE: Visual Studio Code


Layout e Interface:
O layout usa CSS Flexbox para centralizar o conteúdo na tela.


A interface é simples, com um fundo de imagem, um bloco centralizado contendo o título, descrição e um botão de login.


A página não segue um esquema de linhas e colunas tradicionais, mas organiza os elementos de forma centralizada e clara.
back-end
Ferramentas Utilizadas:
HTML: Estrutura a página (campos de entrada, botão, etc.).


CSS: Estiliza a página (layout, cores, fontes).


PHP: Processa a validação do login (verifica se o usuário e senha são válidos).


Editor de Texto/IDE: Visual Studio Code.


Código PHP:
Captura os dados do formulário: Quando o formulário é enviado, o PHP pega os dados do usuário e senha.


Validação de Login: Verifica se os dados fornecidos correspondem a um usuário e senha válidos. Se sim, redireciona para a página do inventário; se não, exibe uma mensagem de erro.


Exemplo de validação:


3. Execução
Para executar o projeto:
Instale o XAMPP (ou similar), se necessário.


Coloque os arquivos do projeto na pasta htdocs do XAMPP (ou pasta correspondente).


Abra o navegador e acesse http://localhost/stardew-inventario/index.php.


Hierarquia de diretórios
index.php: Página inicial (link para login)
login.php: Página de login
inventario.php: Exibição do inventário
adicionar.php: Página de adição de itens
item.php: Definição da classe Item
