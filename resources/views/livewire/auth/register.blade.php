<div class="max-w-md mx-auto p-6 bg-gray-700 rounded-lg shadow-md">
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-white">Daftar Akun PKL</h1>
        <p class="text-gray-300 mt-2">STEMBAYO</p>
    </div>

    <!-- Form -->
    <form wire:submit="register" class="space-y-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Nama Lengkap</label>
            <input
                wire:model="name"
                id="name"
                type="text"
                required
                autofocus
                autocomplete="name"
                placeholder="Masukkan nama lengkap"
                class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white transition"
            />
            @error('name') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
            <input
                wire:model="email"
                id="email"
                type="email"
                required
                autocomplete="email"
                placeholder="contoh@email.com"
                class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white transition"
            />
            @error('email') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
            <div class="relative">
                <input
                    wire:model="password"
                    id="password"
                    type="password"
                    required
                    autocomplete="new-password"
                    placeholder="Minimal 8 karakter"
                    class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white transition pr-10"
                />
                <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
            @error('password') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-1">Konfirmasi Password</label>
            <div class="relative">
                <input
                    wire:model="password_confirmation"
                    id="password_confirmation"
                    type="password"
                    required
                    autocomplete="new-password"
                    placeholder="Ketik ulang password"
                    class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white transition pr-10"
                />
                <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full py-3 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
            Daftar Sekarang
        </button>
    </form>

    <!-- Login Link -->
    <div class="mt-6 text-center text-sm text-gray-400">
        Sudah memiliki akun?
        <a href="{{ route('login') }}" wire:navigate class="font-medium text-green-500 hover:underline">Masuk disini</a>
    </div>
</div>
