---
version: alpha
name: Neon Portfolio
description: Modern dark-mode portfolio system with neon violet-blue accents, glassmorphism surfaces, smooth animation, and premium developer aesthetic.

colors:
    primary: "#F5F7FF"
    secondary: "#9CA3AF"
    tertiary: "#8B5CF6"
    accent: "#38BDF8"
    neutral: "#0B0F19"
    surface: "#111827"
    surface-light: "#1F2937"
    border: "#2A3441"
    success: "#22C55E"
    danger: "#EF4444"
    warning: "#F59E0B"
    on-primary: "#0B0F19"

typography:
    display:
        fontFamily: Space Grotesk
        fontSize: 4rem
        fontWeight: 700
        letterSpacing: "-0.04em"

    h1:
        fontFamily: Space Grotesk
        fontSize: 3rem
        fontWeight: 700
        letterSpacing: "-0.03em"

    h2:
        fontFamily: Space Grotesk
        fontSize: 2.2rem
        fontWeight: 600

    h3:
        fontFamily: Space Grotesk
        fontSize: 1.4rem
        fontWeight: 600

    body:
        fontFamily: Inter
        fontSize: 1rem
        lineHeight: 1.7
        fontWeight: 400

    label:
        fontFamily: Inter
        fontSize: 0.8rem
        fontWeight: 500
        letterSpacing: "0.04em"

rounded:
    sm: 8px
    md: 14px
    lg: 22px
    xl: 32px
    full: 999px

spacing:
    xs: 4px
    sm: 8px
    md: 16px
    lg: 32px
    xl: 64px
    xxl: 120px

shadow:
    sm: "0 2px 10px rgba(0,0,0,0.15)"
    md: "0 8px 30px rgba(0,0,0,0.25)"
    lg: "0 15px 45px rgba(0,0,0,0.35)"
    glow: "0 0 25px rgba(139,92,246,0.45)"

glassmorphism:
    background: "rgba(255,255,255,0.04)"
    border: "1px solid rgba(255,255,255,0.08)"
    blur: "backdrop-blur(14px)"

animation:
    transitionFast: "all 0.2s ease"
    transitionNormal: "all 0.35s ease"
    transitionSlow: "all 0.5s ease"

layout:
    containerWidth: "1280px"
    sectionSpacing: "120px"
    mobileSpacing: "72px"

components:

    button-primary:
        background: "linear-gradient(135deg, #8B5CF6, #38BDF8)"
        textColor: "{colors.primary}"
        rounded: "{rounded.full}"
        padding: "14px 28px"
        shadow: "{shadow.glow}"
        fontWeight: 600

    button-secondary:
        backgroundColor: "rgba(255,255,255,0.05)"
        border: "1px solid rgba(255,255,255,0.08)"
        textColor: "{colors.primary}"
        rounded: "{rounded.full}"
        padding: "14px 28px"

    navbar:
        backgroundColor: "rgba(11,15,25,0.65)"
        backdropBlur: true
        borderBottom: "1px solid rgba(255,255,255,0.06)"
        height: "80px"

    hero:
        layout: "split-grid"
        align: "center"
        minHeight: "100vh"

    card:
        backgroundColor: "rgba(255,255,255,0.04)"
        border: "1px solid rgba(255,255,255,0.08)"
        rounded: "{rounded.lg}"
        padding: "28px"
        shadow: "{shadow.md}"
        backdropBlur: true

    project-card:
        hoverTranslateY: "-10px"
        hoverGlow: true
        imageRounded: "{rounded.md}"

    skill-card:
        iconSize: "42px"
        progressHeight: "8px"
        glowEffect: true

    timeline:
        lineColor: "{colors.border}"
        dotColor: "{colors.tertiary}"

    input:
        backgroundColor: "rgba(255,255,255,0.04)"
        border: "1px solid rgba(255,255,255,0.08)"
        textColor: "{colors.primary}"
        rounded: "{rounded.md}"
        padding: "14px 18px"

    toast:
        backgroundColor: "{colors.surface-light}"
        textColor: "{colors.primary}"
        rounded: "{rounded.md}"
        shadow: "{shadow.md}"

