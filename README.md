# nyx-crm

## formulário para tickets - automação do fluxo de tarefas e demandas

## Como rodar o projeto na sua máquina:

0. Antes de tudo, se for usar chave ssh e não tiver cadastrada, cadastre a sua chave ssh do github na máquina (https://www.hostinger.com.br/tutoriais/como-configurar-chaves-ssh)

1. Clone o repositório para sua máquina local:
    - com chave ssh: `git clone git@github.com:nyxtechnology/nyx-crm.git`
    - ou com https: `git clone https://github.com/nyxtechnology/nyx-crm.git)`

2. Certifique-se que as portas 80 (apache) e 3306 (mysql) estejam livres. Para liberá-las, use: `sudo service apache2 stop && sudo service mysql stop`

3. Dentro da pasta "laravel-app/" no seu terminal, rode `cp .env.example .env`

4. Dentro da pasta nyx-crm/, rode `make install` (se não tiver instalado na sua máquina, rode antes `sudo apt install make`)

5. Para acessar os estilos do projeto, rode (fora do container) o comando ` npm run dev`

## Acessar a página web:
localhost:9000/

## Acessar o phpmyadmin:
localhost:9001/

## Alguns comandos úteis para o desenvolvedor:
- em caso de erro no laravel.log:
`docker exec -it laravel_tcc_nvt bash -c "chown -R www-data:www-data ./"`
- para criar uma imagem: 
`docker-compose build --no-cache --force-rm`

- ou recriá-la se fizer alguma alteração nas configurações: 
`docker-compose build`

- parar os containers: 
`docker-compose stop`

- subir os containers: 
`docker-compose up -d`

- para acessar o bash (terminal) do container:
`docker exec -it laravel_docker bash`

- para acessar o bash (terminal) do container e atualizar o composer:
`docker exec -it laravel_docker bash -c "composer update"` 

- rodar migrações:
`docker exec laravel_docker bash -c "php artisan migrate"`

- rodar seed:
`docker exec laravel_docker bash -c "php artisan db:seed"`