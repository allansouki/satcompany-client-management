# SatCompany – Client Management

Sistema desenvolvido em **Laravel** para gerenciamento de clientes, contemplando **CRUD Web** e **CRUD de API REST**, com **documentação automática da API**.

O projeto foi estruturado seguindo boas práticas do Laravel, separando responsabilidades entre camada Web e API.

---

## 📌 Funcionalidades do Projeto

### Web
- Listagem de clientes com paginação
- Cadastro de clientes
- Visualização de detalhes
- Edição de clientes
- Exclusão de clientes
- Validações com FormRequest
- Operações via AJAX

### API REST
- Listar clientes
- Cadastrar cliente
- Buscar cliente por ID
- Atualizar cliente
- Remover cliente
- Documentação automática da API

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8+**
- **Laravel**
- **MySQL / MariaDB**
- **Bootstrap**
- **jQuery / AJAX**
- **Scribe** (documentação da API)
- Composer

---

🚀 Como rodar o projeto localmente
1️⃣ Pré-requisitos

Antes de iniciar, certifique-se de ter instalado:

PHP 8 ou superior

Composer

MySQL ou MariaDB

Servidor local (XAMPP, Laragon, WAMP ou similar)

2️⃣ Clonar o repositório
git clone <URL_DO_REPOSITORIO>
cd satcompany-client-management

3️⃣ Instalar as dependências do projeto
composer install

4️⃣ Configurar o arquivo .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

5️⃣ Gerar a chave da aplicação
php artisan key:generate

6️⃣ Rodar as migrations
php artisan migrate

7️⃣ Gerar a documentação da API
php artisan scribe:generate

8️⃣ Subir o servidor
php artisan serve


A aplicação estará disponível em:

http://127.0.0.1:8000

📄 Documentação da API

Após gerar a documentação com o Scribe, a API poderá ser acessada através do endpoint de documentação configurado no projeto.

--php artisan serve
