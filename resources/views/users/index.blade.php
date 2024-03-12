<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">All the news articles</h1>
            </div>
            <div class="column">
                <a href="{{ route('bars.create') }}" class="button is-primary is-pulled-right">
                    Add Bar
                </a>
            </div>
        </div>
        @foreach($users as $user)
                <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <small>{{ $user->name}}</small>
                                        <br>
                                        {{ $user->id }}
                                        <small>{{ $user->email}}</small>
                                    </p>
                                </div>
                            </div>
                        </article>
                    @foreach($user->bars as $bar)
                        {{$bar->name}}
                    @endforeach
                @endforeach
    </div>
</x-main>
