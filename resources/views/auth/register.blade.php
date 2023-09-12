<x-layout>

    <div class="container-register">
        <div class="heading">registrati</div>
        <form action="{{route('register')}}" class="form" method="post">
          @csrf
          <input required="" class="input" type="text" name="name" id="email" placeholder="nome completo">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input required="" class="input" type="password" name="password_confirmation" id="password"
                placeholder="Password">
            <input class="login-button" type="submit" value="Sign In">
        </form>

    </div>

</x-layout>
