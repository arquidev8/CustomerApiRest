

# Laravel API Servicio de Gestión de Clientes

Este proyecto utiliza Laravel para proporcionar un servicio de gestión de clientes a través de una API. Permite a los usuarios registrarse, iniciar sesión, agregar clientes, ver clientes, eliminar clientes y más.

## Instalación

1. Clona este repositorio en tu máquina local:

```bash


git clone https://github.com/arquidev8/CustomerApiRest.git

## Instala las dependencias del proyecto usando Composer:

composer install

## Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno según tu entorno de desarrollo:

cp .env.example .env


## Genera una nueva clave de aplicación:

php artisan key:generate


## Configura tu base de datos en el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario_db
DB_PASSWORD=contraseña_db

## Ejecuta las migraciones para crear las tablas en la base de datos:

php artisan migrate

## Inicia el servidor de desarrollo:

php artisan serve


# Uso

## La API se puede utilizar para:

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

## Uso de la Api

## Paso 1

Crear un usuario a traves de POST /register: Registro de usuarios.

## Paso 2

Obtener token de autenticacion a traves de POST /login: Registro de usuarios.

## Paso 3

Agregar una Region mediante POST /v1/regions: Agregar una nueva región.

## Paso 4

Agregar Commune mediante POST /v1/communes: Agregar una nueva commune.

## Paso 5

Agregar Customer mediante POST /v1/customers: Agregar un nuevo customer.

## Paso 6

Obtener lista de Customers mediante GET /v1/customers: Obtener la lista de todos los Customers.

## Paso 7

Obtener detalle de Customers mediante GET /v1/customers/{identifier}: Obtener detalles de un Customer específico a traves de su DNI o EMAIL.

## Paso 8

Eliminar un Customer mediante DELETE /v1/customers/{dni}: Eliminar un cliente mediante su DNI.



Requerimientos del Sistema
PHP >= 8.1
Composer
Laravel >= 10.x

