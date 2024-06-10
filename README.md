# Blog Áreas Estudiantiles

Blog Áreas Estudiantiles permite a los usuarios crear, editar y compartir publicaciones de blog referido a temas de áreas específicas de escuela primaria. Los usuarios pueden observar las distintas áreas y ver las publicaciones de otros usuarios, a su vez los usuarios pueden crear áreas nuevas para poder compartir posteos sobre esa determinada asignatura. Los posteos además indican a qué grado están dirigidos.

## Autores

-   [Alvarez Percy](https://github.com/alvarezpercy)
-   [Aldana Pablo](https://github.com/aldanapablo)

# Guia para ejecutar el proyecto paso a paso

### Paso 1: Instalación de Composer

Asegúrate de tener Composer instalado en tu sistema. Puedes descargarlo desde [getcomposer.org](https://getcomposer.org/).

### Paso 2: Crear un nuevo proyecto Laravel

Ejecuta el siguiente comando para crear un nuevo proyecto Laravel:

```bash
    composer create-project laravel/laravel example-app
```

### Paso 3:

Si ya ha creado una nueva aplicación Laravel sin un kit de inicio, puede instalar Laravel Breeze manualmente usando Composer:

```bash
composer require laravel/breeze --dev
```

### Paso 4:

Después de que Composer haya instalado el paquete Laravel Breeze, debes ejecutar el breeze:installcomando Artisan. Este comando publica las vistas de autenticación, rutas, controladores y otros recursos en su aplicación. Laravel Breeze publica todo su código en su aplicación para que usted tenga control y visibilidad total sobre sus características e implementación.

El breeze:installcomando le solicitará su pila de frontend y marco de prueba preferidos:

```bash
php artisan breeze:install

php artisan migrate
npm install
```

### Paso 5:

Con el siguiente comando creamos un espejo del storage en la carpeta public para poder manipular las imagenes al momento de guardarlas

```bash
php artisan storage:link
```

### Paso 6:

Finalmente ponemos en ejecucion el proyecto para hacer uso de la base de datos y las actualizaciones en tiempo real de las vistas

```bash
php artisan serve
npm run dev
```

## Tecnologías utilizadas

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)

[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)

[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)

## Screenshots

-   Welcome sin loguear

-   Welcome logueado pasa a llamarse pizarra

-   Mis Areas

-   Mis Posteos

-   Posteos en un Area

-   Posteo

## Enlace al repositorio

Puedes clonar el repositorio desde GitHub usando el siguiente enlace:

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/pabloaldana/laravel.git)
