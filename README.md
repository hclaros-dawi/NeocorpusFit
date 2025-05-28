# TFG: Página web para la gestión de nutrición y bienestar– **NeoCorpusFit**

## Temática

**NeoCorpusFit** es una plataforma integral enfocada en el bienestar físico y nutricional del usuario. Combina herramientas de cálculo personalizadas, recetas prácticas y planificación alimenticia inteligente para facilitar el logro de objetivos como pérdida de grasa, ganancia muscular o mantenimiento


## Objetivos del proyecto

**NeoCorpusFit** tiene como finalidad:

- Ayudar al usuario a **organizar su dieta** mediante menús adaptados a sus objetivos
- Ofrecer **recetas simples y saludables** vinculadas a los productos de las canastas seleccionadas
- Brindar **herramientas de cálculo corporal y nutricional** personalizadas
- Permitir la gestión y edición de contenido (menús) guardado en un **área personal protegida por login**

## Funcionalidades clave

### Calculadoras interactivas

Accesibles desde el menú principal. Ofrecen resultados inmediatos y recomendaciones:

1. **IMC**: Calcula el Índice de Masa Corporal para conocer el rango de peso ideal
2. **Proteínas**: Estima el consumo diario recomendado de proteínas
3. **Creatina**: Determina la cantidad sugerida según peso corporal
4. **Harris-Benedict**: Estima el requerimiento calórico basal y total para déficit o superávit
5. **Porcentaje de grasa corporal**: Calcula un valor aproximado útil para planificar metas de composición corporal

### Canastas de compra

- Canastas como: **vegana**, **de casa**, **proteica**, **express** y **mediterránea**
- Cada canasta incluye:
  - Modal con detalle nutricional y justificación de cada producto
  - Factura simulada con precios estimados
  - Posibilidad de guardarla en el área personal (si el usuario ha iniciado sesión)

### Menús personalizados

- 5 tipos de menús organizados por objetivo
- Cada menú tiene:
  - Enlace directo a sus recetas.
  - Opción de guardado y **edición** desde el panel personal del usuario

### Recetas prácticas

- Filtrables por tipo: vegano, clásicos, alto en proteínas, mediterráneo, plan rápido
- Muestran ingredientes, preparación paso a paso y están basadas en las canastas
- Los usuarios logueados pueden **guardarlas como favoritas**

### Área personal

- Solo accesible tras el login
- Permite al usuario:
  - Ver y eliminar sus recetas, menús y canastas guardadas
  - **Editar sus menús personalizados**

### Registro e inicio de sesión

- Requerido para guardar contenido personalizado
- Si el usuario intenta guardar sin iniciar sesión, será redirigido al login
- Registro rápido mediante email y contraseña

## Tecnologías utilizadas

| Categoría        | Herramientas / Lenguajes |
|------------------|---------------------------|
| **Back-End**     | PHP (Laravel 12.9.2)          |
| **Front-End**    | HTML5, SCSS, JavaScript, Bootstrap 5 |
| **Base de Datos**| MySQL (gestionada mediante PhpMyAdmin) |
| **Control de versiones** | Git + GitHub       |
| **Build Tool**   | Vite para compilar SCSS y JS |
