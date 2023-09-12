<x-layout>

    <form method="POST" action="{{route('register')}}">
        <div class="mb-3">
            <label class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Conferma Password</label>
            <input type="password" class="form-control" name="password_confirmation">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout>