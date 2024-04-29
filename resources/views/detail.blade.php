<x-layoutcomponent>
    <x-slot name="info">
        <div class="container">
            <div class="row">
                <div class="card" style="margin-top: 20px; width: 935px; height: 635px">
                    <div class="card-body detailView">
                        <h5 class="card-title">{{ $weather['city']['name']}}, {{ $weather['city']['country']}}</h5>
                        <p class="card-text">Current Weather: {{ $weather['list'][0]['weather'][0]['main']}}</p>
                        <p class="card-text">Current Temperature: {{ $weather['list'][0]['main']['temp']}}°F</p>
                        <p class="card-text">Min Temperature: {{ $weather['list'][0]['main']['temp_min'] }}°F <i class="fa-solid fa-temperature-arrow-down"></i></i></p>
                        <p class="card-text">Max Temperature: {{ $weather['list'][0]['main']['temp_max'] }}°F <i class="fa-solid fa-temperature-arrow-up"></i></p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="card-text">
                               <strong> {{ $weather['list'][1]['dt_txt']}} </strong> <br><br> {{ $weather['list'][1]['weather'][0]['main']}} - Current Temperature: {{ $weather['list'][1]['main']['temp']}}°F <br> Min: {{ $weather['list'][1]['main']['temp_min'] }}°F - Max: {{ $weather['list'][1]['main']['temp_max'] }}°F
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">
                                <strong> {{ $weather['list'][9]['dt_txt']}} </strong> <br><br> {{ $weather['list'][9]['weather'][0]['main']}} - Current Temperature: {{ $weather['list'][9]['main']['temp']}}°F <br> Min: {{ $weather['list'][9]['main']['temp_min'] }}°F - Max: {{ $weather['list'][9]['main']['temp_max'] }}°F
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">
                                <strong> {{ $weather['list'][17]['dt_txt']}} </strong> <br><br> {{ $weather['list'][17]['weather'][0]['main']}} - Current Temperature: {{ $weather['list'][17]['main']['temp']}}°F <br> Min: {{ $weather['list'][17]['main']['temp_min'] }}°F - Max: {{ $weather['list'][17]['main']['temp_max'] }}°F
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">
                                <strong> {{ $weather['list'][25]['dt_txt']}} </strong> <br><br> {{ $weather['list'][25]['dt_txt']}} <br> {{ $weather['list'][25]['weather'][0]['main']}} - Current Temperature: {{ $weather['list'][25]['main']['temp']}}°F <br> Min: {{ $weather['list'][25]['main']['temp_min'] }}°F - Max: {{ $weather['list'][25]['main']['temp_max'] }}°F
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">
                                <strong> {{ $weather['list'][33]['dt_txt']}} </strong> <br><br> {{ $weather['list'][33]['weather'][0]['main']}} - Current Temperature: {{ $weather['list'][33]['main']['temp']}}°F <br> Min: {{ $weather['list'][33]['main']['temp_min'] }}°F - Max: {{ $weather['list'][33]['main']['temp_max'] }}°F
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
</x-layoutcomponent>