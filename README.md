# HDCEvents

Projeto para voltar a codar em PHP com Láravel :)

## Installations

[mariadb](https://archived.forum.manjaro.org/t/install-mysql-on-manjaro-20/146472)

## Annotations

### Make Controller
```sh
    php artisan make:controller EventController  
```

### DB Migrate
```sh
    php artisan migrate  
```

## Commands

### Get Dependencies
```sh
    composer update  
```

### Run

#### Artisan Serve
```sh
    php artisan serve  
```

#### With make
```sh
    make run  
```

### Docker

#### Build
```sh
    docker build -t hdcevents -f Dockerfile .  
```

#### Run
```sh
    docker run -p 8000:8000 -it hdcevents  
```
