# Task Instruction — Laravel Portfolio Website

---

# 📌 Instruksi Utama

1. Selalu baca:
   - `prd.md`
   - `design.md`

2. Ikuti design guideline pada `design.md` secara ketat.

3. Kerjakan task secara bertahap dan terstruktur.

4. Gunakan best practice:
   - Laravel 13
   - PHP 8.4
   - TailwindCSS
   - JavaScript modern

5. Hindari:
   - duplicate code
   - hardcode berlebihan
   - inline styling berlebihan
   - query database di Blade

---

# 📂 Struktur Task Checklist

---

# 1. Project Setup & Configuration

### Task
- Setup Laravel project
- Setup TailwindCSS
- Setup Vite
- Setup folder structure
- Setup Blade component structure
- Setup assets

---

# 2. Database & Migration

### Task
- Create projects migration
- Create skills migration
- Create experiences migration
- Create services migration
- Create contact_messages migration
- Setup seeder

---

# 3. Models & Relationships

### Task
- Create Project model
- Create Skill model
- Create Experience model
- Create Service model
- Create ContactMessage model
- Setup relationships

---

# 4. Backend Logic

### Task
- Create controllers
- Setup routes
- Setup validation
- Setup middleware
- Setup pagination
- Setup reusable query logic

---

# 5. Admin Dashboard

### Task
- Setup authentication
- Create admin dashboard
- CRUD Projects
- CRUD Skills
- CRUD Experiences
- CRUD Services
- CRUD Contact Messages

---

# 6. Frontend & Blade Views

### Task
- Create layout
- Create navbar
- Create hero section
- Create about section
- Create skills section
- Create projects section
- Create experience section
- Create services section
- Create contact section
- Create footer

---

# 7. JavaScript & Animation

### Task
- Smooth scrolling
- Typing animation
- Theme switcher
- Toast notification
- Scroll reveal animation
- Mobile navbar toggle
- AJAX contact form

---

# 8. Security & Optimization

### Task
- CSRF protection
- Validation
- Escape output
- Rate limiting
- SEO optimization
- Lazy loading
- Performance optimization

---

# 9. Final Polish & Bug Fixes

### Task
- Fix responsive issues
- Fix console errors
- Optimize animation
- Clean unused assets
- Refactor duplicate code
- Final testing

---

# ✅ Aturan Update Tasklist

Setiap selesai mengerjakan task:

1. Update file `.agents/tasklist.md`
2. Tandai task selesai dengan `[x]`
3. Tambahkan emoji `✅`
4. Update progress project
5. Tambahkan catatan file yang dibuat/diubah
6. Tambahkan command yang dijalankan

---

# 📝 Contoh Format Task

```markdown
- [x] ✅ Task 2.1 - Create Projects Migration

Catatan:
- Membuat migration projects table
- Menambahkan field title, slug, description

Command:
- php artisan make:migration create_projects_table
```

---

# 📊 Format Progress

```markdown
# Progress Project

Progress: 35%

## Completed
- Laravel setup
- Tailwind setup
- Layout setup

## In Progress
- Hero section
- Navbar animation
```

---

# 🧹 Coding Rules

## Wajib
- Clean architecture
- Reusable component
- Readable code
- Responsive design
- Semantic HTML
- Mobile-first layout

## Dilarang
- Duplicate code
- Inline CSS berlebihan
- Hardcode berlebihan
- Query database di Blade

---

# 🎯 Goal

Hasil akhir harus:
- Clean
- Responsive
- Modern
- Production-ready
- Mudah dikembangkan
- Mengikuti design.md
- Tidak ada console error