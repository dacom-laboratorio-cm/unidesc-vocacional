
<p align="center">
   <img src="https://raw.githubusercontent.com/gepittes/docs-vocacional/master/teste-vocacional-logo.png" width="300">
</p>

<p>
  <img alt="Version" src="https://img.shields.io/badge/version-2.0.0-blue.svg?cacheSeconds=2592000" />
  <a href="https://github.com/gepittes/docs-vocacional" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
</p>

> Teste vocacional da Feira das profissões | UNIDESC

<p align="center">
    <a href="http://testevocacional.unidesc.edu.br/"><img src="https://i.imgur.com/TPSteG6.png" align="center"></a>
</p>

## 🖼 Previews

<img src="https://i.imgur.com/xUAYgma.jpg">

| Home          | Form          |
| ------------- | ------------- |
| <img src="https://i.imgur.com/Vm7DWZT.png">  | <img src="https://i.imgur.com/QICfgH0.png">  |

| Questions     | Results       |
| ------------- | ------------- |
| <img src="https://i.imgur.com/ZpyNrel.png">  | <img src="https://i.imgur.com/eJFTiE3.png">  |

| Results       | Results       |
| ------------- | ------------- |
| <img src="https://i.imgur.com/gZguMG5.png">  | <img src="https://i.imgur.com/CiRNet1.png">  |

| Mail Result   |
| ------------- |
| <img src="https://i.imgur.com/jPLpIlR.png">  |

## Dependencies
- PHP 7.2
- Composer
- MySQL 8


## 🚀 Install

```
$ git clone https://github.com/gepittes/unidesc-vocacional
$ cd unidesc-vocacional
$ composer install
```

## 🖱️ Usage

```
$ cp .env.example .env
$ php artisan key:generate
```

