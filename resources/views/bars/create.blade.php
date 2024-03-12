<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2">Create a new bar</h1>
            </div>
        </div>
        <div class="box">
            <form method="POST" action="{{Route("bars.index")}}">
                <h2 class="subtitle is-6 is-italic">
                    Please fill out all the form fields and click 'Submit'
                </h2>

                {{-- Here are all the form fields --}}
                <div class="field">
                    @csrf
                    <label for="name" class="label">Name</label>
                    <div class="control">
                        <input type="text" name="name" placeholder="Enter the bar's name here" value="{{old("name")}}"
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
                        <input type="text" name="waldo" placeholder="Enter the bar's waldo here" value="{{old("waldo")}}"
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
                        <input type="number" name="grault" placeholder="Enter the bar's grault here" value="{{old("grault")}}"
                               class="input" autocomplete="grault" autofocus>
                    </div>
                    @error("grault")
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                        <a type="button" href="{{ route("bars.index") }}" class="button is-light">Cancel</a>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-warning">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-main>
