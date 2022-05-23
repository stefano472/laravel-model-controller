<div class="card">

    <h2>{{ $movie->title }}</h2>
    <div class="more-info">
        <h4>Original Title: {{ $movie->original_title }}</h5>
        <p>Nationality: {{ ucfirst($movie->nationality) }}</p>
        <p>Vote: {{ $movie->vote }}</p>
    </div>
    <span>Date: {{ $movie->getDataUser() }}</span>

</div>