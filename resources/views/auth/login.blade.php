<x-layout>
    
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Accedi
          </div>
          <div class="card-body">
            <form action="/login" method="POST">
                @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Indirizzo Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="nome@esempio.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Ricordami</label>
              </div>
              @error('email') <span class="text-danger">{{$message}}</span> @enderror
              <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>