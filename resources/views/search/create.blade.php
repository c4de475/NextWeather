<x-layoutcomponent>
    <x-slot name="info">
        <div class="container">
            <div class="card" style="width: 925px; padding: 15px; margin-top: 155px;">
                <section class="px-6 py-8">
                    <main class="max-w-lg mx-auto mt-10">
                        <h1 class="text-center font-bold">Add a Location!</h1>
                        <form action="/precipitate" method="POST">
                            @csrf
                            <div style="padding-bottom: 10px;">
                                <label for="lat" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Latitude:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="integer"
                                    name="lat" 
                                    value="{{ old('lat') }}"
                                    id="lat" 
                                    required
                                >
                                @error('lat')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px;">
                                <label for="lon" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Longitude:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="integer" 
                                    name="lon"
                                    value="{{ old('lon') }}"
                                    id="lon" 
                                    required
                                >

                                @error('lon')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px;">
                                <label for="user_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    User ID:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="integer" 
                                    name="user_id" 
                                    value="{{ old('user_id') }}"
                                    id="user_id" 
                                    required
                                >

                                @error('userID')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px; text-align: center;">
                                <button type="submit" class="text-white rounded py-2 px-4" style="background-color: blue;">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </main>
                </section>
            </div>
        </div>
    </x-slot>
</x-layoutcomponent>