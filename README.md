# CRUD con PHP y MySQL

Este proyecto es una aplicación web básica de tipo **CRUD** (*Create, Read, Update, Delete*) desarrollada con **PHP**, **MySQL** y **Bootstrap**. Está pensado como práctica para gestionar registros de una base de datos desde un navegador.

---

## 📌 Descripción

- Permite **crear**, **visualizar**, **editar** y **eliminar** registros de una tabla MySQL.
- Utiliza **PHP** como lenguaje del lado del servidor.
- Conexión a **MySQL** usando `mysqli`.
- Interfaz sencilla y responsive con **Bootstrap**.
- Requiere servidor local como **XAMPP** para funcionar.

---

## ⚙️ Tecnologías utilizadas

- PHP 8.x
- MySQL / phpMyAdmin
- HTML5
- CSS3
- Bootstrap 4 o 5
- JavaScript básico (opcional, si hay validaciones)

---

## 🗂️ Estructura del proyecto

PHP-Mysql-CRUD/
│
├── index.php
├── add.php
├── edit.php
├── delete.php
├── db.php (o config.php)
├── css/
│ └── styles.css (opcional)
└── README.md


---

## ▶️ Cómo usarlo

1️⃣ **Clona o copia el proyecto dentro de `htdocs`** de XAMPP:
```bash
C:\xampp\htdocs\php_crud_mysql\

2️⃣ Crea la base de datos:

Abre phpMyAdmin (http://localhost/phpmyadmin).

Crea una base de datos (por ejemplo, crud_db).

Importa el archivo .sql si lo tienes (o crea la tabla manualmente).

3️⃣ Configura la conexión en db.php o config.php:

$connection = mysqli_connect(
  'localhost',
  'root',    // Usuario MySQL (por defecto 'root')
  '',        // Contraseña MySQL (por defecto vacía)
  'crud_db'  // Nombre de tu base de datos
);

4️⃣ Inicia Apache y MySQL desde XAMPP.

5️⃣ Abre en tu navegador:

http://localhost/php_crud_mysql/index.php


✅ Funcionalidades principales
Agregar registro: formulario para crear nuevos datos.

Listar registros: tabla que muestra todos los datos guardados.

Editar registro: formulario para actualizar información existente.

Eliminar registro: opción para borrar registros.

🚀 Autor
Luis Delgado
📧 terracota-3@hotmail.com