---

# Overview

Neon Portfolio adalah design system modern untuk website portfolio developer dengan pendekatan dark-mode premium, glassmorphism, dan neon interaction.

Fokus utama desain:
- Professional
- Modern
- Minimal clean
- Interactive
- High-end developer aesthetic

Desain harus terasa seperti:
- Awwwards website
- Modern SaaS landing page
- Premium developer portfolio

---

# Color Philosophy

## Primary — `#F5F7FF`
Digunakan untuk:
- Heading
- Main text
- CTA text

---

## Secondary — `#9CA3AF`
Digunakan untuk:
- Paragraph
- Metadata
- Secondary label
- Subtitle

---

## Tertiary — `#8B5CF6`
Accent utama.

Digunakan untuk:
- CTA button
- Active state
- Hover state
- Important highlight

Jangan gunakan terlalu banyak agar tetap premium.

---

## Accent — `#38BDF8`
Accent pendukung untuk:
- Glow
- Gradient
- Hover interaction
- Decorative line

---

## Neutral — `#0B0F19`
Background utama website.

---

# Typography Rules

## Heading
Gunakan:
- Space Grotesk
- Bold
- Tight spacing
- High contrast

Heading harus terasa:
- futuristic
- premium
- modern

---

## Body Text
Gunakan:
- Inter
- Clean readability
- Comfortable spacing

Jangan gunakan paragraph terlalu panjang.

---

# Spacing Rules

Gunakan whitespace besar.

Tujuan:
- UI terasa premium
- Tidak sempit
- Fokus pada content

Minimal section spacing:
- Desktop → 120px
- Mobile → 72px

---

# Animation Rules

Gunakan animasi:
- Smooth
- Soft
- Modern

Hindari:
- Bounce berlebihan
- Animasi norak
- Transition terlalu cepat

Gunakan:
- Fade-up
- Blur reveal
- Soft hover lift
- Gradient movement
- Opacity transition

---

# Glassmorphism Rules

Semua card menggunakan:
- Semi transparent background
- Soft border
- Backdrop blur
- Subtle shadow

Jangan gunakan:
- Border terlalu terang
- Blur berlebihan
- Shadow keras

---

# Button Rules

## Primary Button
Gunakan gradient:
- Violet → Blue

Harus memiliki:
- Glow halus
- Rounded full
- Hover lift effect

---

## Secondary Button
Gunakan:
- Transparent surface
- Border subtle
- Hover glass effect

---

# Layout Rules

Gunakan:
- Max width 1280px
- Centered content
- Responsive grid
- Mobile-first layout

---

# Responsive Rules

## Mobile
- Single column layout
- Hamburger navbar
- Reduced spacing
- Font lebih kecil

## Tablet
- 2-column grid

## Desktop
- Full modern layout
- Split hero section
- Multi-column grid

---

# Component Rules

## Navbar
Harus:
- Sticky
- Blur background
- Transparent saat top
- Solid saat scroll

---

## Hero Section
Harus:
- Fullscreen
- Strong headline
- Animated background
- CTA focus

---

## Project Card
Harus:
- Hover glow
- Image preview
- Smooth lift animation

---

## Skill Card
Harus:
- Icon modern
- Animated progress bar
- Glow interaction

---

# Do's and Don'ts

## ✅ Do
- Gunakan banyak whitespace
- Gunakan smooth animation
- Gunakan glow secara subtle
- Gunakan typography clean
- Fokus readability
- Gunakan dark mode konsisten

---

## ❌ Don't
- Jangan gunakan warna terlalu banyak
- Jangan gunakan animasi berlebihan
- Jangan gunakan card terlalu terang
- Jangan gunakan spacing sempit
- Jangan gunakan shadow kasar
- Jangan gunakan font random
- Jangan membuat UI terlalu ramai

---

# Final Feel

Website harus terasa:
- Premium
- Futuristic
- Professional
- Clean
- Interactive
- Modern developer portfolio
- High-end UI experience