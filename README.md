
# Mi Portafolio — Jesús García Blázquez

Portafolio personal **responsive** creado con HTML, CSS, JavaScript, Bootstrap y Sass.  
Incluye **formulario de contacto con PHP** y animaciones con **AOS**.  

🌐 [Ver el portafolio en GitHub Pages](https://jesus-garcia-blazquezz.github.io/mi-portafolio-Jesus/)

## 🚀 Características principales
- Diseño responsivo con **Bootstrap 5** (archivos locales incluidos).  
- Animaciones con **AOS** (CDN).  
- Formulario de contacto validado en cliente (Bootstrap) y servidor (**PHP**).  
- Estilos escritos en **Sass (`style.scss`)**, compilado a `style.css`.  
- Galería de proyectos con imágenes en `assets/`.  

## 🛠️ Stack tecnológico
- HTML5  
- CSS / Sass (Dart Sass compatible)  
- JavaScript (Vanilla)  
- Bootstrap 5  
- AOS (animaciones) — CDN  
- Font Awesome — CDN  
- PHP (para el formulario de contacto)  

## 📺 Demo rápido (local)
**Opción A — Ver sitio estático** (sin PHP)
```bash
git clone https://github.com/Jesus-Garcia-Blazquezz/mi-portafolio-Jesus.git
# Abrir index.html en el navegador
```

**Opción B — Usar servidor PHP integrado**

```bash
# Desde la carpeta del proyecto
php -S localhost:8000
# Abrir en navegador:
http://localhost:8000/index.html
```

**Compilar Sass (opcional)**

```bash
# Compilar expandido
sass style.scss style.css
# Compilar y minificar
sass --style=compressed style.scss style.min.css
```

## 📂 Estructura del proyecto

```
.
├─ index.html          # Página principal
├─ script.js           # Inicialización AOS y validación de formulario
├─ style.scss          # Fuente Sass
├─ style.css           # CSS compilado
├─ enviar.php          # Procesador del formulario
├─ bootstrap-5.3.8-dist/ # Bootstrap local
└─ assets/             # Imágenes del portafolio
```

## 💡 Cómo funciona la interactividad

* **AOS**: inicializado con `AOS.init({ duration: 1000, once: true })`
* **Validación de formulario**: `script.js` añade `was-validated` y previene envío si falla.
* Formulario HTML: `action="enviar.php"`, `method="POST"`.

## 🖼️ Vista previa (ejemplos)

<img src="assets/Tecnologias_desarrollo.jpg" alt="Tecnologías" width="300" />
<img src="assets/Imagen%20Aplicacion%20de%20seguridad.jpg" alt="App seguridad" width="300" />
<img src="assets/Imagen%20Operaciones%20aritmeticas%20(Informatica).jpg" alt="Operaciones aritméticas" width="300" />

> Nota: Se reemplazaron espacios en las rutas por `%20` para GitHub Pages.

## ⚙️ Buenas prácticas

* Optimiza imágenes (WebP/JPEG comprimido).
* Para producción, usa **SMTP autenticado** en lugar de `mail()`.
* Considera agregar un archivo `LICENSE` (MIT recomendado).
* Opcional: configurar CI para validar HTML/CSS/JS y compilar Sass automáticamente.

## 🤝 Contribuir

1. Fork → Branch → Pull Request.
2. Edita `style.scss` si modificas estilos, no `style.css`.
3. Abre issues para sugerencias o errores.

## 📫 Contacto

Jesús García Blázquez
Correo: `jesus.garbla@educa.jcyl.es`

## 📄 Licencia

Actualmente no hay archivo LICENSE. Se recomienda añadir uno (por ejemplo **MIT**) si quieres permitir reutilización.

```
