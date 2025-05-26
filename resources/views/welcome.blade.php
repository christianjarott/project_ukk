<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PKL STEMBAYO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                50: '#f0fdf4',
                                100: '#dcfce7',
                                200: '#bbf7d0',
                                300: '#86efac',
                                400: '#4ade80',
                                500: '#22c55e',
                                600: '#16a34a',
                                700: '#15803d',
                                800: '#166534',
                                900: '#14532d',
                            }
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">

        </header>

        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row gap-6">
                <!-- Text Content -->
                <div class="flex-1 p-6 pb-12 lg:p-10 bg-white dark:bg-gray-800 shadow-md rounded-lg border border-gray-200 dark:border-gray-700">
                    <h1 class="mb-4 text-3xl font-bold text-primary-600 dark:text-primary-400">PKL STEMBAYO</h1>
                    <p class="mb-6 text-gray-600 dark:text-gray-300">Selamat datang di sistem monitoring Praktik Kerja Lapangan (PKL) STEMBAYO. Platform ini membantu siswa, pembimbing, dan industri dalam memantau perkembangan PKL.</p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="flex items-center justify-center mt-1 rounded-full bg-primary-100 dark:bg-primary-900 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 dark:text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Pantau Perkembangan PKL</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Lacak perkembangan siswa selama masa PKL secara real-time.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex items-center justify-center mt-1 rounded-full bg-primary-100 dark:bg-primary-900 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 dark:text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Laporan Harian/Mingguan</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Siswa dapat mengunggah laporan kegiatan harian/mingguan.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex items-center justify-center mt-1 rounded-full bg-primary-100 dark:bg-primary-900 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 dark:text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Komunikasi Efektif</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Fasilitas komunikasi antara siswa, pembimbing, dan industri.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            </svg>
                        </a>
                            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border border-primary-600 hover:border-primary-700 bg-primary-500 hover:bg-primary-600 text-white rounded-md text-sm leading-normal transition-colors"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-primary-600 dark:text-primary-400 border border-transparent hover:border-primary-300 dark:hover:border-primary-700 rounded-md text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 border border-primary-600 hover:border-primary-700 bg-primary-500 hover:bg-primary-600 text-white rounded-md text-sm leading-normal transition-colors">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
                        </a>
                    </div>
                </div>

                <!-- Image/Illustration -->
                <div class="relative bg-primary-50 dark:bg-gray-800 rounded-lg overflow-hidden w-full lg:w-1/2 aspect-square lg:aspect-auto">
                    <div class="absolute inset-0 flex items-center justify-center p-8">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 mx-auto text-primary-500 dark:text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <h2 class="mt-4 text-2xl font-bold text-gray-800 dark:text-white">Sistem Monitoring PKL</h2>
                            <p class="mt-2 text-primary-600 dark:text-primary-400">STEMBAYO</p>
                        </div>
                    </div>
                    <div class="absolute inset-0 rounded-lg shadow-[inset_0px_0px_0px_1px_rgba(0,0,0,0.05)] dark:shadow-[inset_0px_0px_0px_1px_rgba(255,255,255,0.1)]"></div>
                </div>
            </main>
        </div>

        <footer class="mt-12 text-center text-sm text-gray-500 dark:text-gray-400">
            <p>© {{ date('Y') }} PKL STEMBAYO. All rights reserved.</p>
        </footer>
    </body>
</html>
