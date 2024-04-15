## API School

API Rest para gestionar la información de matrícula de los estudiantes de un centro educativo.

## Diagrama E-R

![Captura de pantalla 2024-04-15 a la(s) 15 44 26](https://github.com/zaratedev/school-api/assets/29809845/9dc4aadc-3660-4a5b-9976-4a2ea4b2b377)

Las entidades principales se consideran las siguientes:

* Estudiante
* Aula
* Asignatura
* Profesor

## Requisitos

Lista de requisitos para el desarrollo de la API Rest

- PHP 8.1
- Composer
- MySQL

## Instalación

Para instalar el proyecto se debe de clonar el siguiente repositorio

```
git clone https://github.com/zaratedev/school-api.git
```

Acceder a la carpeta del proyecto

```
cd school-api
```

Instalar dependencias de composer

```
composer install
```

Crear archivo `.env`

```
cp .env.example .env
```

Generar Key

```
php artisan key:generate
```

Configurar conexion de base de datos

Editar archivo `.env` con las credenciales de la base de datos
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=******
DB_USERNAME=******
DB_PASSWORD=******
```

Crear base de datos

```
php artisan migrate
```

Popular base de datos con datos dummy

```
php artisan db:seed
```

## Servidor local

Para el desarrollo local es necesario ejecutar el siguiente comando

```
php artisan serve
```

En la terminal se muestra lo siguiente:

INFO  Server running on [http://127.0.0.1:8000].
