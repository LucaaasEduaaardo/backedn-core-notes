# API Core Notes

Este repositório contém o backend de uma aplicação de gerenciamento e criação de notas, desenvolvida utilizando o framework Laravel em PHP. A API suporta operações CRUD (Criar, Ler, Atualizar e Excluir) para tarefas, além de permitir a definição de cores e a marcação de itens como favoritos.

## Índice

-   [Funcionalidades da API](#funcionalidades-da-api)
-   [Requisitos](#requisitos)
-   [Instalação](#instalação)
-   [Configuração do Banco de Dados](#configuração-do-banco-de-dados)
-   [Rodando a Aplicação](#rodando-a-aplicação)
-   [Documentação da API](#documentacão-da-api)
-   [Estrutura de Pastas](#estrutura-de-pastas)
-   [Licença](#licença)

## Funcionalidades da API

A API oferece as seguintes funcionalidades:

-   **Gerenciamento de Tarefas:**
    -   Criar, ler, atualizar e excluir notas e tarefas.
    -   Marcar uma nota como favorita.
    -   Atribuir uma cor a uma nota.

## Requisitos

Certifique-se de ter as seguintes ferramentas instaladas:

-   **PHP** (versão 8.2 ou superior)
-   **Composer** (para gerenciar dependências do PHP)
-   **PostgreSQL** (como banco de dados)

## Instalação

Siga os passos abaixo para configurar o projeto em sua máquina local.

### 1. Clonar o Repositório

Abra o terminal e execute o comando abaixo para clonar o repositório:

```bash
git clone https://github.com/LucaaasEduaaardo/backedn-core-notes.git
cd backedn-core
```

### 2. Instalar Dependências

Use o Composer para instalar as dependências do projeto:

```bash
composer install
```

### 2.1. Ativar extensions pgp

```bash
php --ini
```

verifique o caminho onde esta salvo, e garanta que essas extensões estão habilitadas
para habilitar, remova o ; do começo da linha

    extension=curl
    extension=fileinfo
    extension=mbstring
    extension=openssl
    extension=pdo_mysql
    extension=pdo_pgsql
    extension=pgsql
    extension=tokenizer
    extension=xml
    extension=ctype
    extension=json
    extension=bcmath

### 3. Configuração do Banco de Dados

O Laravel usa um arquivo `.env` para configurar o ambiente. O exemplo abaixo mostra como configurar o PostgreSQL.

#### 3.1. Configurar o arquivo `.env`

Renomeie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Abra o arquivo `.env` em um editor de texto e configure as variáveis de ambiente relacionadas ao banco de dados:

```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

#### 3.2. Criar o Banco de Dados

Certifique-se de que você tem um banco de dados PostgreSQL criado. Se não tiver, crie um com o comando:

```sql
CREATE DATABASE nome_do_banco;
```

### 4. Gerar a Chave da Aplicação

Gere a chave da aplicação Laravel com o comando:

```bash
php artisan key:generate
```

### 5. Executar as Migrações

Execute as migrações para criar as tabelas do banco de dados:

```bash
php artisan migrate
```

## Rodando a Aplicação

### 1. Iniciar o Servidor de Desenvolvimento

Para iniciar o servidor localmente, utilize o comando:

```bash
php artisan serve
```

A API estará disponível em `http://localhost:8000`.

### 2. Testar a API

Você pode usar ferramentas como [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/) para testar os endpoints da API.

> Eu usei o Postman

### 2.1 Documentação da API

## Estrutura de Pastas

A estrutura de pastas do projeto é organizada da seguinte forma:

```
frontend-core-notes/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ColorController.php   # Controlador para gerenciamento de cores
│   │   │   ├── NoteController.php    # Controlador para gerenciamento de notas
│   │   │   └── Controller.php        # Controlador base
│   │   └── Resources/
│   ├── Models/
│   │   ├── Color.php                 # Modelo de cor
│   │   └── Note.php                  # Modelo de nota
│   └── Providers/
│       └── AppServiceProvider.php    # Provedor de serviços da aplicação
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/                   # Migrações do banco de dados
│   └── seeders/                      # Seeders para popular o banco de dados
├── public/
├── resources/                        # Recursos da aplicação
├── routes/
│   ├── api.php                       # Rotas da API
│   ├── console.php
│   └── web.php
├── storage/
├── tests/
├── vendor/
├── .env
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── phpunit.xml
└── README.md
```

## Licença

Este projeto é licenciado sob a licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais informações.
