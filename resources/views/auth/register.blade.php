<x-layout>
<div class="container">
  <form method="POST" action="{{route('register')}}">
    @csrf
      <div class="mb-3">
          <label class="form-label">Nome Completo</label>
          <input type="text" class="form-control" name="name">
          @error('name')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
          @error('email')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
        @error('password')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Conferma Password</label>
          <input type="password" class="form-control" name="password_confirmation">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</x-layout>