Configure your database in **.env**

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=123456
```

```
$ php artisan migrate --seed
```

## 📈 Run app

```
$ php artisan serve
```

Check app in http://localhost:8000/

## 👤 Authors

| Gabriel Roque  | Jadilson Guedes |
| ------------- | ------------- |
| <img src="https://avatars2.githubusercontent.com/u/32438220?s=460&v=4" width="110">  | <img src="https://avatars0.githubusercontent.com/u/36805474?s=460&v=4" width="110">   |
| <a href="https://github.com/gabriel-roque">Github</a>  | <a href="https://github.com/jadilson12">Github</a>  |
| <a href="https://www.linkedin.com/in/gabriel-roque/">Linkedin</a> | <a href="https://www.linkedin.com/in/jadilson12/">Linkedin</a> |


## 🤝 Contributing

Contributions, issues and feature requests are welcome!<br />Feel free to check [issues page](https://github.com/gepittes/unidesc-vocacional/issues). 

## Show your support

Give a ⭐️ if this project helped you!

### Documentação para Configuração de um Ambiente Docker para um Projeto Laravel

Esta documentação fornece um guia passo a passo para configurar um ambiente Docker para um projeto Laravel usando PHP, Composer, e MySQL. Vamos configurar os contêineres Docker para que o aplicativo Laravel esteja acessível em um IP específico.

---

### Pré-requisitos

- **Docker** e **Docker Compose** instalados em sua máquina.
- Acesso ao repositório do projeto Laravel.

### Passo 1: Criar o `Dockerfile`

O `Dockerfile` especifica o ambiente para a aplicação PHP, incluindo PHP, Composer e extensões necessárias para Laravel.

1. No diretório raiz do seu projeto Laravel, crie um arquivo chamado `Dockerfile`.

2. Adicione o seguinte conteúdo ao `Dockerfile`:

    ```Dockerfile
    # Use a imagem oficial do PHP com Apache
    FROM php:7.4-apache

    # Instala dependências do sistema
    RUN apt-get update && apt-get install -y \
        zip \
        unzip \
        git \
        curl

    # Instala extensões PHP
    RUN docker-php-ext-install pdo pdo_mysql

    # Instala o Composer
    COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

    # Define o diretório de trabalho
    WORKDIR /var/www/html

    # Copia o conteúdo do diretório da aplicação existente
    COPY . /var/www/html

    # Define permissões de arquivo
    RUN chown -R www-data:www-data /var/www/html \
        && chmod -R 755 /var/www/html/storage

    # Ativa o módulo de reescrita do Apache
    RUN a2enmod rewrite

    # Exponha a porta 80
    EXPOSE 80

    # Inicia o Apache no primeiro plano
    CMD ["apache2-foreground"]
    ```

### Passo 2: Criar o `docker-compose.yml`

O arquivo `docker-compose.yml` define os serviços que compõem a sua aplicação Docker, incluindo PHP, MySQL e Redis.

1. No diretório raiz do seu projeto Laravel, crie um arquivo chamado `docker-compose.yml`.

2. Adicione o seguinte conteúdo ao `docker-compose.yml`:

    ```yaml
    version: '3.8'

    services:
      app:
        build:
          context: .
          dockerfile: Dockerfile
        container_name: laravel_app
        ports:
          - "172.16.255.201:8080:80"  # Vincula o contêiner do aplicativo ao IP específico
        volumes:
          - .:/var/www/html
        environment:
          - APP_ENV=local
          - APP_DEBUG=true
          - APP_KEY=${APP_KEY}
        depends_on:
          - mysql

      mysql:
        image: mysql:5.7
        container_name: mysql
        restart: unless-stopped
        environment:
          MYSQL_DATABASE: feira24
          MYSQL_ROOT_PASSWORD: 0411
          MYSQL_PASSWORD: 0411
        ports:
          - "3306:3306"
        volumes:
          - mysql_data:/var/lib/mysql

      redis:
        image: redis:alpine
        container_name: redis
        ports:
          - "6379:6379"
        volumes:
          - redis_data:/data

    volumes:
      mysql_data:
      redis_data:
    ```

### Passo 3: Atualizar o arquivo `.env`

1. Certifique-se de que o arquivo `.env` do Laravel corresponde às configurações do banco de dados e do ambiente usadas na configuração do Docker.

2. Atualize a variável `APP_URL` para usar o novo endereço IP:

    ```env
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY= XXXXXXX
    APP_DEBUG=true
    APP_URL=http://172.16.255.201:8080  # Altere para o seu IP desejado

    LOG_CHANNEL=stack

    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE= XXXXXX
    DB_USERNAME= XXXXX
    DB_PASSWORD= XXXXX

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    REDIS_HOST=redis
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1

    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ```

### Passo 4: Construir e Executar os Contêineres Docker

Depois de fazer essas alterações, você precisa reconstruir e reiniciar seus contêineres Docker para aplicar a nova configuração.

1. **Pare os contêineres em execução:**

    ```bash
    docker-compose down
    ```

2. **Reconstrua os contêineres Docker:**

    ```bash
    docker-compose build
    ```

3. **Inicie os contêineres Docker novamente:**

    ```bash
    docker-compose up -d
    ```

### Passo 5: Instalar Dependências e Gerar a Chave da Aplicação

Com os contêineres em execução, você deve acessar o contêiner da aplicação e instalar as dependências usando o Composer e gerar a chave da aplicação Laravel.

1. **Instale as dependências do Laravel:**

    ```bash
    docker-compose exec app composer install
    ```

2. **Gere a chave da aplicação Laravel:**

    ```bash
    docker-compose exec app php artisan key:generate
    ```
3. **Gere as tabelas do banco de dados:**

    ```bash
    docker-compose exec app php artisan migrate --seed
    ```

### Passo 6: Acessar Sua Aplicação Laravel

Agora que tudo está configurado, você deve conseguir acessar sua aplicação Laravel em um navegador da web no endereço `http://172.16.255.201:8080`.

