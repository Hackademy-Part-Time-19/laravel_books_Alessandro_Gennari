<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/register" method="POST">
                @csrf
                <h1>Registrati</h1>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" id="email">
                </div>

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="text" class="form-control" id="password">
                </div>

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input name="password_confirmation" type="text" class="form-control" id="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Registrati</button>
                
                </form>

            </div>

        </div>

    </div>
</x-layout>