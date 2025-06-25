# NeoCorpusFit – Nutrition and Wellness Web Platform

## Project Theme

**NeoCorpusFit** is a comprehensive web platform focused on users' physical and nutritional well-being. It combines personalized calculation tools, practical recipes, and smart meal planning to help users achieve goals such as fat loss, muscle gain, or weight maintenance.

---

## Project Objectives

- Organize users' diets through goal-oriented menus.
- Offer simple and healthy recipes linked to shopping basket products.
- Provide personalized body and nutritional calculation tools.
- Enable users to manage and edit saved content (menus, recipes, baskets) in a secure personal area.

---

## Key Features

### Interactive Calculators
Accessible from the main menu, offering immediate results and tailored recommendations:

- **BMI** – Body Mass Index
- **Protein** – Daily recommended protein intake
- **Creatine** – Suggested creatine intake based on weight
- **Harris-Benedict** – Basal and total caloric needs
- **Body Fat %** – Useful for setting body composition goals

### Smart Shopping Baskets
- Types: Vegan, Home-style, High-Protein, Express, Mediterranean
- Each includes:
  - Nutrition info with justification per product
  - Simulated invoice with estimated prices
  - Save to user’s personal area (if logged in)

### Personalized Menus
- 5 types of menus based on dietary goals
- Each includes:
  - Direct links to associated recipes
  - Save and edit options from the user dashboard

### Practical Recipes
- Filterable by category: Vegan, Classic, High-Protein, Mediterranean, Quick Plan
- Include ingredients, steps, and are based on baskets
- Logged-in users can save them as favorites

### Personal Area
- Login required
- Users can:
  - View/delete saved menus, baskets, and recipes
  - Edit personalized menus

### Authentication
- Required for saving personalized content
- Unauthenticated users are redirected to login
- Quick registration via email and password

---

## Technologies Used

| Category         | Tools / Languages                        |
|------------------|------------------------------------------|
| **Back-End**     | PHP (Laravel 12.9.2)                     |
| **Front-End**    | HTML5, SCSS, JavaScript, Bootstrap 5     |
| **Database**     | MySQL (managed with PhpMyAdmin)          |
| **Version Control** | Git + GitHub                         |
| **Build Tool**   | Vite (for SCSS and JS compilation)       |

---

## Local Setup Guide

### Prerequisites

Make sure you have the following installed:

- PHP ≥ 8.x  
- Composer  
- Node.js + NPM  
- MySQL  
- Laravel CLI  
- XAMPP (optional, for local web server and DB)

---

### Steps to Run Locally

```bash
# 1. Clone the repository
git clone https://github.com/hclaros-dawi/NeocorpusFit.git
cd nocorpusfit

# 2. Install PHP dependencies (Laravel)
composer install

# 3. Install Frontend dependencies
npm install

# 4. Configure your .env file
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# 5. Run database migrations
php artisan migrate

# 6A. Start Laravel backend server
php artisan serve

# 6B. Compile frontend assets
npm run build
