<x-layoutcomponent>
    <x-slot name="info">
        <div class="container">
            <div class="card" style="width: 925px; padding: 15px; margin-top: 155px;">
                <section class="px-6 py-8">
                    <main class="max-w-lg mx-auto mt-10">
                        <h1 class="text-center font-bold">Add a News Article!</h1>
                        <form action="/release" method="POST">
                            @csrf
                            <div style="padding-bottom: 10px;">
                                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Title:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="text"
                                    name="title" 
                                    value="{{ old('title') }}"
                                    id="title" 
                                    required
                                >
                                @error('title')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px;">
                                <label for="author" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Author:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="text" 
                                    name="author"
                                    value="{{ old('author') }}"
                                    id="author" 
                                    required
                                >

                                @error('author')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px;">
                                <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Description:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="text" 
                                    name="description" 
                                    value="{{ old('description') }}"
                                    id="description" 
                                    required
                                >

                                @error('description')
                                    <p class="text-xs mt-1" style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div style="padding-bottom: 10px;">
                                <label for="full_website" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Full Website:
                                </label>
                                <input class="border border-gray-400 p-2" style="width: 100%;" 
                                    type="text" 
                                    name="full_website" 
                                    value="{{ old('full_website') }}"
                                    id="full_website" 
                                    required
                                >

                                @error('full_website')
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