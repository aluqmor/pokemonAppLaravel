# Proyecto Laravel

## Instrucciones de configuración

1. **Renombrar el archivo `.env`**
   - Copia el archivo `.env.example` y renómbralo como `.env`. Este archivo contendrá las configuraciones de entorno necesarias para el proyecto.

2. **Configurar el archivo `.env`**
   - En el archivo `.env`, necesitas configurar los siguientes valores:
     - **APP_KEY**: Este se generará en el paso de comandos posteriores.
     - **APP_ID**: Genera un ID único para tu aplicación.
     - **BASE DE DATOS**: Configura los datos de acceso a tu base de datos:
       - `DB_DATABASE`: El nombre de la base de datos es: pokemondb.
       - `DB_USERNAME`: El usuario de la base de datos es: pokemon.
       - `DB_PASSWORD`: La contraseña de dicho usuario es: pokemon.

3. **Instalar dependencias de Composer**
   - Ejecuta el siguiente comando para descargar todas las dependencias del proyecto que están especificadas en el archivo `composer.json`:
     ```bash
     composer install
     ```

4. **Actualizar dependencias de Composer**
   - Si es necesario actualizar las dependencias del proyecto a sus versiones más recientes, puedes usar:
     ```bash
     composer update
     ```

5. **Migraciones de base de datos**
   - Ejecuta las migraciones para crear las tablas necesarias en la base de datos:
     ```bash
     php artisan migrate
     ```

6. **Generar clave de aplicación**
   - Para generar una clave de aplicación y almacenarla en el archivo `.env`, ejecuta:
     ```bash
     php artisan key:generate
     ```