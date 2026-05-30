# MealMingle 🍽️

MealMingle is a catering web app built with Laravel, made for university students and staff who struggle to find food that fits their budget, schedule, and taste. Instead of wandering around campus, users can browse catering options, filter by what matters to them, and place orders in one place.

This was a collaborative project — 3 contributors, 234+ commits, built end-to-end from auth to admin panel.

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)

---

## What it does

- Browse catering menus filtered by budget, category, and preference
- Place orders with a straightforward checkout flow
- User authentication & profile management
- Admin panel for managing menus and orders
- Fully responsive with TailwindCSS

---

## Tech Stack

- **Backend** — Laravel (PHP), MySQL
- **Frontend** — Blade, TailwindCSS, Vite
- **Auth** — Laravel built-in authentication

---

## Running locally

Make sure you have PHP >= 8.0, Composer, Node.js, and MySQL ready.

```bash
git clone https://github.com/Aerossky/MealMingle.git
cd MealMingle

composer install
npm install

cp .env.example .env
php artisan key:generate

# Set up your DB credentials in .env, then:
php artisan migrate --seed
php artisan storage:link

npm run dev
php artisan serve
```

Visit `http://localhost:8000` and you're good to go.

---

## License

MIT
