# Base para desenvolvimento em Laravel 5.8

Base para início de desenvolvimento de aplicação.

Admin LTE, CRUD de usuários e Controle de permissões (Spatie/permissions).
Também foi configurado:

[Laravel 5 & 6 Extended Generators](https://github.com/laracasts/Laravel-5-Generators-Extended/blob/master/readme.md)

E adicionado o comando artisan para "Crud Generator", conforme o tutorial:
[Crud Generator from Scratch](https://medium.com/@devlob/laravel-crud-generators-614caddf8bea)

## Getting Started

Base para desenvolvimento de aplicações

### Prerequisites

Você precisa ter instalado PHP e MySQL Server, além disso você deve ativar o módulo de Rewrite do seu servidor web. Se estiver utilizando Linux, muitas vezes o LAMP lhe apresentará todo ambiente perfeito. No Windows, muitos costumam utilizar o XAMP que também contém um servidor web apache.
Não faz parte desde documento, apresentar as etapas de instalação de cada elemento do ambiente de execução.

### Installing

Após baixar o código, se estiver compactado, extrai-os e coloque-os no diretório que pode ser lido por um servidor web ou em um diretório de sua preferencia para rodar com o servidor web embutido no php que pode ser invocado pelo artisan.

Você precisa configurar o arquivo .env informando os detalhes de conexão com banco de dados. Além disso ainda no arquivo .env, precisa configurar o QUEUE_CONNECTION=database

Editar o arquivo .env:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=SuaSenhaAqui
```

Uma vez configurado o arquivo .env. Execute os comandos:

```

php artisan key:generate

php artisan migrate --seed

```

Para executar o programa, se não estiver utizando um servidor web, inicie o servidor web embutido, utilizando o comando:

```
php artisan serve

```


### Usage

Usuario: admin@teste.com.br
Senha: 12345678



## Authors

* **Alexandre Bezerra Barbosa**
