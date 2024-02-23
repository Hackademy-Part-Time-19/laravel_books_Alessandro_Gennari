<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="from-label">Email</label>
                        <input name="email" type="email" class="from-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="from-label">Password</label>
                        <input name="password" type="password" class="from-control" id="password">
                    </div>
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>