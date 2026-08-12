<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="light">

        <title>{{ config('app.name', 'Quistar') }} &mdash; {{ __('Quizzes worth taking') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-white font-sans text-slate-700 antialiased">
        <header class="sticky top-0 z-10 border-b border-slate-100 bg-white/80 backdrop-blur">
            <div class="mx-auto flex max-w-5xl items-center justify-between gap-4 px-6 py-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-500 text-sm font-bold text-white">Q</span>
                    <span class="text-sm font-semibold text-slate-900">{{ config('app.name', 'Quistar') }}</span>
                </a>

                <nav class="flex items-center gap-x-5 text-sm text-slate-500">
                    <a href="#features" class="hidden hover:text-brand-600 sm:inline">Features</a>
                    <a href="#how-it-works" class="hidden hover:text-brand-600 sm:inline">How it works</a>
                    <a href="{{ route('style-guide') }}" class="hidden hover:text-brand-600 sm:inline">Style guide</a>
                    <a href="#" class="rounded-lg bg-brand-50 px-4 py-2 font-medium text-brand-700 transition hover:bg-brand-100">
                        Sign in
                    </a>
                </nav>
            </div>
        </header>

        {{-- Hero --}}
        <section class="border-b border-slate-100 bg-gradient-to-b from-brand-50 to-white">
            <div class="mx-auto grid max-w-5xl items-center gap-12 px-6 py-16 sm:py-24 lg:grid-cols-2 lg:gap-16">
                <div class="flex flex-col items-start gap-6">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-white px-3 py-1 text-xs font-medium text-brand-700 ring-1 ring-brand-100 ring-inset">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Quizzes, built in minutes
                    </span>

                    <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                        Turn what you know into a quiz worth taking
                    </h1>

                    <p class="max-w-md text-lg text-slate-500">
                        Quistar shapes your notes, articles and slides into timed, scored questions
                        &mdash; ready to share the moment you publish.
                    </p>

                    <div class="flex flex-col gap-3 sm:flex-row">
                        <a href="#" class="rounded-lg bg-brand-600 px-5 py-2.5 text-base font-medium text-white shadow-sm transition hover:bg-brand-700 focus:ring-2 focus:ring-brand-400 focus:ring-offset-2 focus:outline-none">
                            Create a quiz
                        </a>
                        <a href="#how-it-works" class="rounded-lg border border-slate-200 bg-white px-5 py-2.5 text-base font-medium text-slate-600 transition hover:bg-slate-50">
                            See how it works
                        </a>
                    </div>

                    <p class="text-xs text-slate-400">No credit card needed &middot; Your first quiz is free</p>
                </div>

                {{-- Live quiz preview --}}
                <div class="flex flex-col gap-4 rounded-2xl border border-slate-100 bg-white p-6 shadow-sm">
                    <div class="flex items-center justify-between gap-3">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                            Published
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-500">
                            <svg class="h-3.5 w-3.5 text-brand-500" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="10" cy="10" r="7" />
                                <path d="M10 6.5V10l2.5 1.5" />
                            </svg>
                            0:24 left
                        </span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-between text-xs text-slate-400">
                            <span>Question 3 of 12</span>
                            <span>10 points</span>
                        </div>
                        <div class="h-1.5 w-full overflow-hidden rounded-full bg-slate-100">
                            <div class="h-full w-1/4 rounded-full bg-brand-500"></div>
                        </div>
                    </div>

                    <p class="text-lg font-semibold tracking-tight text-slate-900">
                        Which layer of the atmosphere contains the ozone layer?
                    </p>

                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-3 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-emerald-100 text-xs font-semibold text-emerald-700">A</span>
                            <span class="text-sm text-emerald-900">The stratosphere</span>
                            <svg class="ms-auto h-4 w-4 shrink-0 text-emerald-600" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4.5 10.5 8 14l7.5-8" />
                            </svg>
                        </div>

                        <div class="flex items-center gap-3 rounded-lg border border-rose-200 bg-rose-50 px-4 py-3">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-rose-100 text-xs font-semibold text-rose-700">B</span>
                            <span class="text-sm text-rose-900">The troposphere</span>
                            <span class="ms-auto shrink-0 text-xs font-medium text-rose-700">Your answer</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-lg border border-slate-200 bg-white px-4 py-3 transition hover:border-brand-300 hover:bg-brand-50">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-slate-100 text-xs font-semibold text-slate-600">C</span>
                            <span class="text-sm text-slate-700">The mesosphere</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-lg border border-slate-200 bg-white px-4 py-3 transition hover:border-brand-300 hover:bg-brand-50">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-slate-100 text-xs font-semibold text-slate-600">D</span>
                            <span class="text-sm text-slate-700">The thermosphere</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main class="mx-auto flex max-w-5xl flex-col gap-24 px-6 py-20">
            {{-- Features --}}
            <section id="features" class="flex scroll-mt-24 flex-col gap-8">
                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-brand-600 uppercase">Features</p>
                    <h2 class="max-w-xl text-3xl font-bold tracking-tight text-slate-900">Everything a good quiz needs</h2>
                    <p class="max-w-2xl text-slate-500">
                        No fiddling with spreadsheets or slide decks. Write it once and Quistar handles the rest.
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-3">
                    <div class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-6 transition hover:border-brand-200 hover:shadow-sm">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-50 text-brand-600">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 2.5h7l4.5 4.5v10.5a.5.5 0 0 1-.5.5H4a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5Z" />
                                <path d="M11 2.5V7h4.5M6.5 11.5h7M6.5 14h4.5" />
                            </svg>
                        </span>
                        <h3 class="font-semibold tracking-tight text-slate-900">Built from your sources</h3>
                        <p class="text-sm text-slate-500">
                            Drop in notes, a link or a document. Quistar drafts the questions and you keep the final word.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-6 transition hover:border-brand-200 hover:shadow-sm">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-50 text-brand-600">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="10" cy="11.5" r="6.5" />
                                <path d="M10 8.5v3l2 1.5M7.5 2.5h5" />
                            </svg>
                        </span>
                        <h3 class="font-semibold tracking-tight text-slate-900">Timed and scored</h3>
                        <p class="text-sm text-slate-500">
                            Set the clock and the points per question. Answers are marked the second they land.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 rounded-xl border border-slate-100 bg-white p-6 transition hover:border-brand-200 hover:shadow-sm">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-50 text-brand-600">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16.5 10a6.5 6.5 0 0 1-11.3 4.4M3.5 10a6.5 6.5 0 0 1 11.3-4.4" />
                                <path d="M15 2.5V6h-3.5M5 17.5V14h3.5" />
                            </svg>
                        </span>
                        <h3 class="font-semibold tracking-tight text-slate-900">Draft until you're ready</h3>
                        <p class="text-sm text-slate-500">
                            Work in private, publish in a click. Nothing goes live before you say so.
                        </p>
                    </div>
                </div>
            </section>

            {{-- How it works --}}
            <section id="how-it-works" class="flex scroll-mt-24 flex-col gap-8">
                <div class="flex flex-col gap-2">
                    <p class="text-xs font-medium tracking-wide text-brand-600 uppercase">How it works</p>
                    <h2 class="max-w-xl text-3xl font-bold tracking-tight text-slate-900">Three steps, start to finish</h2>
                    <p class="max-w-2xl text-slate-500">
                        From a blank page to a shared quiz in about the length of a coffee break.
                    </p>
                </div>

                <ol class="flex flex-col gap-8 sm:flex-row sm:gap-6">
                    <li class="flex flex-1 flex-col gap-2 border-t-2 border-brand-200 pt-5">
                        <span class="text-xs font-semibold tracking-wide text-brand-600 uppercase">Step 1</span>
                        <h3 class="font-semibold tracking-tight text-slate-900">Add your material</h3>
                        <p class="text-sm text-slate-500">Paste your text, or point Quistar at the source you want to quiz on.</p>
                    </li>

                    <li class="flex flex-1 flex-col gap-2 border-t-2 border-brand-200 pt-5">
                        <span class="text-xs font-semibold tracking-wide text-brand-600 uppercase">Step 2</span>
                        <h3 class="font-semibold tracking-tight text-slate-900">Shape the questions</h3>
                        <p class="text-sm text-slate-500">Reword an option, mark the right answer, tune the points and the timer.</p>
                    </li>

                    <li class="flex flex-1 flex-col gap-2 border-t-2 border-slate-200 pt-5">
                        <span class="text-xs font-semibold tracking-wide text-slate-400 uppercase">Step 3</span>
                        <h3 class="font-semibold tracking-tight text-slate-900">Publish and share</h3>
                        <p class="text-sm text-slate-500">Send a link and watch the scores come in as people play.</p>
                    </li>
                </ol>
            </section>
        </main>

        {{-- Closing call to action --}}
        <section class="bg-brand-600">
            <div class="mx-auto flex max-w-5xl flex-col items-center gap-5 px-6 py-16 text-center">
                <h2 class="max-w-lg text-3xl font-bold tracking-tight text-white">Ready to write your first quiz?</h2>
                <p class="max-w-md text-brand-50">
                    Start with a draft. Publish it when it feels right &mdash; or never. It stays yours either way.
                </p>
                <a href="#" class="rounded-lg bg-white px-5 py-2.5 text-base font-medium text-brand-700 shadow-sm transition hover:bg-brand-50 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-brand-600 focus:outline-none">
                    Create a quiz
                </a>
            </div>
        </section>

        <footer class="border-t border-slate-100 bg-white">
            <div class="mx-auto flex max-w-5xl flex-col items-center justify-between gap-3 px-6 py-8 text-sm text-slate-400 sm:flex-row">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Quistar') }}</p>

                <nav class="flex gap-x-5">
                    <a href="#features" class="hover:text-brand-600">Features</a>
                    <a href="#how-it-works" class="hover:text-brand-600">How it works</a>
                    <a href="{{ route('style-guide') }}" class="hover:text-brand-600">Style guide</a>
                </nav>
            </div>
        </footer>
    </body>
</html>
