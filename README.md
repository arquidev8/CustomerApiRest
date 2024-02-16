

# Laravel API de Servicio de Gestión de Clientes

Este proyecto utiliza Laravel para proporcionar un servicio de gestión de clientes a través de una API. Permite a los usuarios registrarse, iniciar sesión, agregar clientes, ver clientes, eliminar clientes y más.

## Instalación

1. Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/tu-usuario/tu-proyecto.git


Instala las dependencias del proyecto usando Composer:

composer install


<p>Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno según tu entorno de desarrollo:</p>

php artisan key:generate

Configura tu base de datos en el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario_db
DB_PASSWORD=contraseña_db

<p>Ejecuta las migraciones para crear las tablas en la base de datos:</p>

php artisan migrate

php artisan serve

# Laravel API de Servicio de Gestión de Clientes

<p>Este proyecto utiliza Laravel para proporcionar un servicio de gestión de clientes a través de una API. Permite a los usuarios registrarse, iniciar sesión, agregar clientes, ver clientes, eliminar clientes y más.</p>

## Instalación

1. Clona este repositorio en tu máquina local:


git clone https://github.com/tu-usuario/tu-proyecto.git

Instala las dependencias del proyecto usando Composer:

composer install

<p>Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno según tu entorno de desarrollo:</p>

cp .env.example .env


Genera una nueva clave de aplicación:

php artisan key:generate


<p>Configura tu base de datos en el archivo .env:</p>

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario_db
DB_PASSWORD=contraseña_db

<p>Ejecuta las migraciones para crear las tablas en la base de datos:</p>

php artisan migrate

Inicia el servidor de desarrollo:

php artisan serve



<p>Uso</p>

<p>La API se puede utilizar para:</p>

Registro de Usuarios: La ruta /register permite a los usuarios registrarse en la plataforma.

Inicio de Sesión: La ruta /login permite a los usuarios iniciar sesión y obtener un token de autenticación.

Gestión de Clientes: Se proporcionan endpoints para agregar clientes, ver clientes y eliminar clientes. Estas rutas están protegidas y requieren un token de autenticación.

Gestión de Regiones y Comunas: Se proporcionan endpoints para agregar regiones y comunas. Estas rutas también están protegidas y requieren autenticación.

Endpoints Disponibles

POST /register: Registro de usuarios.
POST /login: Inicio de sesión.
POST /v1/customers: Agregar un nuevo cliente.
GET /v1/customers: Obtener la lista de todos los clientes.
GET /v1/customers/{identifier}: Obtener detalles de un cliente específico a traves de su DNI o EMAIL.
DELETE /v1/customers/{dni}: Eliminar un cliente mediante su DNI.
POST /v1/regions: Agregar una nueva región.
POST /v1/communes: Agregar una nueva comuna.


Requerimientos del Sistema
PHP >= 8.1
Composer
Laravel >= 10.x

