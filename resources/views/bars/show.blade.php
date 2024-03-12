<x-article>
    <section class="section">
        <div class="has-text-right">
            <a href="{{ route('bars.edit', $bar->id) }}">
                <strong>edit</strong>
            </a>
            <form method="POST" action="{{ route('bars.destroy', $bar) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column is-12">

                    <div class="content">

                        <h1>id: {{$bar->id}}</h1>
                        <h1>name: {{$bar->name}}</h1>
                        <h1>waldo: {{$bar->waldo}}</h1>
                        <h1>grault: {{$bar->grault}}</h1>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-article>
