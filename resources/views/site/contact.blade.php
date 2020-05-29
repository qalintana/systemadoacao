@extends('layouts.site')


@section('content')

<div class="contact">
    <div class="texto">
        <p>
            Deixe a sua mensagem e inquietação preechendo os dados do formulário
        </p>
        <p>Sempre que tiver uma dúvida não pense duas vezes, entre em contacto</p>
    </div>
    <div class="formulario">
        <h4>Fale connosco</h4>
        <form action="{{ route('site.contact.store')}}" method="post">
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
            <label for="">Telefone</label>
        <input type="text" name="telephone" id="" placeholder="Digite o número de telefone" value="{{ old('telephone')}}">
            @error('telephone')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
            <label for="">Mensagem</label>
        <textarea name="message" placeholder="Deixe aqui a sua mensagem..." cols="30" rows="10">{{ old('message')}}</textarea>
            @error('message')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
            <button type="submit">Enviar</button>

        </form>
    </div>


</div>


@endsection
