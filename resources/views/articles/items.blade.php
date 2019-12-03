@foreach($articles as $article)
    <article>
        <header>
            <h1>{!! $article->name !!}</h1>
        </header>
        <main>
            {!! $article->short_text !!}
        </main>
    </article>
@endforeach

