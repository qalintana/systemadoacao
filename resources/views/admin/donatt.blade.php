@extends('layouts.admin')

@section('title', 'Doadores')

@section('content')

<div class="row">

    @forelse ($donatts as $donat)

    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                {{-- <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src=""
                        alt="Foto de perfil">
                </div> --}}

                <h3 class="profile-username text-center">{{substr($donat->name, 0, 30)}}</h3>

                <p class="text-muted font-weight-bold">Últimos movimentos</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Valor</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Valor</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>valor</b> <a class="float-right">13,287</a>
                    </li>
                </ul>

            <a href="{{ route('admin.deposit.create', ['user'=>$donat->id])}}" class="btn btn-primary btn-block"><b> <i class="fas fa-plus-circle"></i>Adicionar Saldo</b></a>
                <a href="#" class="btn btn-warning btn-block"><b> <i class="fas fa-info-circle"></i>Mais detalhes</b></a>
            </div>
            <!-- /.card-body -->
        </div>

    </div>


    @empty

    @endforelse
</div>

@endsection
