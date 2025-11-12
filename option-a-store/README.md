# My Online Store — Option A (Joint PHP & CSS)

This repository implements **Option A (Joint PHP & CSS)** for the "Final Project Phase One — The Checkup".

## ✅ What this includes
- 5 customer-facing pages, fully laid out and styled with **static placeholder content**:
  - `index.php` (Home)
  - `about.php`
  - `shop.php`
  - `contact.php`
  - `register.php` and `login.php`
- **PHP templating** via `includes/header.php` and `includes/footer.php`
- Single external CSS file in `css/style.css`
- Two fonts (Playfair Display for headings, Inter for body text)
- Consistent color scheme and responsive layout
- Relational database structure in `database/structure.sql`
- This README with purpose, tech stack, and setup

## 🛠 Tech Stack
- PHP 8+
- HTML5
- CSS3
- MySQL (for structure.sql)
- Git / GitHub

## 🚀 Local Setup (XAMPP/WAMP/MAMP)
1. Place this folder inside your server's web root:
   - XAMPP (Windows): `C:/xampp/htdocs/option-a-store`
   - MAMP (macOS): `Applications/MAMP/htdocs/option-a-store`
   - WAMP (Windows): `C:/wamp64/www/option-a-store`
2. Start Apache (and MySQL if you want to import the DB).
3. Visit: `http://localhost/option-a-store/`
4. (Optional DB test) Import `database/structure.sql` into MySQL using phpMyAdmin.

## 📁 Structure
```
option-a-store/
├── index.php
├── about.php
├── shop.php
├── contact.php
├── register.php
├── login.php
├── includes/
│   ├── header.php
│   └── footer.php
├── css/
│   └── style.css
├── assets/
│   └── images/
├── database/
│   └── structure.sql
└── README.md
```

## 🧪 Testing the DB Structure
- Open `http://localhost/phpmyadmin`
- Create a database or run the provided SQL script:
  - `database/structure.sql` (
    creates `mystore_db`, `users`, `products`, `orders`, and seeds sample products)

## 📝 Suggested Commit Plan
- `feat(scaffold): add base pages and includes`
- `feat(css): add global styles, color scheme, and responsive grid`
- `feat(db): add relational structure.sql`
- `docs(readme): add setup instructions`
- `chore(images): add placeholder assets`
- `refactor(nav): tweak header links`
- `style: fine-tune spacing and typography`

## 🧹 Notes
- All content is **static** at this phase, per Option A requirements.
- No PHP logic or DB reads are implemented yet — that’s for Phase Two.
```

