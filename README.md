# Proyecto Laravel Roles y Permisos

<p>Iniciar la creación del proyecto</p>
<p>Url del paquete</p>
<code>https://spatie.be/docs/laravel-permission/v6/introduction</code><br><br>

> [!NOTE]
> Crear un proyecto
> <code>composer create-proyect laravel/laravel laravel-roles-permisos</code>

<p>Vamos a descargar ya un paquete que nos permite hacer los role y permisos</p>

> [!NOTE]
> Instalar el paquete de roles y permisos
> <code>composer require spatie/laravel-permission</code>

<p>Publicamos nuestros cambios con</p>

> [!NOTE]
> Para publicar
> <code>php artisan vendor:publish --provider="Spatie\PermissionServiceProvider"</code>

<p>Optimizamos la instalación</p>

> [!NOTE]
> Para optimizar la instalción del proyecto
> <code>php artisan optimize:clear</code>

<p>Ahora solo migramos</p>

> [!NOTE]
> <code>php artisan migrate</code>

<p>Definimos la migración</p>

> [!NOTE]
> Creamos una migracion no una tabla ya que dentro vamos a modificar
> <code>php artisan make:migration create_roles</code>
