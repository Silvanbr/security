<x-main>
    <div>
        <h1>Hello there, edit a post here!!</h1>
    </div>

    <form method="POST" action="{{route('bars.show', $bar)}}">
        @csrf
        @method('PUT')
        <div class="field">
            @csrf
            <label for="name" class="label">Name</label>
            <div class="control">
                <input type="text" name="name" placeholder="Enter the bar's name here" value="{{$bar->name}}"
                       class="input" autocomplete="name" autofocus>
            </div>
            @error("name")
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            @csrf
            <label for="waldo" class="label">Waldo</label>
            <div class="control">
                <input type="text" name="waldo" placeholder="Enter the bar's waldo here" value="{{$bar->waldo}}"
                       class="input" autocomplete="waldo" autofocus>
            </div>
            @error("waldo")
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            @csrf
            <label for="grault" class="label">Grault</label>
            <div class="control">
                <input type="number" name="grault" placeholder="Enter the bar's grault here" value="{{$bar->grault}}"
                       class="input" autocomplete="grault" autofocus>
            </div>
            @error("grault")
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>


        <div>
            <div>
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                        <a href="{{ route('bars.show', $bar->id) }}" class="button is-light">
                            <strong>cancel</strong>
                        </a>
                    </div>
            </div>
        </div>
    </form>
</x-main>
