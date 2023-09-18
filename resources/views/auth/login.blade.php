<x-layout>

    <div class="container-register mx-auto">
        <div class="heading">Login</div>
        <form action="{{ route('register') }}" class="form" method="post">
            @csrf
            <div class="row">
                <div class="col-6">
                    <input required="" class="input" type="email" name="email" id="email"
                        placeholder="E-mail">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <input required="" class="input" type="password" name="password" id="password"
                        placeholder="Password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input class="login-button" type="submit" value="Login">
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    Non hai un account? <a href="{{route('register')}}" class="tx-primary">Registrati</a>
                </div>
            </div>
        </form>
    </div>

</x-layout>
