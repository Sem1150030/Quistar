<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Style Guide') }} - {{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-slate-50 font-sans text-slate-700 antialiased dark:bg-slate-950 dark:text-slate-300">
        <header class="sticky top-0 z-10 border-b border-slate-100 bg-white/80 backdrop-blur dark:border-slate-800 dark:bg-slate-950/80">
            <div class="mx-auto flex max-w-5xl flex-col gap-4 px-6 py-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-center gap-3">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-500 text-sm font-bold text-white">Q</span>
                    <div>
                        <p class="text-sm font-semibold text-slate-900 dark:text-slate-100">{{ config('app.name', 'Quistar') }}</p>
                        <p class="text-xs text-slate-400 dark:text-slate-500">Style guide</p>
                    </div>
                </div>

                <nav class="flex flex-wrap gap-x-4 gap-y-1 text-sm text-slate-500 dark:text-slate-400">
                    <a href="#colors" class="hover:text-brand-600 dark:hover:text-brand-400">Colors</a>
                    <a href="#typography" class="hover:text-brand-600 dark:hover:text-brand-400">Type</a>
                    <a href="#buttons" class="hover:text-brand-600 dark:hover:text-brand-400">Buttons</a>
                    <a href="#badges" class="hover:text-brand-600 dark:hover:text-brand-400">Badges</a>
                    <a href="#forms" class="hover:text-brand-600 dark:hover:text-brand-400">Forms</a>
                    <a href="#cards" class="hover:text-brand-600 dark:hover:text-brand-400">Cards</a>
                    <a href="#alerts" class="hover:text-brand-600 dark:hover:text-brand-400">Alerts</a>
                    <a href="#tables" class="hover:text-brand-600 dark:hover:text-brand-400">Tables</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto flex max-w-5xl flex-col gap-16 px-6 py-12">
            {{-- Intro --}}
            <section class="flex flex-col gap-3">
                <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-slate-100">Design system</h1>
                <p class="max-w-2xl text-slate-500 dark:text-slate-400">
                    The visual building blocks for {{ config('app.name', 'Quistar') }}. Reuse the utility classes shown here rather than
                    inventing new ones &mdash; every element adapts to light and dark automatically.
                </p>
            </section>

            {{-- Colors --}}
            <section id="colors" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Colors</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Brand sky drives actions and focus. Slate carries text, borders and surfaces. Tints stay at the 50&ndash;100 end.</p>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-slate-400 uppercase dark:text-slate-500">Brand</p>
                    <div class="grid grid-cols-6 gap-2 sm:grid-cols-11">
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-50 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">50</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-100 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">100</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-200 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">200</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-300 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">300</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-400 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">400</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-500 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] font-semibold text-slate-600 dark:text-slate-300">500</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-600 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] font-semibold text-slate-600 dark:text-slate-300">600</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-700 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">700</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-800 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">800</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-900 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">900</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-950 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">950</span></div>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-slate-400 uppercase dark:text-slate-500">Neutral</p>
                    <div class="grid grid-cols-6 gap-2 sm:grid-cols-11">
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-50 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">50</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-100 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">100</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-200 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">200</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-300 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">300</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-400 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">400</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-500 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">500</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-600 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">600</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-700 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">700</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-800 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">800</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-900 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">900</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-950 ring-1 ring-slate-900/5 ring-inset dark:ring-white/10"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">950</span></div>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-slate-400 uppercase dark:text-slate-500">Semantic</p>
                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-emerald-400"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">emerald-400 &middot; correct</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-amber-300"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">amber-300 &middot; draft</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-rose-400"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">rose-400 &middot; incorrect</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-400"></div><span class="text-[11px] text-slate-400 dark:text-slate-500">brand-400 &middot; info</span></div>
                    </div>
                </div>
            </section>

            {{-- Typography --}}
            <section id="typography" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Typography</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Instrument Sans throughout. Headings always pair with <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-xs text-slate-600 dark:bg-slate-800 dark:text-slate-300">tracking-tight</code>.</p>
                </div>

                <div class="flex flex-col gap-5 rounded-xl border border-slate-100 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-col gap-1">
                        <p class="text-3xl font-bold tracking-tight text-slate-900 dark:text-slate-100">Which planet is closest to the sun?</p>
                        <code class="font-mono text-xs text-slate-400 dark:text-slate-500">text-3xl font-bold tracking-tight text-slate-900</code>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Section heading</p>
                        <code class="font-mono text-xs text-slate-400 dark:text-slate-500">text-xl font-semibold tracking-tight text-slate-900</code>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-base text-slate-700 dark:text-slate-300">Body copy sits at the base size in slate-700, so longer question text stays comfortable to read without feeling heavy.</p>
                        <code class="font-mono text-xs text-slate-400 dark:text-slate-500">text-base text-slate-700 dark:text-slate-300</code>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm text-slate-500 dark:text-slate-400">Muted helper text for hints, timestamps and counts.</p>
                        <code class="font-mono text-xs text-slate-400 dark:text-slate-500">text-sm text-slate-500 dark:text-slate-400</code>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-base">An inline <a href="#typography" class="font-medium text-brand-600 underline underline-offset-4 hover:text-brand-700 dark:text-brand-400 dark:hover:text-brand-300">text link</a> inside a sentence.</p>
                        <code class="font-mono text-xs text-slate-400 dark:text-slate-500">text-brand-600 underline underline-offset-4</code>
                    </div>
                </div>
            </section>

            {{-- Buttons --}}
            <section id="buttons" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Buttons</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">One primary action per view. Solid fills stay at 600 so white labels keep enough contrast; everything else is light.</p>
                </div>

                <div class="flex flex-col gap-6 rounded-xl border border-slate-100 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-wrap items-center gap-3">
                        <button type="button" class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700 focus:ring-2 focus:ring-brand-400 focus:ring-offset-2 focus:outline-none dark:focus:ring-offset-slate-900">
                            Publish quiz
                        </button>
                        <button type="button" class="rounded-lg bg-brand-50 px-4 py-2 text-sm font-medium text-brand-700 transition hover:bg-brand-100 focus:ring-2 focus:ring-brand-400 focus:outline-none dark:bg-brand-500/10 dark:text-brand-300 dark:hover:bg-brand-500/20">
                            Soft primary
                        </button>
                        <button type="button" class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50 focus:ring-2 focus:ring-brand-400 focus:outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700">
                            Save draft
                        </button>
                        <button type="button" class="rounded-lg px-4 py-2 text-sm font-medium text-slate-500 transition hover:bg-slate-100 focus:ring-2 focus:ring-brand-400 focus:outline-none dark:text-slate-400 dark:hover:bg-slate-800">
                            Cancel
                        </button>
                        <button type="button" class="rounded-lg bg-rose-50 px-4 py-2 text-sm font-medium text-rose-700 transition hover:bg-rose-100 focus:ring-2 focus:ring-rose-300 focus:outline-none dark:bg-rose-500/10 dark:text-rose-300 dark:hover:bg-rose-500/20">
                            Delete
                        </button>
                        <button type="button" disabled class="cursor-not-allowed rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-400 dark:bg-slate-800 dark:text-slate-600">
                            Disabled
                        </button>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 border-t border-slate-100 pt-6 dark:border-slate-800">
                        <button type="button" class="rounded-md bg-brand-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm transition hover:bg-brand-700">Small</button>
                        <button type="button" class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700">Medium</button>
                        <button type="button" class="rounded-lg bg-brand-600 px-5 py-2.5 text-base font-medium text-white shadow-sm transition hover:bg-brand-700">Large</button>
                        <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700">
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" aria-hidden="true">
                                <path d="M10 4.5v11M4.5 10h11" />
                            </svg>
                            With icon
                        </button>
                    </div>
                </div>
            </section>

            {{-- Badges --}}
            <section id="badges" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Badges</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Status pills mirror the <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-xs text-slate-600 dark:bg-slate-800 dark:text-slate-300">QuizStatus</code> cases. Tint at 50, text at 700.</p>
                </div>

                <div class="flex flex-wrap items-center gap-3 rounded-xl border border-slate-100 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700 dark:bg-amber-400/10 dark:text-amber-300">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                        Draft
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                        Published
                    </span>
                    <span class="inline-flex items-center rounded-full bg-brand-50 px-2.5 py-1 text-xs font-medium text-brand-700 dark:bg-brand-400/10 dark:text-brand-300">12 questions</span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-600 dark:bg-slate-800 dark:text-slate-300">Neutral</span>
                    <span class="inline-flex items-center rounded-full bg-rose-50 px-2.5 py-1 text-xs font-medium text-rose-700 dark:bg-rose-400/10 dark:text-rose-300">Archived</span>
                    <span class="inline-flex items-center rounded-full border border-slate-200 px-2.5 py-1 text-xs font-medium text-slate-500 dark:border-slate-700 dark:text-slate-400">Outline</span>
                </div>
            </section>

            {{-- Forms --}}
            <section id="forms" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Form elements</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Label above, help or error text below. Focus always shows a soft brand ring.</p>
                </div>

                <div class="grid gap-6 rounded-xl border border-slate-100 bg-white p-6 sm:grid-cols-2 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-col gap-1.5">
                        <label for="sg-title" class="text-sm font-medium text-slate-700 dark:text-slate-200">Quiz title</label>
                        <input id="sg-title" type="text" placeholder="Solar system basics" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 placeholder:text-slate-300 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:placeholder:text-slate-500 dark:focus:ring-brand-500/20">
                        <p class="text-xs text-slate-400 dark:text-slate-500">Shown at the top of the quiz.</p>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="sg-status" class="text-sm font-medium text-slate-700 dark:text-slate-200">Status</label>
                        <select id="sg-status" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:focus:ring-brand-500/20">
                            <option>Draft</option>
                            <option>Published</option>
                        </select>
                        <p class="text-xs text-slate-400 dark:text-slate-500">Drafts stay hidden from participants.</p>
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-2">
                        <label for="sg-description" class="text-sm font-medium text-slate-700 dark:text-slate-200">Description</label>
                        <textarea id="sg-description" rows="3" placeholder="A short summary of what this quiz covers&hellip;" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 placeholder:text-slate-300 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:placeholder:text-slate-500 dark:focus:ring-brand-500/20"></textarea>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="sg-error" class="text-sm font-medium text-slate-700 dark:text-slate-200">Field with an error</label>
                        <input id="sg-error" type="text" class="w-full rounded-lg border border-rose-300 bg-white px-3 py-2 text-sm text-slate-700 focus:border-rose-400 focus:ring-2 focus:ring-rose-100 focus:outline-none dark:border-rose-500/50 dark:bg-slate-800 dark:text-slate-200 dark:focus:ring-rose-500/20">
                        <p class="text-xs text-rose-500 dark:text-rose-400">The title field is required.</p>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="sg-disabled" class="text-sm font-medium text-slate-400 dark:text-slate-500">Disabled</label>
                        <input id="sg-disabled" type="text" value="Not editable" disabled class="w-full cursor-not-allowed rounded-lg border border-slate-100 bg-slate-50 px-3 py-2 text-sm text-slate-400 dark:border-slate-800 dark:bg-slate-800/50 dark:text-slate-500">
                    </div>

                    <div class="flex flex-col gap-3 border-t border-slate-100 pt-6 sm:col-span-2 dark:border-slate-800">
                        <label class="flex items-center gap-2.5 text-sm">
                            <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200 dark:border-slate-600 dark:bg-slate-800">
                            Shuffle the question order
                        </label>
                        <label class="flex items-center gap-2.5 text-sm">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200 dark:border-slate-600 dark:bg-slate-800">
                            Show the correct answer after each question
                        </label>
                        <div class="flex flex-wrap gap-5 pt-1">
                            <label class="flex items-center gap-2.5 text-sm">
                                <input type="radio" name="sg-scoring" checked class="h-4 w-4 border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200 dark:border-slate-600 dark:bg-slate-800">
                                One point per question
                            </label>
                            <label class="flex items-center gap-2.5 text-sm">
                                <input type="radio" name="sg-scoring" class="h-4 w-4 border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200 dark:border-slate-600 dark:bg-slate-800">
                                Weighted scoring
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Cards --}}
            <section id="cards" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Cards</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">The quiz tile and the question block &mdash; the two surfaces this app leans on most.</p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-5 transition hover:border-brand-200 hover:shadow-sm dark:border-slate-800 dark:bg-slate-900 dark:hover:border-brand-700">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="font-semibold tracking-tight text-slate-900 dark:text-slate-100">Solar system basics</h3>
                            <span class="inline-flex shrink-0 items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                Published
                            </span>
                        </div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Eight questions on planets, moons and orbits for beginners.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500">
                            <span>8 questions</span>
                            <span>&middot;</span>
                            <span>Updated 2 days ago</span>
                        </div>
                    </article>

                    <article class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-5 transition hover:border-brand-200 hover:shadow-sm dark:border-slate-800 dark:bg-slate-900 dark:hover:border-brand-700">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="font-semibold tracking-tight text-slate-900 dark:text-slate-100">World capitals</h3>
                            <span class="inline-flex shrink-0 items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700 dark:bg-amber-400/10 dark:text-amber-300">
                                <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                Draft
                            </span>
                        </div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Still being written &mdash; three questions have no options yet.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500">
                            <span>15 questions</span>
                            <span>&middot;</span>
                            <span>Updated 5 hours ago</span>
                        </div>
                    </article>
                </div>

                <div class="flex flex-col gap-4 rounded-xl border border-slate-100 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between gap-3">
                        <p class="text-xs font-medium tracking-wide text-slate-400 uppercase dark:text-slate-500">Question 3 of 8</p>
                        <div class="h-1.5 w-32 overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                            <div class="h-full w-[37.5%] rounded-full bg-brand-400"></div>
                        </div>
                    </div>

                    <h3 class="text-lg font-semibold tracking-tight text-slate-900 dark:text-slate-100">Which planet is closest to the sun?</h3>

                    <div class="flex flex-col gap-2">
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-slate-200 px-4 py-3 text-sm transition hover:border-brand-300 hover:bg-brand-50 dark:border-slate-700 dark:hover:border-brand-600 dark:hover:bg-brand-950/40">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-slate-100 text-xs font-semibold text-slate-500 dark:bg-slate-800 dark:text-slate-300">A</span>
                            Venus
                        </label>
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm dark:border-emerald-700 dark:bg-emerald-950/40">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-emerald-400 text-xs font-semibold text-white">B</span>
                            Mercury
                            <span class="ml-auto text-xs font-medium text-emerald-600 dark:text-emerald-400">Correct</span>
                        </label>
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm dark:border-rose-700 dark:bg-rose-950/40">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-rose-400 text-xs font-semibold text-white">C</span>
                            Mars
                            <span class="ml-auto text-xs font-medium text-rose-600 dark:text-rose-400">Your answer</span>
                        </label>
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-slate-200 px-4 py-3 text-sm transition hover:border-brand-300 hover:bg-brand-50 dark:border-slate-700 dark:hover:border-brand-600 dark:hover:bg-brand-950/40">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-slate-100 text-xs font-semibold text-slate-500 dark:bg-slate-800 dark:text-slate-300">D</span>
                            Earth
                        </label>
                    </div>
                </div>
            </section>

            {{-- Alerts --}}
            <section id="alerts" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Alerts &amp; empty states</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Tint at 50, border at 100, text at 700. Light enough to sit inline without shouting.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <div class="rounded-lg border border-brand-100 bg-brand-50 px-4 py-3 text-sm text-brand-800 dark:border-brand-500/20 dark:bg-brand-500/10 dark:text-brand-200">
                        Participants can only see a quiz once it has been published.
                    </div>
                    <div class="rounded-lg border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm text-emerald-800 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-200">
                        Quiz published successfully.
                    </div>
                    <div class="rounded-lg border border-amber-100 bg-amber-50 px-4 py-3 text-sm text-amber-800 dark:border-amber-500/20 dark:bg-amber-500/10 dark:text-amber-200">
                        Three questions have no correct option selected.
                    </div>
                    <div class="rounded-lg border border-rose-100 bg-rose-50 px-4 py-3 text-sm text-rose-800 dark:border-rose-500/20 dark:bg-rose-500/10 dark:text-rose-200">
                        This quiz could not be saved. Check the highlighted fields.
                    </div>
                </div>

                <div class="flex flex-col items-center gap-3 rounded-xl border border-dashed border-slate-200 bg-white px-6 py-12 text-center dark:border-slate-700 dark:bg-slate-900">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-50 text-brand-500 dark:bg-brand-400/10 dark:text-brand-300">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" aria-hidden="true">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-slate-700 dark:text-slate-200">No quizzes yet</p>
                        <p class="text-sm text-slate-400 dark:text-slate-500">Create your first quiz to get started.</p>
                    </div>
                    <button type="button" class="mt-2 rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700">
                        New quiz
                    </button>
                </div>
            </section>

            {{-- Tables --}}
            <section id="tables" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Tables</h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Wrapped in a light border and horizontally scrollable on small screens.</p>
                </div>

                <div class="overflow-x-auto rounded-xl border border-slate-100 bg-white dark:border-slate-800 dark:bg-slate-900">
                    <table class="w-full text-left text-sm">
                        <thead class="border-b border-slate-100 text-xs tracking-wide text-slate-400 uppercase dark:border-slate-800 dark:text-slate-500">
                            <tr>
                                <th scope="col" class="px-5 py-3 font-medium">Quiz</th>
                                <th scope="col" class="px-5 py-3 font-medium">Status</th>
                                <th scope="col" class="px-5 py-3 font-medium">Questions</th>
                                <th scope="col" class="px-5 py-3 text-right font-medium">Updated</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                            <tr class="transition hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                <td class="px-5 py-3 font-medium text-slate-700 dark:text-slate-200">Solar system basics</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                        Published
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-slate-500 dark:text-slate-400">8</td>
                                <td class="px-5 py-3 text-right text-slate-400 dark:text-slate-500">2 days ago</td>
                            </tr>
                            <tr class="transition hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                <td class="px-5 py-3 font-medium text-slate-700 dark:text-slate-200">World capitals</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700 dark:bg-amber-400/10 dark:text-amber-300">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                        Draft
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-slate-500 dark:text-slate-400">15</td>
                                <td class="px-5 py-3 text-right text-slate-400 dark:text-slate-500">5 hours ago</td>
                            </tr>
                            <tr class="transition hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                <td class="px-5 py-3 font-medium text-slate-700 dark:text-slate-200">Periodic table</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700 dark:bg-amber-400/10 dark:text-amber-300">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                        Draft
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-slate-500 dark:text-slate-400">24</td>
                                <td class="px-5 py-3 text-right text-slate-400 dark:text-slate-500">Last week</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <footer class="border-t border-slate-100 dark:border-slate-800">
            <div class="mx-auto max-w-5xl px-6 py-8 text-sm text-slate-400 dark:text-slate-500">
                {{ config('app.name', 'Quistar') }} style guide &mdash; built with Tailwind CSS v4.
            </div>
        </footer>
    </body>
</html>
