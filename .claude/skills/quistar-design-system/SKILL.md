---
name: quistar-design-system
description: "Use when building or restyling any Quistar UI — Blade views, Livewire components, or partials that render buttons, badges, cards, forms, inputs, tables, alerts, empty states, or quiz/question/option surfaces. Also use when picking a colour, border, focus ring, or muted-text shade, when a page looks inconsistent with the rest of the app, and when adding new brand colours or theme tokens to resources/css/app.css. Skip for backend PHP, routes, migrations, and tests."
---

# Quistar Design System

## Overview

Quistar is **light-only**: white surfaces, hairline borders, tints at the 50–100 end, and colour used sparingly. Solid saturated fills appear only on the one primary action per view, plus the occasional full-bleed brand band.

**Core principle:** reach for an existing recipe below before inventing classes. If a recipe is missing, derive it from the tokens — never introduce a new hue.

**Live reference:** `resources/views/style-guide.blade.php` renders every component in this skill at `/style-guide` (route name `style-guide`). Tokens live in `resources/css/app.css`.

## No dark mode

The app renders light in every context. **Never write a `dark:` variant** — not on new code, and strip any you find in old code. Every page sets `<meta name="color-scheme" content="light">` in its `<head>` so browser chrome (scrollbars, form controls, autofill) stays light even when the OS is in dark mode. Add that meta tag to any new full-page Blade layout.

## Tokens

Tailwind v4, CSS-first config. No `tailwind.config.js` — add tokens to the `@theme` block in `resources/css/app.css`.

| Role | Token | Notes |
|---|---|---|
| Brand | `brand-50` … `brand-950` | Sky scale. **Never violet or purple.** |
| Neutral | `slate-*` | Never `zinc`, `gray`, `neutral`, or `stone` |
| Correct answer | `emerald-*` | |
| Draft / warning | `amber-*` | |
| Incorrect / destructive | `rose-*` | |
| Font | `font-sans` | Instrument Sans, already the default |

### Shade assignments

| Use | Class |
|---|---|
| Page background | `bg-white`, or `bg-slate-50` for dense/tool-like pages |
| Card / panel surface | `bg-white` |
| Card border | `border-slate-100` |
| Control border | `border-slate-200` |
| Heading text | `text-slate-900` |
| Body text | `text-slate-700` |
| Muted text | `text-slate-500` |
| Faint text (timestamps, captions) | `text-slate-400` |
| Tinted surface | `bg-{color}-50` |
| Focus ring | `focus:ring-2 focus:ring-brand-100` |

Marketing pages sit on `bg-white` and separate sections with hairline `border-slate-100` rules or a soft `bg-gradient-to-b from-brand-50 to-white` band. App pages sit on `bg-slate-50` so white cards read as raised.

## The contrast rule

**White text requires `brand-600` or darker.** White on `brand-400` is 2.1:1 and on `brand-500` is 2.8:1 — both fail WCAG AA (4.5:1). `brand-600` is 4.1:1, the lightest usable solid fill.

To make a button lighter, invert it — dark text on a light tint (`bg-brand-50 text-brand-700`) — never white text on a lighter fill.

## Component recipes

**Primary button** (one per view):
```html
class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700 focus:ring-2 focus:ring-brand-400 focus:ring-offset-2 focus:outline-none"
```

**Soft / secondary / ghost / destructive:**
```html
bg-brand-50 px-4 py-2 text-brand-700 hover:bg-brand-100          <!-- soft -->
border border-slate-200 bg-white text-slate-600 hover:bg-slate-50 <!-- secondary -->
text-slate-500 hover:bg-slate-100                                 <!-- ghost -->
bg-rose-50 text-rose-700 hover:bg-rose-100                        <!-- destructive -->
```
Sizes: `px-2.5 py-1.5 text-xs` / `px-4 py-2 text-sm` / `px-5 py-2.5 text-base`.

**Brand band + inverted button** — for a full-bleed closing call to action. The band is the saturated element, so the button flips to white:
```html
<section class="bg-brand-600">                       <!-- headline: text-white, body: text-brand-50 -->
  <a class="rounded-lg bg-white px-5 py-2.5 text-base font-medium text-brand-700 shadow-sm transition hover:bg-brand-50 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-brand-600 focus:outline-none">
```
A band counts as the view's one solid brand element — don't also put a `bg-brand-600` button elsewhere on screen.

**Status badge** — dot + label, tint 50, text 700:
```html
class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700"
  <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
```
`QuizStatus::Published` → emerald. `QuizStatus::Draft` → amber. Keep these mappings stable.

**Card:**
```html
class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-5 transition hover:border-brand-200 hover:shadow-sm"
```
Borders carry structure, not shadows. Shadow appears on hover only — the exception is a hero-level showcase panel, which may rest at `shadow-sm` with `rounded-2xl`.

**Text input** (same classes for `select` and `textarea`):
```html
class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 placeholder:text-slate-300 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none"
```
Always label above, help or error text below. Error swaps the border to `border-rose-300` and adds `text-xs text-rose-500`.

**Alert** — tint 50, border 100, text 800:
```html
class="rounded-lg border border-amber-100 bg-amber-50 px-4 py-3 text-sm text-amber-800"
```

**Answer option row** — neutral, correct, incorrect:
```html
border-slate-200 hover:border-brand-300 hover:bg-brand-50   <!-- unanswered -->
border-emerald-200 bg-emerald-50                            <!-- correct -->
border-rose-200 bg-rose-50                                  <!-- incorrect -->
```
Each carries a letter chip: `flex h-6 w-6 shrink-0 items-center justify-center rounded-md text-xs font-semibold`.

**Progress bar:**
```html
<div class="h-1.5 w-full overflow-hidden rounded-full bg-slate-100">
  <div class="h-full w-1/4 rounded-full bg-brand-500"></div>
```

**Section eyebrow** — small brand label above a section heading:
```html
class="text-xs font-medium tracking-wide text-brand-600 uppercase"
```

## Rules

- **No `dark:` variants, ever.** See the section above.
- **`gap`, never margins,** for spacing between siblings. Sections use `flex flex-col gap-*`.
- **`tracking-tight` on every heading.**
- **Page shell:** `mx-auto max-w-5xl px-6`. Full-bleed bands put the background on the `<section>` and keep the `max-w-5xl` wrapper inside. Anchored sections need `scroll-mt-24` to clear the sticky header.
- **Tables** wrap in `overflow-x-auto` with the border on the wrapper, not the `<table>`.
- After editing tokens or views, run `npm run build` — Blade classes are scanned via `@source '../views'`, so a new class is invisible until rebuilt.

## Common mistakes

| Mistake | Fix |
|---|---|
| Any `dark:` class | Delete it — the app is light-only |
| `zinc-*` / `gray-*` | Use `slate-*` |
| Violet, purple, indigo | Use `brand-*` (sky) |
| White text on `brand-400`/`500` | `brand-600` minimum, or invert to dark-on-tint |
| `shadow-md` on resting cards | Border only; shadow on hover |
| `bg-{color}-100` for badge tints | Tint at `50`, text at `700` |
| New full-page layout with no `color-scheme` meta | Add `<meta name="color-scheme" content="light">` |
| New `tailwind.config.js` | v4 is CSS-first — edit `@theme` in `app.css` |
| Style change not appearing | `npm run build`, or keep `npm run dev` running |
