<x-layoutcomponent>
    <x-slot name="info">
        <main>
            <div class="container">
                <div class="row">
                    @if (count($userWeather) == 0)
                        <h1>Please go to Search and add some Favorites</h1>
                    @endif
                    @foreach ($userWeather as $data)
                        <div class="card" style="width: 18rem; margin-right: 35px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data['city']['name'] }}, {{ $data['city']['country'] }}</h5>
                                <p class="card-text">Current Weather:
                                    {{ $data['list'][0]['weather'][0]['main']}}
                                </p>
                                <p class="card-text">Current Temperature: {{ $data['list'][0]['main']['temp']}}°F</p>
                                <p class="card-text">Min Temperature: {{ $data['list'][0]['main']['temp_min'] }}°F <i class="fa-solid fa-temperature-arrow-down"></i></i></p>
                                <p class="card-text">Max Temperature: {{ $data['list'][0]['main']['temp_max'] }}°F <i class="fa-solid fa-temperature-arrow-up"></i></p>
                                <a href="/detail/{{ $data['id'] }}" class="btn btn-primary">Full Details</a>
                                <a href="/delete/{{ $data['id'] }}" class="btn btn-danger">Unfavorite</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </x-slot>
</x-layoutcomponent>