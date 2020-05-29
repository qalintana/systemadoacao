@extends('layouts.site')


@section('content')

<div class="contact">
    <div class="texto">
        <p class="font-weight-bold">
            Preenchendo o formulário voçê será um doador e estará ajudando muitos com sua ajuda, agradecemos muito
        </p>
        <p>Sempre que tiver uma dúvida não pense duas vezes, entre em contacto</p>
    </div>
    <div class="formulario">
        <h4>Preencha os dados pessoais</h4>
        <form action="{{ route('site.donate.store')}}" method="post">
            @csrf
            <label for="">Nome completo</label>
            <input type="text" name="name" id="" placeholder="Escreva o seu nome completo" value='{{ old('name')}}'>

            @error('name')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
            <label for="">E-mail</label>
            <input type="email" name="email" id="" placeholder="Digite o seu email" value="{{ old('email')}}">
            @error('email')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
            <div class="row">
                <div class="col">
                    <label for="">Bilhete de identidade</label>
                    <input type="text" name="bi" id="" placeholder="Digite o número de de bilhete"
                        value="{{ old('bi')}}">
                    @error('bi')
                    <p class="text-error">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Sexo</label>
                    <select type="text" name="sexo" id="" placeholder="Digite o número de de bilhete">
                        <option value="M" selected>Masculino</option>
                        <option value="F">Femenino</option>
                    </select>

                    @error('sexo')
                    <p class="text-error">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Data de nascimento</label>
                    <input type="text" name="data" id="" placeholder="Ex: 10/03/1993"
                        value="{{ old('data')}}">
                    @error('data')
                    <p class="text-error">
                        {{$message}}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="">Senha de Acesso</label>
                    <input type="password" name="password" id="" placeholder="Digite sua senha de acesso"
                        value="{{ old('password')}}">
                    @error('password')
                    <p class="text-error">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col">
                    <label for="">Confirmar senha de Acesso</label>
                    <input type="password" name="password_confirmation" id="" placeholder="Digite novamente sua senha de acesso"
                        value="{{ old('password')}}">
                    @error('password')
                    <p class="text-error">
                        {{$message}}
                    </p>
                    @enderror
                </div>

            </div>



            <button type="submit">Enviar</button>

        </form>
    </div>


</div>


@endsection
