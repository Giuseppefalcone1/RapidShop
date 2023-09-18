<x-layout>

    <div class="container-register mx-auto">
        <div class="heading">Registrati</div>
        <form action="{{ route('register') }}" class="form" method="post">
            @csrf
            <div class="row">
                <div class="col-6">
                    <input required="" class="input" type="text" name="name" id="email"
                        placeholder="nome completo">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <input required="" class="input" type="email" name="email" id="email"
                        placeholder="E-mail">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input required="" class="input" type="password" name="password" id="password"
                        placeholder="Password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <input required="" class="input" type="password" name="password_confirmation" id="password"
                        placeholder="Conferma password">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input class="login-button" type="submit" value="Registrati">
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    Hai già un account? <a href="{{route('login')}}" class="tx-primary">Accedi</a>
                </div>
            </div>
        </form>
    </div>

</x-layout>
