# NeoCorpusFit – Plataforma Web de Nutrición y Bienestar

## Descripción del proyecto

**NeoCorpusFit** es una plataforma web integral enfocada en el bienestar físico y nutricional. Combina herramientas de cálculo personalizado, recetas prácticas y planificación inteligente de comidas para ayudar a los usuarios a alcanzar objetivos como pérdida de grasa, ganancia muscular o mantenimiento de peso.

---

## Objetivos

- Organizar dietas mediante menús orientados a objetivos.
- Ofrecer recetas saludables vinculadas a productos del carrito de compras.
- Proporcionar herramientas de cálculo personalizadas (IMC, proteínas, creatina, calorías, % de grasa corporal).
- Permitir gestionar y editar contenido guardado en un área personal segura (menús, recetas, carritos).

---

## Funcionalidades clave

### Calculadoras interactivas
Accesibles desde el menú principal, ofrecen resultados inmediatos y recomendaciones personalizadas:

- **IMC** – Índice de Masa Corporal
- **Proteínas** – Ingesta diaria recomendada de proteínas
- **Creatina** – Ingesta sugerida de creatina según el peso
- **Harris-Benedict** – Necesidades calóricas basales y totales
- **% Grasa corporal** – Útil para establecer objetivos de composición corporal

### Carritos Inteligentes
- Tipos: Vegano, Casero, Alto en proteínas, Express, Mediterráneo.
- Cada uno incluye:
  - Información nutricional con justificación por producto
  - Factura simulada con precios estimados
  - Guardado en el área personal del usuario (si está registrado)

### Menús Personalizados
- 5 tipos de menús según objetivos dietéticos
- Cada uno incluye:
  - Enlaces directos a las recetas asociadas
  - Opciones de guardar y editar desde el panel del usuario

### Recetas Prácticas
- Filtrables por categoría: Vegano, Clásico, Alto en proteínas, Mediterráneo, Plan rápido
- Incluyen ingredientes, pasos y están basadas en los carritos
- Los usuarios registrados pueden guardarlas como favoritas

### Área Personal
- Requiere inicio de sesión
- Los usuarios pueden:
  - Ver/eliminar menús, carritos y recetas guardados
  - Editar menús personalizados

### Autenticación
- Requerida para guardar contenido personalizado
- Los usuarios no autenticados son redirigidos al login
- Registro rápido mediante email y contraseña

---

## Tecnologías Utilizadas

| Categoría        | Herramientas / Lenguajes                 |
|------------------|------------------------------------------|
| **Back-End**     | PHP (Laravel 12.9.2)                     |
| **Front-End**    | HTML5, SCSS, JavaScript, Bootstrap 5     |
| **Base de datos**     | MySQL (gestionado con PhpMyAdmin)          |
| **Control de versiones** | Git + GitHub                          
| **Herramienta de Build**   | Vite (para compilación de SCSS y JS)       |

---

## Guía para Configuración Local

### Requisitos Previos

Asegúrate de tener instalado lo siguiente:

- PHP ≥ 8.x  
- Composer  
- Node.js + NPM  
- MySQL  
- Laravel CLI  
- XAMPP (opcional, para servidor local y base de datos)

---

### Pasos para Ejecutar Localmente

```bash
# 1. Clonar el repositorio
git clone https://github.com/hclaros-dawi/NeocorpusFit.git
cd nocorpusfit

# 2. Instalar dependencias de PHP (Laravel)
composer install

# 3. Instalar dependencias de Front-End
npm install

# 4. Configurar el archivo .env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# 5. Ejecutar migraciones de la base de datos
php artisan migrate

# 6A. Iniciar servidor Laravel
php artisan serve

# 6B. Compilar assets de Front-End
npm run build
