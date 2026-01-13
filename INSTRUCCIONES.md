# Instrucciones Rápidas de Configuración

## Pasos para Ejecutar el Proyecto

### 1. Configurar Base de Datos

Edita el archivo `.env` y configura tu base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventario_db
DB_USERNAME=root
DB_PASSWORD=
```

**Importante**: Crea la base de datos `inventario_db` en MySQL antes de continuar.

### 2. Ejecutar Migraciones

```bash
php artisan migrate
```

### 3. (Opcional) Cargar Datos de Ejemplo

```bash
php artisan db:seed
```

Esto cargará 5 productos de ejemplo en la base de datos.

### 4. Iniciar el Servidor

```bash
php artisan serve
```

### 5. Acceder a la Aplicación

Abre tu navegador en: `http://localhost:8000`

La aplicación redirigirá automáticamente a `/products` donde verás la lista de productos.

## Funcionalidades Disponibles

- ✅ Ver lista de productos (`/products`)
- ✅ Crear nuevo producto (`/products/create`)
- ✅ Ver detalles de producto (`/products/{id}`)
- ✅ Editar producto (`/products/{id}/edit`)
- ✅ Eliminar producto (desde la lista o detalles)

## Estructura de Rutas CRUD

| Acción | Método HTTP | Ruta |
|--------|-------------|------|
| Listar | GET | `/products` |
| Crear (formulario) | GET | `/products/create` |
| Guardar | POST | `/products` |
| Mostrar | GET | `/products/{id}` |
| Editar (formulario) | GET | `/products/{id}/edit` |
| Actualizar | PUT | `/products/{id}` |
| Eliminar | DELETE | `/products/{id}` |

## Notas Importantes

- El código del producto debe ser único
- El stock no puede ser negativo
- El precio debe ser un número positivo
- Los productos con stock bajo (< 10 unidades) se muestran en amarillo
- Los productos agotados (stock = 0) se muestran en rojo

## Solución de Problemas

### Error: "No application encryption key has been specified"
```bash
php artisan key:generate
```

### Error de conexión a la base de datos
- Verifica que MySQL esté ejecutándose
- Verifica las credenciales en `.env`
- Asegúrate de que la base de datos existe

### Error al ejecutar migraciones
- Verifica que la base de datos esté creada
- Verifica los permisos del usuario de MySQL
