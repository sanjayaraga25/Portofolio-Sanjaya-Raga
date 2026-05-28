# PRD — Laravel Portfolio Website

---

# 📌 Project Overview

## Nama Proyek
Laravel Portfolio Website

## Deskripsi

Membangun website portfolio modern menggunakan Laravel 13 dengan desain premium, responsive, dan professional untuk developer/media creative.

Website harus:
- Modern
- Clean
- Responsive
- Production-ready
- SEO friendly
- Mudah dikembangkan

---

# 🎯 Tujuan Aplikasi

Website digunakan untuk:
- Menampilkan profile profesional
- Menampilkan skill dan pengalaman
- Menampilkan project portfolio
- Menjadi personal branding developer
- Menjadi media contact client/HRD

---

# 🛠️ Tech Stack

## Backend
- Laravel 13
- PHP 8.4
- MySQL

## Frontend
- TailwindCSS
- Alpine.js / Vanilla JavaScript
- Vite

---

# 🎨 UI / UX Concept

Gunakan konsep:
- Dark mode modern
- Neon gradient violet/blue
- Glassmorphism
- Smooth animation
- Responsive mobile-first
- UI aesthetic seperti portfolio modern/Awwwards

---

# 📱 Features

---

# 1. Landing Page

## Hero Section

### Content
- Nama lengkap
- Role/profesi
- Short description
- CTA button

### CTA Button
- Download CV
- Contact Me
- View Projects

### Features
- Fullscreen layout
- Typing animation
- Animated gradient background
- Particle effect
- Smooth animation

---

# 2. Navbar

### Features
- Sticky navbar
- Blur effect saat scroll
- Active menu
- Smooth scroll
- Mobile hamburger menu
- Responsive navbar

---

# 3. About Section

### Content
- Foto profile
- Deskripsi diri
- Career goals
- Tech stack
- Short experience

### Features
- Glassmorphism card
- Fade animation
- Responsive layout

---

# 4. Skills Section

## Categories
- Frontend
- Backend
- Database
- Tools
- Streaming & Multimedia

## Skill Examples
- HTML
- CSS
- JavaScript
- PHP
- Laravel
- Python
- MySQL
- Git
- OBS Studio

### Features
- Animated progress bar
- Hover glow effect
- Skill icon
- Responsive grid

---

# 5. Projects Section

### Content
- Thumbnail
- Project title
- Description
- Tech stack
- GitHub link
- Demo link

### Features
- Hover animation
- Glassmorphism card
- Responsive grid
- Filter category

---

# 6. Experience Section

### Content
- Position
- Company
- Description
- Timeline

### Features
- Vertical timeline
- Animated reveal
- Timeline icon

---

# 7. Services Section

### Services
- Web Development
- Live Streaming Setup
- Media Production
- UI/UX Design

### Features
- Service card
- Hover animation

---

# 8. Contact Section

### Form Fields
- Name
- Email
- Subject
- Message

### Features
- Laravel validation
- Save to database
- Success notification
- AJAX form

### Social Links
- WhatsApp
- LinkedIn
- GitHub
- Instagram

---

# 9. Footer

### Content
- Social media links
- Copyright
- Back to top button

---

# ✨ Additional Features

- Dark/light mode toggle
- Toast notification
- Typing text animation
- Scroll progress indicator
- Cursor glow effect
- Lazy loading image
- Loading screen animation

---

# 🔐 Security Requirements

- CSRF protection
- Validation semua input
- Escape output Blade
- Sanitize contact form
- Rate limiting

---

# 🧠 Backend Requirements

Gunakan:
- Laravel Controller
- Eloquent ORM
- Request Validation
- Middleware
- Route Naming
- Blade Components

---

# 🗄️ Database Structure

## Tables

### users
Untuk authentication admin dashboard.

### projects
- id
- title
- slug
- description
- thumbnail
- github_url
- demo_url
- status
- timestamps

### skills
- id
- name
- category
- percentage
- icon
- timestamps

### experiences
- id
- title
- company
- description
- start_date
- end_date
- timestamps

### services
- id
- title
- description
- icon
- timestamps

### contact_messages
- id
- name
- email
- subject
- message
- timestamps

---

# 🧩 Project Structure

```plaintext
resources/views/
├── layouts/
├── partials/
├── components/
├── pages/
└── admin/
```

---

# 📦 Required Files

Project harus memiliki:
- Migration
- Seeder
- Models
- Controllers
- Routes
- Blade Views
- Tailwind Config
- Vite Config
- JavaScript Files

---

# 🚀 Running Instructions

## Install Dependency

```bash
composer install
npm install
```

## Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

## Setup Database

Edit `.env`

```env
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=
```

## Run Migration

```bash
php artisan migrate --seed
```

## Run Vite

```bash
npm run dev
```

## Run Laravel Server

```bash
php artisan serve
```

---

# 🌍 Deployment Recommendation

- Vercel
- Railway
- VPS
- Shared Hosting
- Laravel Forge

---

# 🏁 Final Goal

Website harus:
- Responsive
- Modern
- Professional
- Smooth animation
- Production-ready
- Mudah dikembangkan
- Cocok untuk HRD/client