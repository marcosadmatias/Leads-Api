<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Instruções de inicialização:

### Após ter feito o clone do repositório, acesse a pasta do projeto:
```sh
cd api
```

### Instale as dependências do Composer dentro do projeto:
```sh
composer install
```
### Crie um arquivo .env a partir do arquivo .env.example
```sh
cp .env.example .env
```

### No arquivo .env substitua as configurações  as credenciais de conexão do banco de dados :
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### Gere a key do projeto laravel:
```sh
php artisan key:generate
```

### Gere um uuid através do tinker para servir de token para a api e copie-o:
```sh
php artisan tinker

-> Str::uuid()->toString();
```
### Cole o token gereado no arquivo .env em:
```sh
API_ACCESS_TOKEN=cole_o_token_aqui
```

### Para inicializar o servidor e rodar o projeto rode:
```sh
php artisan serve
```

## Instruções da API:

### Endpoint Leads (POST):

```sh
http://localhost:8000/api/leads
```

### Endpoint Origins (Get):

```sh
http://localhost:8000/api/origins
```

### Headers:

| Key | Value |
| --- | --- |
| Authorization | Bearer token_gerado |

### Body para Leads (JSON), apenas o 'nome' e 'id_origem' são campos obrigatórios:

```sh
{
"nome" : "nome",
"email" : "email@gmail.com",
"telefone" : "00000000000",
"usuario_atribuido" : "0",
"lead_ganho" : "0",
"interesses" : "interesses",
"anotacoes" : "anotacoes",
"id_cliente" : "0",
"id_origem" : "0"
}
```

