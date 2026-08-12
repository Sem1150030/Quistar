<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="light">

        <title>{{ __('Style Guide') }} - {{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-slate-50 font-sans text-slate-700 antialiased">
        <header class="sticky top-0 z-10 border-b border-slate-100 bg-white/80 backdrop-blur">
            <div class="mx-auto flex max-w-5xl flex-col gap-4 px-6 py-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-center gap-3">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-500 text-sm font-bold text-white">Q</span>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">{{ config('app.name', 'Quistar') }}</p>
                        <p class="text-xs text-slate-400">Style guide</p>
                    </div>
                </div>

                <nav class="flex flex-wrap gap-x-4 gap-y-1 text-sm text-slate-500">
                    <a href="#colors" class="hover:text-brand-600">Colors</a>
                    <a href="#typography" class="hover:text-brand-600">Type</a>
                    <a href="#buttons" class="hover:text-brand-600">Buttons</a>
                    <a href="#badges" class="hover:text-brand-600">Badges</a>
                    <a href="#forms" class="hover:text-brand-600">Forms</a>
                    <a href="#cards" class="hover:text-brand-600">Cards</a>
                    <a href="#alerts" class="hover:text-brand-600">Alerts</a>
                    <a href="#tables" class="hover:text-brand-600">Tables</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto flex max-w-5xl flex-col gap-16 px-6 py-12">
            {{-- Intro --}}
            <section class="flex flex-col gap-3">
                <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Design system</h1>
                <p class="max-w-2xl text-slate-500">
                    The visual building blocks for {{ config('app.name', 'Quistar') }}. Reuse the utility classes shown here rather than
                    inventing new ones. Quistar is light-only &mdash; there are no <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-xs text-slate-600">dark:</code> variants anywhere in the app.
                </p>
            </section>

            {{-- Colors --}}
            <section id="colors" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Colors</h2>
                    <p class="text-sm text-slate-500">Brand sky drives actions and focus. Slate carries text, borders and surfaces. Tints stay at the 50&ndash;100 end.</p>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-slate-400 uppercase">Brand</p>
                    <div class="grid grid-cols-6 gap-2 sm:grid-cols-11">
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-50 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">50</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-100 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">100</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-200 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">200</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-300 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">300</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-400 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">400</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-500 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] font-semibold text-slate-600">500</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-600 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] font-semibold text-slate-600">600</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-700 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">700</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-800 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">800</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-900 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">900</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-950 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">950</span></div>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-slate-400 uppercase">Neutral</p>
                    <div class="grid grid-cols-6 gap-2 sm:grid-cols-11">
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-50 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">50</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-100 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">100</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-200 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">200</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-300 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">300</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-400 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">400</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-500 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">500</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-600 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">600</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-700 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">700</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-800 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">800</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-900 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">900</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-slate-950 ring-1 ring-slate-900/5 ring-inset"></div><span class="text-[11px] text-slate-400">950</span></div>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-slate-400 uppercase">Semantic</p>
                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-emerald-400"></div><span class="text-[11px] text-slate-400">emerald-400 &middot; correct</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-amber-300"></div><span class="text-[11px] text-slate-400">amber-300 &middot; draft</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-rose-400"></div><span class="text-[11px] text-slate-400">rose-400 &middot; incorrect</span></div>
                        <div class="flex flex-col gap-1"><div class="h-12 rounded-md bg-brand-400"></div><span class="text-[11px] text-slate-400">brand-400 &middot; info</span></div>
                    </div>
                </div>
            </section>

            {{-- Typography --}}
            <section id="typography" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Typography</h2>
                    <p class="text-sm text-slate-500">Instrument Sans throughout. Headings always pair with <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-xs text-slate-600">tracking-tight</code>.</p>
                </div>

                <div class="flex flex-col gap-5 rounded-xl border border-slate-100 bg-white p-6">
                    <div class="flex flex-col gap-1">
                        <p class="text-3xl font-bold tracking-tight text-slate-900">Which planet is closest to the sun?</p>
                        <code class="font-mono text-xs text-slate-400">text-3xl font-bold tracking-tight text-slate-900</code>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-xl font-semibold tracking-tight text-slate-900">Section heading</p>
                        <code class="font-mono text-xs text-slate-400">text-xl font-semibold tracking-tight text-slate-900</code>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-base text-slate-700">Body copy sits at the base size in slate-700, so longer question text stays comfortable to read without feeling heavy.</p>
                        <code class="font-mono text-xs text-slate-400">text-base text-slate-700
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm text-slate-500">Muted helper text for hints, timestamps and counts.</p>
                        <code class="font-mono text-xs text-slate-400">text-sm text-slate-500
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-base">An inline <a href="#typography" class="font-medium text-brand-600 underline underline-offset-4 hover:text-brand-700">text link</a> inside a sentence.</p>
                        <code class="font-mono text-xs text-slate-400">text-brand-600 underline underline-offset-4</code>
                    </div>
                </div>
            </section>

            {{-- Buttons --}}
            <section id="buttons" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Buttons</h2>
                    <p class="text-sm text-slate-500">One primary action per view. Solid fills stay at 600 so white labels keep enough contrast; everything else is light.</p>
                </div>

                <div class="flex flex-col gap-6 rounded-xl border border-slate-100 bg-white p-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <button type="button" class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700 focus:ring-2 focus:ring-brand-400 focus:ring-offset-2 focus:outline-none">
                            Publish quiz
                        </button>
                        <button type="button" class="rounded-lg bg-brand-50 px-4 py-2 text-sm font-medium text-brand-700 transition hover:bg-brand-100 focus:ring-2 focus:ring-brand-400 focus:outline-none">
                            Soft primary
                        </button>
                        <button type="button" class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50 focus:ring-2 focus:ring-brand-400 focus:outline-none">
                            Save draft
                        </button>
                        <button type="button" class="rounded-lg px-4 py-2 text-sm font-medium text-slate-500 transition hover:bg-slate-100 focus:ring-2 focus:ring-brand-400 focus:outline-none">
                            Cancel
                        </button>
                        <button type="button" class="rounded-lg bg-rose-50 px-4 py-2 text-sm font-medium text-rose-700 transition hover:bg-rose-100 focus:ring-2 focus:ring-rose-300 focus:outline-none">
                            Delete
                        </button>
                        <button type="button" disabled class="cursor-not-allowed rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-400">
                            Disabled
                        </button>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 border-t border-slate-100 pt-6">
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

                    <div class="flex flex-col gap-3 border-t border-slate-100 pt-6">
                        <p class="text-xs font-medium tracking-wide text-slate-400 uppercase">On a brand band</p>
                        <div class="flex flex-col items-center gap-4 rounded-lg bg-brand-600 px-6 py-8 text-center">
                            <p class="text-lg font-semibold tracking-tight text-white">Ready to write your first quiz?</p>
                            <button type="button" class="rounded-lg bg-white px-5 py-2.5 text-base font-medium text-brand-700 shadow-sm transition hover:bg-brand-50 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-brand-600 focus:outline-none">
                                Create a quiz
                            </button>
                        </div>
                        <p class="text-xs text-slate-400">Full-bleed sections invert: the band carries <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-[11px] text-slate-600">bg-brand-600</code> and the button becomes white with <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-[11px] text-slate-600">text-brand-700</code>.</p>
                    </div>
                </div>
            </section>

            {{-- Badges --}}
            <section id="badges" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Badges</h2>
                    <p class="text-sm text-slate-500">Status pills mirror the <code class="rounded bg-slate-100 px-1 py-0.5 font-mono text-xs text-slate-600">QuizStatus</code> cases. Tint at 50, text at 700.</p>
                </div>

                <div class="flex flex-wrap items-center gap-3 rounded-xl border border-slate-100 bg-white p-6">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                        Draft
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                        Published
                    </span>
                    <span class="inline-flex items-center rounded-full bg-brand-50 px-2.5 py-1 text-xs font-medium text-brand-700">12 questions</span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-600">Neutral</span>
                    <span class="inline-flex items-center rounded-full bg-rose-50 px-2.5 py-1 text-xs font-medium text-rose-700">Archived</span>
                    <span class="inline-flex items-center rounded-full border border-slate-200 px-2.5 py-1 text-xs font-medium text-slate-500">Outline</span>
                </div>
            </section>

            {{-- Forms --}}
            <section id="forms" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Form elements</h2>
                    <p class="text-sm text-slate-500">Label above, help or error text below. Focus always shows a soft brand ring.</p>
                </div>

                <div class="grid gap-6 rounded-xl border border-slate-100 bg-white p-6 sm:grid-cols-2">
                    <div class="flex flex-col gap-1.5">
                        <label for="sg-title" class="text-sm font-medium text-slate-700">Quiz title</label>
                        <input id="sg-title" type="text" placeholder="Solar system basics" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 placeholder:text-slate-300 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none">
                        <p class="text-xs text-slate-400">Shown at the top of the quiz.</p>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="sg-status" class="text-sm font-medium text-slate-700">Status</label>
                        <select id="sg-status" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none">
                            <option>Draft</option>
                            <option>Published</option>
                        </select>
                        <p class="text-xs text-slate-400">Drafts stay hidden from participants.</p>
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-2">
                        <label for="sg-description" class="text-sm font-medium text-slate-700">Description</label>
                        <textarea id="sg-description" rows="3" placeholder="A short summary of what this quiz covers&hellip;" class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 placeholder:text-slate-300 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none"></textarea>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="sg-error" class="text-sm font-medium text-slate-700">Field with an error</label>
                        <input id="sg-error" type="text" class="w-full rounded-lg border border-rose-300 bg-white px-3 py-2 text-sm text-slate-700 focus:border-rose-400 focus:ring-2 focus:ring-rose-100 focus:outline-none">
                        <p class="text-xs text-rose-500">The title field is required.</p>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="sg-disabled" class="text-sm font-medium text-slate-400">Disabled</label>
                        <input id="sg-disabled" type="text" value="Not editable" disabled class="w-full cursor-not-allowed rounded-lg border border-slate-100 bg-slate-50 px-3 py-2 text-sm text-slate-400">
                    </div>

                    <div class="flex flex-col gap-3 border-t border-slate-100 pt-6 sm:col-span-2">
                        <label class="flex items-center gap-2.5 text-sm">
                            <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200">
                            Shuffle the question order
                        </label>
                        <label class="flex items-center gap-2.5 text-sm">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200">
                            Show the correct answer after each question
                        </label>
                        <div class="flex flex-wrap gap-5 pt-1">
                            <label class="flex items-center gap-2.5 text-sm">
                                <input type="radio" name="sg-scoring" checked class="h-4 w-4 border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200">
                                One point per question
                            </label>
                            <label class="flex items-center gap-2.5 text-sm">
                                <input type="radio" name="sg-scoring" class="h-4 w-4 border-slate-300 text-brand-500 focus:ring-2 focus:ring-brand-200">
                                Weighted scoring
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Cards --}}
            <section id="cards" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Cards</h2>
                    <p class="text-sm text-slate-500">The quiz tile and the question block &mdash; the two surfaces this app leans on most.</p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-5 transition hover:border-brand-200 hover:shadow-sm">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="font-semibold tracking-tight text-slate-900">Solar system basics</h3>
                            <span class="inline-flex shrink-0 items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                Published
                            </span>
                        </div>
                        <p class="text-sm text-slate-500">Eight questions on planets, moons and orbits for beginners.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-400">
                            <span>8 questions</span>
                            <span>&middot;</span>
                            <span>Updated 2 days ago</span>
                        </div>
                    </article>

                    <article class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-5 transition hover:border-brand-200 hover:shadow-sm">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="font-semibold tracking-tight text-slate-900">World capitals</h3>
                            <span class="inline-flex shrink-0 items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                Draft
                            </span>
                        </div>
                        <p class="text-sm text-slate-500">Still being written &mdash; three questions have no options yet.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-400">
                            <span>15 questions</span>
                            <span>&middot;</span>
                            <span>Updated 5 hours ago</span>
                        </div>
                    </article>
                </div>

                <div class="flex flex-col gap-4 rounded-xl border border-slate-100 bg-white p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="text-xs font-medium tracking-wide text-slate-400 uppercase">Question 3 of 8</p>
                        <div class="h-1.5 w-32 overflow-hidden rounded-full bg-slate-100">
                            <div class="h-full w-[37.5%] rounded-full bg-brand-400"></div>
                        </div>
                    </div>

                    <h3 class="text-lg font-semibold tracking-tight text-slate-900">Which planet is closest to the sun?</h3>

                    <div class="flex flex-col gap-2">
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-slate-200 px-4 py-3 text-sm transition hover:border-brand-300 hover:bg-brand-50">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-slate-100 text-xs font-semibold text-slate-500">A</span>
                            Venus
                        </label>
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-emerald-400 text-xs font-semibold text-white">B</span>
                            Mercury
                            <span class="ml-auto text-xs font-medium text-emerald-600">Correct</span>
                        </label>
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3 text-sm">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-rose-400 text-xs font-semibold text-white">C</span>
                            Mars
                            <span class="ml-auto text-xs font-medium text-rose-600">Your answer</span>
                        </label>
                        <label class="flex cursor-pointer items-center gap-3 rounded-lg border border-slate-200 px-4 py-3 text-sm transition hover:border-brand-300 hover:bg-brand-50">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-slate-100 text-xs font-semibold text-slate-500">D</span>
                            Earth
                        </label>
                    </div>
                </div>
            </section>

            {{-- Alerts --}}
            <section id="alerts" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Alerts &amp; empty states</h2>
                    <p class="text-sm text-slate-500">Tint at 50, border at 100, text at 700. Light enough to sit inline without shouting.</p>
                </div>

                <div class="flex flex-col gap-3">
                    <div class="rounded-lg border border-brand-100 bg-brand-50 px-4 py-3 text-sm text-brand-800">
                        Participants can only see a quiz once it has been published.
                    </div>
                    <div class="rounded-lg border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                        Quiz published successfully.
                    </div>
                    <div class="rounded-lg border border-amber-100 bg-amber-50 px-4 py-3 text-sm text-amber-800">
                        Three questions have no correct option selected.
                    </div>
                    <div class="rounded-lg border border-rose-100 bg-rose-50 px-4 py-3 text-sm text-rose-800">
                        This quiz could not be saved. Check the highlighted fields.
                    </div>
                </div>

                <div class="flex flex-col items-center gap-3 rounded-xl border border-dashed border-slate-200 bg-white px-6 py-12 text-center">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-50 text-brand-500">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" aria-hidden="true">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </span>
                    <div class="flex flex-col gap-1">
                        <p class="font-medium text-slate-700">No quizzes yet</p>
                        <p class="text-sm text-slate-400">Create your first quiz to get started.</p>
                    </div>
                    <button type="button" class="mt-2 rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-brand-700">
                        New quiz
                    </button>
                </div>
            </section>

            {{-- Tables --}}
            <section id="tables" class="flex scroll-mt-24 flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-semibold tracking-tight text-slate-900">Tables</h2>
                    <p class="text-sm text-slate-500">Wrapped in a light border and horizontally scrollable on small screens.</p>
                </div>

                <div class="overflow-x-auto rounded-xl border border-slate-100 bg-white">
                    <table class="w-full text-left text-sm">
                        <thead class="border-b border-slate-100 text-xs tracking-wide text-slate-400 uppercase">
                            <tr>
                                <th scope="col" class="px-5 py-3 font-medium">Quiz</th>
                                <th scope="col" class="px-5 py-3 font-medium">Status</th>
                                <th scope="col" class="px-5 py-3 font-medium">Questions</th>
                                <th scope="col" class="px-5 py-3 text-right font-medium">Updated</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="transition hover:bg-slate-50">
                                <td class="px-5 py-3 font-medium text-slate-700">Solar system basics</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                                        Published
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-slate-500">8</td>
                                <td class="px-5 py-3 text-right text-slate-400">2 days ago</td>
                            </tr>
                            <tr class="transition hover:bg-slate-50">
                                <td class="px-5 py-3 font-medium text-slate-700">World capitals</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                        Draft
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-slate-500">15</td>
                                <td class="px-5 py-3 text-right text-slate-400">5 hours ago</td>
                            </tr>
                            <tr class="transition hover:bg-slate-50">
                                <td class="px-5 py-3 font-medium text-slate-700">Periodic table</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-medium text-amber-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400"></span>
                                        Draft
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-slate-500">24</td>
                                <td class="px-5 py-3 text-right text-slate-400">Last week</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <footer class="border-t border-slate-100">
            <div class="mx-auto max-w-5xl px-6 py-8 text-sm text-slate-400">
                {{ config('app.name', 'Quistar') }} style guide &mdash; built with Tailwind CSS v4.
            </div>
        </footer>
    </body>
</html>
