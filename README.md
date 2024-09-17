# Projeto Biblioteca

## Descrição

Este projeto é uma aplicação de biblioteca desenvolvida em CodeIgniter. Ele permite gerenciar autores, livros e leitores, oferecendo funcionalidades como visualização de dados, consulta por ID e condição, inserção de novos dados e ordenação. O projeto tem como objetivo demonstrar o uso de práticas de desenvolvimento com CodeIgniter e o gerenciamento de operações básicas em um banco de dados.

## Funcionalidades

- **Conexão com o Banco de Dados**
  - Testa e estabelece uma conexão com o banco de dados.
  
- **Gestão de Autores**
  - Exibir todos os autores.
  - Consultar autores por ID e nome.
  - Inserir novos autores.
  - Ordenar autores por ID em ordem crescente ou decrescente.
  
- **Gestão de Livros**
  - Exibir todos os livros.
  - Consultar livros por ID e título.
  - Inserir novos livros.
  - Ordenar livros por título em ordem crescente ou decrescente.
  
- **Gestão de Leitores**
  - Exibir todos os leitores.
  - Consultar leitores por ID e nome.
  - Inserir novos leitores.
  - Ordenar leitores por ID em ordem crescente ou decrescente.

## Estrutura do Projeto

- **Controladores**
  - `AutorController`: Gerencia operações relacionadas a autores.
  - `LivroController`: Gerencia operações relacionadas a livros.
  - `LeitorController`: Gerencia operações relacionadas a leitores.

- **Modelos**
  - `Autor`: Modelo para operações com autores.
  - `Livro`: Modelo para operações com livros.
  - `Leitor`: Modelo para operações com leitores.

## Requisitos

- PHP 7.4 ou superior
- CodeIgniter 4.x
- Banco de Dados MySQL

## Instalação

1. Clone este repositório para o seu ambiente local:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   
2. Navegue até o diretório do projeto:
   ```bash
   cd nome-do-repositorio
4. Instale as dependências do projeto:
   ```bash
   composer install

6. Configure o arquivo .env com as suas credenciais do banco de dados:
   ```bash
   database.default.hostname = localhost
   database.default.database = nome_do_banco
   database.default.username = seu_usuario
   database.default.password = sua_senha

8. Execute as migrações para criar as tabelas no banco de dados:
   ```bash
   php spark migrate
10. Inicie o servidor de desenvolvimento:

Rotas
Conexão com o Banco de Dados

GET /autor/testConexao

 - **Autores**

GET /autor: Exibir todos os autores.  
GET /autor/(:num): Consultar autor por ID.  
GET /autor/search/(:segment): Consultar autor por nome.  
POST /autor: Inserir um novo autor.
GET /autor/order/(:any)/(:any): Ordenar autores.  

 - **Livros**

GET /livro: Exibir todos os livros.  
GET /livro/(:num): Consultar livro por ID.  
GET /livro/search/(:segment): Consultar livro por título.  
POST /livro: Inserir um novo livro.  
GET /livro/order/(:any)/(:any): Ordenar livros.  

- **Leitores**

GET /leitor: Exibir todos os leitores.  
GET /leitor/(:num): Consultar leitor por ID.  
GET /leitor/search/(:segment): Consultar leitor por nome.  
POST /leitor: Inserir um novo leitor.  
GET /leitor/order/(:any)/(:any): Ordenar leitores.  

 - Contribuição  

Se desejar contribuir para este projeto, por favor, faça um fork do repositório e envie um pull request com suas alterações.
