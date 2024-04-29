<x-layoutcomponent>
        <x-slot name="info">
            <main>
                <div class="container">
                    <div class="row">
                        @if (count($news) == 0)
                            <h1>Please go Research and add some News!</h1>
                        @endif
                        @foreach ($news as $story)
                            <div class="card" style="width: 18rem; margin-right: 35px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $story['title'] }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">By: {{ $story['author'] }}</h6>
                                    <p class="card-text">{{ $story['description'] }}</p>
                                    <a href="{{$story['full_website']}}" class="card-link">{{ $story['full_website'] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </x-slot>
</x-layoutcomponent>