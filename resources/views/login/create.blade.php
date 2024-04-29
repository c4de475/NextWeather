<x-layoutcomponent>
    <x-slot name="info">
        <div class="container">
            <div class="card" style="width: 925px; padding: 15px; margin-top: 175px;">
                <section class="px-6 py-8">
                    <main class="max-w-lg mx-auto mt-10">
                        <h1 class="text-center font-bold">Log In!</h1>
                        <form action="/login" method="POST">
                            @csrf
                            <div style="padding-bottom: 10px;">
                                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Email:
                                </label>
                                <input class="border border-gray-400 p-2 " style="width: 100%;"
                                    type="email" 
                                    name="email"
                                    value="{{ old('email') }}" 
                                    id="email" 
                                    required
                                >

                                @error('email')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px;">
                                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Password:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="password" 
                                    name="password" 
                                    id="password" 
                                    required
                                >

                                @error('password')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px; text-align: center;">
                                <button type="submit" class="text-white rounded py-2 px-4" style="background-color: blue;">
                                    Log In
                                </button>
                            </div>

                        </form>
                    </main>
                </section>
            </div>
        </div>
    </x-slot>
</x-layoutcomponent>