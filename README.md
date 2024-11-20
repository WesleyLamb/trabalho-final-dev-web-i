# Trabalho Final de Desenvolvimento Web I

## Professor
Fabricio Bizotto

## Alunos
- Valdir Rugiski Jr
- Wesley Ricardo Lamb

## Resumo
Trabalho final da matéria de Desenvolvimento Web I a fim de aplicar os conhecimentos aprendidos em aula.

O Trabalho em questão foi o desenvolvimento de uma página web para envio e consulta de TCC's

## Requisitos

- Certificado (pode ser [auto-assinado](https://gist.github.com/WesleyLamb/113348638bedb0b6aeacbe48efd2ae4c))
- Docker e Docker Compose

## Instalação

1. Duplique o arquivo `.env.example` na pasta raíz e renomeie-o para `.env`;
2. Altere as configurações de porta conforme a necessidade (Por padrão, está configurado a porta 443 para o NGINX e 5432 para o PGSQL);
3. Informe o diretório dos arquivos do certificado no arquivo `.env`, seguindo o exemplo;
4. Repita o mesmo processo para o arquivo presente em `./nginx/conf.d`, altere o parâmetro `server_name` do arquivo para o link que desejar utilizar para acessar o portal;
5. No diretório `./app`, duplique o arquivo `.env.example` e renomeie-o para `.env`
6. Duplique o arquivo `docker-compose.yml.prod.example` ou o `docker-compose.yml.dev.example` e renomeie um deles para `docker-compose.yml`;
7. No diretório raíz, execute o comando a seguir para configurar e servir o portal:
```bash
    docker compose up -d --build
```
8. Por fim, rode o seguinte comando para criar as tabelas e os registros do banco de dados:
```bash
    docker compose exec app php artisan migrate --seed # Omita o --seed caso não queira os registros demonstrativos
```

### Todos

 - [ ]