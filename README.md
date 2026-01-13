# Sistema de Inventarios - Laravel MVC

Sistema web de gestión de inventarios desarrollado con Laravel, implementando el patrón de diseño MVC (Modelo-Vista-Controlador) y arquitectura monolítica.

## 📋 Características

- ✅ **CRUD Completo de Productos**: Crear, leer, actualizar y eliminar productos
- ✅ **Control de Stock**: Gestión de cantidad disponible de cada producto
- ✅ **Indicadores de Estado**: Visualización de stock disponible, bajo y agotado
- ✅ **Interfaz Moderna**: Diseño responsive con Tailwind CSS
- ✅ **Validación de Datos**: Validación en servidor para todos los formularios
- ✅ **Arquitectura MVC**: Separación clara de responsabilidades

## 🛠️ Tecnologías Utilizadas

- **Laravel 10**: Framework PHP
- **MySQL**: Base de datos
- **Tailwind CSS**: Framework CSS para el diseño
- **Blade**: Motor de plantillas de Laravel

## 📦 Estructura del Proyecto

```
exame-practico/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProductController.php    # Controlador CRUD
│   └── Models/
│       └── Product.php                  # Modelo de Producto
├── database/
│   └── migrations/
│       └── 2026_01_13_xxxxxx_create_products_table.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           # Layout principal
│       └── products/
│           ├── index.blade.php          # Lista de productos
│           ├── create.blade.php         # Formulario de creación
│           ├── edit.blade.php           # Formulario de edición
│           └── show.blade.php           # Detalles del producto
└── routes/
    └── web.php                          # Rutas CRUD
```

## 🚀 Instalación

### Requisitos Previos

- PHP >= 8.1
- Composer
- MySQL
- Servidor web (Apache/Nginx) o PHP Built-in Server

### Pasos de Instalación

1. **Clonar o navegar al proyecto**
   ```bash
   cd exame-practico
   ```

2. **Instalar dependencias**
   ```bash
   composer install
   ```

3. **Configurar el archivo .env**
   ```bash
   cp .env.example .env
   ```
   
   Editar `.env` y configurar la base de datos:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=inventario_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generar clave de aplicación**
   ```bash
   php artisan key:generate
   ```

5. **Ejecutar migraciones**
   ```bash
   php artisan migrate
   ```

6. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
   ```

7. **Acceder a la aplicación**
   ```
   http://localhost:8000
   ```

## 📝 Uso del Sistema

### Rutas Disponibles

| Método | Ruta | Descripción |
|--------|------|-------------|
| GET | `/` | Redirige a la lista de productos |
| GET | `/products` | Lista todos los productos |
| GET | `/products/create` | Formulario para crear producto |
| POST | `/products` | Guarda un nuevo producto |
| GET | `/products/{id}` | Muestra detalles de un producto |
| GET | `/products/{id}/edit` | Formulario para editar producto |
| PUT | `/products/{id}` | Actualiza un producto |
| DELETE | `/products/{id}` | Elimina un producto |

### Campos del Producto

- **Nombre**: Nombre del producto (requerido)
- **Código**: Código único del producto (requerido, único)
- **Descripción**: Descripción detallada (opcional)
- **Precio**: Precio unitario (requerido, numérico)
- **Stock**: Cantidad disponible (requerido, entero)
- **Categoría**: Categoría del producto (opcional)

### Estados de Stock

- **Disponible**: Stock mayor a 10 unidades (verde)
- **Stock Bajo**: Stock entre 1 y 9 unidades (amarillo)
- **Agotado**: Stock igual a 0 unidades (rojo)

## 🏗️ Arquitectura MVC

### Modelo (Model)
- **Product.php**: Define la estructura de datos, validaciones y métodos de negocio
- Ubicación: `app/Models/Product.php`

### Vista (View)
- Plantillas Blade para la interfaz de usuario
- Ubicación: `resources/views/products/`

### Controlador (Controller)
- **ProductController.php**: Maneja la lógica de negocio y coordinación
- Ubicación: `app/Http/Controllers/ProductController.php`

## 📊 Base de Datos

### Tabla: products

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | bigint | Identificador único |
| nombre | varchar(255) | Nombre del producto |
| descripcion | text | Descripción del producto |
| codigo | varchar(50) | Código único |
| precio | decimal(10,2) | Precio unitario |
| stock | integer | Cantidad disponible |
| categoria | varchar(255) | Categoría del producto |
| created_at | timestamp | Fecha de creación |
| updated_at | timestamp | Fecha de actualización |

## 🔒 Validaciones

- **Nombre**: Requerido, máximo 255 caracteres
- **Código**: Requerido, máximo 50 caracteres, único
- **Precio**: Requerido, numérico, mínimo 0
- **Stock**: Requerido, entero, mínimo 0
- **Categoría**: Opcional, máximo 255 caracteres
- **Descripción**: Opcional

## 🎨 Características de la Interfaz

- Diseño responsive (adaptable a móviles y tablets)
- Indicadores visuales de estado de stock
- Mensajes de éxito y error
- Confirmación antes de eliminar productos
- Navegación intuitiva

## 📚 Buenas Prácticas Implementadas

- ✅ Separación de responsabilidades (MVC)
- ✅ Validación de datos en servidor
- ✅ Uso de migraciones para la base de datos
- ✅ Rutas RESTful
- ✅ Código organizado y comentado
- ✅ Uso de Eloquent ORM
- ✅ Protección CSRF
- ✅ Manejo de errores

## 🧪 Pruebas

Para ejecutar las pruebas (si se implementan):
```bash
php artisan test
```

## 📄 Licencia

Este proyecto es de uso educativo/académico.

## 👨‍💻 Autor

Sistema de Inventarios - Examen Práctico
Desarrollado con Laravel 10

---

**Nota**: Asegúrese de tener configurada correctamente la base de datos antes de ejecutar las migraciones.
