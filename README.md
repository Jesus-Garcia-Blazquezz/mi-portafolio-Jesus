# Mi portafolio — Jesús García Blázquez

Portafolio personal responsive creado con HTML, CSS, JavaScript, Bootstrap y Sass. Incluye formulario de contacto con PHP y animaciones AOS.

## Características principales
- Diseño responsivo con Bootstrap 5 (incluido localmente).
- Animaciones con AOS (CDN).
- Validación de formulario al estilo Bootstrap 5 (cliente) y envío con PHP (servidor).
- Estilos escritos en Sass (`style.scss`) y archivo compilado (`style.css`) incluido.
- Galería / proyectos con imágenes en `assets/`.

## Stack tecnológico
- HTML5
- CSS / Sass (Dart Sass compatible)
- JavaScript (Vanilla)
- Bootstrap 5 (archivos están en `bootstrap-5.3.8-dist/`)
- AOS (animaciones) — CDN
- Font Awesome — CDN
- PHP (para el formulario de contacto)

---

## Demo rápido (local)

Opción A — Ver sitio estático (sin formulario PHP activo)
1. Clona el repositorio:
   git clone https://github.com/Jesus-Garcia-Blazquezz/mi-portafolio-Jesus.git
2. Abre `index.html` en tu navegador (doble clic o "Open File").

Opción B — Usar servidor PHP integrado para probar el formulario de contacto
1. Asegúrate de tener PHP instalado (PHP 7+ recomendado).
2. Desde la carpeta del proyecto ejecuta:
   php -S localhost:8000
3. Abre en el navegador:
   http://localhost:8000/index.html
4. Envía el formulario de contacto; `enviar.php` procesará el POST (ver sección de configuración abajo).

Nota: para recibir correos con la función mail() necesitarás un servidor SMTP configurado o usar servicios de desarrollo como Mailtrap; en muchos entornos locales mail() no enviará correos sin configuración adicional.

---

## Compilar Sass (opcional)
El proyecto incluye `style.scss` y el CSS compilado `style.css`. Si deseas trabajar con la fuente Sass:

1. Instala Dart Sass (si no lo tienes): https://sass-lang.com/install
2. Compilar en modo expandido:
   sass style.scss style.css
3. Compilar y minificar:
   sass --style=compressed style.scss style.min.css

Después de compilar, recarga `index.html` para ver los cambios.

---

## Configurar el formulario de contacto (enviar.php)
- Archivo: `enviar.php`
- Destinatario por defecto (actual): `jesus.garbla@educa.jcyl.es`
- Para cambiar el destinatario edita la variable `$para` en `enviar.php`.

Ejemplo:
<?php
// modificar al correo deseado
$para = "tu-email@ejemplo.com";
?>

Consideraciones importantes:
- La función mail() depende de la configuración del servidor (MTA). En entornos de desarrollo sin MTA, el correo no llegará.
- Para pruebas seguras utiliza servicios como Mailtrap, Mailhog o configura un SMTP real (PHPMailer + SMTP es recomendado en producción).
- `enviar.php` realiza trim/strip_tags/htmlspecialchars sobre los campos, pero recuerda:
  - Evita incluir directamente valores de usuario en encabezados (cabeceras) para prevenir inyección de cabeceras. Actualmente se usa:
    $cabeceras = "From: $email";
    Considera reemplazar por un From fijo o validar/sanitizar la dirección con filter_var($email, FILTER_VALIDATE_EMAIL).
  - Valida y sanea en el servidor cualquier entrada que vayas a enviar por email o persistir.
  - Para mayor seguridad y fiabilidad de envío, usa librerías como PHPMailer o SwiftMailer con SMTP autenticado.

---

## Estructura del proyecto (resumen)
- index.html — Punto de entrada principal.
- script.js — Inicialización AOS y validación de formularios (Bootstrap).
- style.scss — Fuente Sass.
- style.css — CSS compilado incluido.
- enviar.php — Procesador del formulario de contacto.
- bootstrap-5.3.8-dist/ — Bootstrap local (css + js).
- assets/
  - FotoPersonal.jpeg
  - Tecnologias_desarrollo.jpg
  - Imagen Aplicacion de seguridad.jpg
  - Imagen Operaciones aritmeticas (Informatica).jpg
  - ... (otras imágenes)

Ejemplo de árbol reducido:
.
├─ index.html
├─ script.js
├─ style.scss
├─ style.css
├─ enviar.php
├─ bootstrap-5.3.8-dist/
└─ assets/

---

## Cómo funciona la interactividad
- AOS: se inicializa en `script.js` con AOS.init({ duration: 1000, once: true });
- Validación de formulario: `script.js` añade la clase `was-validated` y previene el envío si la validación nativa falla (patrón típico de Bootstrap 5).
- El formulario en `index.html` tiene `action="enviar.php"` y `method="POST"` (comprueba esto si modificas el HTML).

---

## Imágenes (ejemplos)
Puedes colocar en README una vista previa de la foto o de proyectos:
<img src="assets/FotoPersonal.jpeg" alt="Foto personal" width="250" />
<img src="assets/Tecnologias_desarrollo.jpg" alt="Tecnologías" width="300" />
<img src="assets/Imagen Aplicacion de seguridad.jpg" alt="App seguridad" width="300" />
<img src="assets/Imagen Operaciones aritmeticas (Informatica).jpg" alt="Operaciones aritméticas" width="300" />

---

## Buenas prácticas / recomendaciones
- Optimiza las imágenes antes de subir (WebP o JPEG comprimido) para mejorar tiempos de carga.
- En producción usa envío de correo SMTP autenticado (PHPMailer + SMTP) en lugar de mail().
- Añade un archivo LICENSE si quieres que otras personas reutilicen tu código (por ejemplo MIT).
- Considera configurar CI para validar HTML/CSS/JS y tareas de build (Sass, minificación).

---

## Contribuir
- Fork → Branch → Pull Request.
- Si vas a cambiar estilos, edita `style.scss` y compila, no edites directamente `style.css` si quieres mantener la fuente de verdad.
- Añade issues para sugerencias o correcciones.

---

## Contacto / Autor
Jesús García Blázquez  
(El correo configurado en `enviar.php`: jesus.garbla@educa.jcyl.es)

---

## Licencia
Actualmente no hay un archivo LICENSE en el repositorio. Si quieres que este proyecto tenga una licencia abierta, añade un archivo `LICENSE` (por ejemplo MIT) al repositorio.
