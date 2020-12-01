@extends('layouts.signin')

@section('content')

                    <form method="POST" action="{{ route('login') }}" class="login">
                        @csrf

                        <div class="form-row form-row-first input-required">
                            <label for="email">
                                <span class="first-letter">{{ __('Correo electronico') }}</span>
                                <span class="second-letter"></span>
                            </label>
                            
                                <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                            
                        </div>

                        <div class="form-row form-row-last input-required">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Contraseña') }}</label>

                                
                                <input id="password" type="password" style="width: 420px" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                    <button id="show_password" class="btn btn-primary" style="height: 40px;" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="clear"></div>
                        <div class="password-form-row">
                            <p class="form-row inpucheckboxt-">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="inline" for="remember" style="color: aliceblue">
                                        {{ __('Recuerdame') }}
                                    </label>
                            </p>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            
                        </div>
                        
                                
                        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesion') }}
                                </button>

                                
                            
                    </form>
                
@endsection
