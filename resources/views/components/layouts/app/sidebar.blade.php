<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-emerald-200 bg-gradient-to-b from-emerald-50 to-white dark:border-emerald-700 dark:from-emerald-900/20 dark:to-zinc-900 shadow-lg">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <!-- Header Section with Logo -->
            <div class="p-6 border-b border-emerald-100 dark:border-emerald-800/50 bg-white/70 dark:bg-emerald-900/10">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse" wire:navigate>
                    <div class="p-2 bg-emerald-100 dark:bg-emerald-800/30 rounded-lg">
                        <x-app-logo class="w-8 h-8 text-emerald-600 dark:text-emerald-400" />
                    </div>
                    <div class="flex flex-col">

                    </div>
                </a>
            </div>

            <!-- Navigation Section -->
            <div class="p-4 space-y-6">
                <!-- Data Personal Section -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 px-3 py-2 bg-emerald-100/50 dark:bg-emerald-800/20 rounded-lg">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                        <h3 class="text-sm font-semibold text-emerald-800 dark:text-emerald-200">{{ __('Data Personal') }}</h3>
                    </div>
                    <flux:navlist variant="outline" class="ml-4">
                        <flux:navlist.item
                            icon="user"
                            :href="route('siswa')"
                            :current="request()->routeIs('siswa')"
                            wire:navigate
                            class="hover:bg-emerald-50 dark:hover:bg-emerald-800/20 rounded-lg transition-colors duration-200"
                        >
                            {{ __('Siswa') }}
                        </flux:navlist.item>
                        <flux:navlist.item
                            icon="academic-cap"
                            :href="route('guru')"
                            :current="request()->routeIs('guru')"
                            wire:navigate
                            class="hover:bg-emerald-50 dark:hover:bg-emerald-800/20 rounded-lg transition-colors duration-200"
                        >
                            {{ __('Guru') }}
                        </flux:navlist.item>
                    </flux:navlist>
                </div>

                <!-- Data PKL Section -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-2 px-3 py-2 bg-emerald-100/50 dark:bg-emerald-800/20 rounded-lg">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                        <h3 class="text-sm font-semibold text-emerald-800 dark:text-emerald-200">{{ __('Data PKL') }}</h3>
                    </div>
                    <flux:navlist variant="outline" class="ml-4">
                        <flux:navlist.item
                            icon="building-office-2"
                            :href="route('industri')"
                            :current="request()->routeIs('industri')"
                            wire:navigate
                            class="hover:bg-emerald-50 dark:hover:bg-emerald-800/20 rounded-lg transition-colors duration-200"
                        >
                            {{ __('Industri') }}
                        </flux:navlist.item>
                        <flux:navlist.item
                            icon="briefcase"
                            :href="route('pkl')"
                            :current="request()->routeIs('pkl')"
                            wire:navigate
                            class="hover:bg-emerald-50 dark:hover:bg-emerald-800/20 rounded-lg transition-colors duration-200"
                        >
                            {{ __('Status PKL') }}
                        </flux:navlist.item>
                    </flux:navlist>
                </div>

                <!-- Quick Stats Card -->
                <div class="mx-2 p-4 bg-white dark:bg-emerald-900/10 border border-emerald-200 dark:border-emerald-700/50 rounded-xl shadow-sm">
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="p-2 bg-emerald-100 dark:bg-emerald-800/30 rounded-lg">
                            <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 00-2-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-sm font-medium text-emerald-800 dark:text-emerald-200">Quick Overview</h4>
                    </div>
                    <div class="space-y-2 text-xs">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400">Total Siswa:</span>
                            <span class="font-semibold text-emerald-700 dark:text-emerald-300">125</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400">PKL Aktif:</span>
                            <span class="font-semibold text-emerald-700 dark:text-emerald-300">89</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 dark:text-gray-400">Industri:</span>
                            <span class="font-semibold text-emerald-700 dark:text-emerald-300">24</span>
                        </div>
                    </div>
                </div>

                <!-- Progress Indicator -->
                <div class="mx-2 p-3 bg-gradient-to-r from-emerald-50 to-white dark:from-emerald-900/20 dark:to-transparent border border-emerald-200 dark:border-emerald-700/50 rounded-lg">
                    <div class="flex items-center space-x-2 mb-2">
                        <div class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></div>
                        <span class="text-xs font-medium text-emerald-700 dark:text-emerald-300">PKL Progress</span>
                    </div>
                    <div class="w-full bg-emerald-100 dark:bg-emerald-800/30 rounded-full h-2">
                        <div class="bg-gradient-to-r from-emerald-400 to-emerald-500 h-2 rounded-full" style="width: 71%"></div>
                    </div>
                    <span class="text-xs text-emerald-600 dark:text-emerald-400 mt-1 block">71% Completion Rate</span>
                </div>
            </div>

            <flux:spacer />

            <!-- Desktop User Menu -->
            <div class="p-4 border-t border-emerald-100 dark:border-emerald-800/50 bg-white/70 dark:bg-emerald-900/10">
                <flux:dropdown position="bottom" align="start">
                    <flux:profile
                        :name="auth()->user()->name"
                        :initials="auth()->user()->initials()"
                        icon-trailing="chevrons-up-down"
                        class="w-full hover:bg-emerald-50 dark:hover:bg-emerald-800/20 rounded-lg transition-colors duration-200"
                    />

                    <flux:menu class="w-[220px] border-emerald-200 dark:border-emerald-700">
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm bg-emerald-50/50 dark:bg-emerald-900/20 rounded-lg mx-2 my-2">
                                    <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                        <span
                                            class="flex h-full w-full items-center justify-center rounded-lg bg-emerald-200 text-emerald-800 dark:bg-emerald-700 dark:text-emerald-200"
                                        >
                                            {{ auth()->user()->initials() }}
                                        </span>
                                    </span>

                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold text-emerald-800 dark:text-emerald-200">{{ auth()->user()->name }}</span>
                                        <span class="truncate text-xs text-emerald-600 dark:text-emerald-400">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>

                        <flux:menu.separator class="border-emerald-200 dark:border-emerald-700" />

                        <flux:menu.radio.group>
                            <flux:menu.item
                                :href="route('settings.profile')"
                                icon="cog"
                                wire:navigate
                                class="hover:bg-emerald-50 dark:hover:bg-emerald-800/20"
                            >
                                {{ __('Settings') }}
                            </flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator class="border-emerald-200 dark:border-emerald-700" />

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item
                                as="button"
                                type="submit"
                                icon="arrow-right-start-on-rectangle"
                                class="w-full hover:bg-red-50 dark:hover:bg-red-900/20 text-red-600 dark:text-red-400"
                            >
                                {{ __('Log Out') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </div>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden bg-emerald-50 dark:bg-emerald-900/20 border-b border-emerald-200 dark:border-emerald-700">
            <flux:sidebar.toggle class="lg:hidden text-emerald-700 dark:text-emerald-300" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                    class="bg-emerald-100 dark:bg-emerald-800/30 text-emerald-800 dark:text-emerald-200"
                />

                <flux:menu class="border-emerald-200 dark:border-emerald-700">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm bg-emerald-50/50 dark:bg-emerald-900/20 rounded-lg mx-2 my-2">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-emerald-200 text-emerald-800 dark:bg-emerald-700 dark:text-emerald-200"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold text-emerald-800 dark:text-emerald-200">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs text-emerald-600 dark:text-emerald-400">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator class="border-emerald-200 dark:border-emerald-700" />

                    <flux:menu.radio.group>
                        <flux:menu.item
                            :href="route('settings.profile')"
                            icon="cog"
                            wire:navigate
                            class="hover:bg-emerald-50 dark:hover:bg-emerald-800/20"
                        >
                            {{ __('Settings') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator class="border-emerald-200 dark:border-emerald-700" />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item
                            as="button"
                            type="submit"
                            icon="arrow-right-start-on-rectangle"
                            class="w-full hover:bg-red-50 dark:hover:bg-red-900/20 text-red-600 dark:text-red-400"
                        >
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
