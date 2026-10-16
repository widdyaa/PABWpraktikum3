<div class="card">

    <h3>{{ $item['nama'] }}</h3>

    <p><b>Lokasi :</b> {{ $item['lokasi'] }}</p>

    <p><b>Tinggi Genangan :</b> {{ $item['tinggi'] }} cm</p>

    <p>
        <b>Status :</b>

        @if($item['tinggi'] < 30)

            Waspada

        @elseif($item['tinggi'] <= 70)

            Siaga

        @else

            Awas

        @endif

    </p>

</div>