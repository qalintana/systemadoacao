@extends('layouts.admin')

@section('title', 'Depósitos')

@section('content')

<div class="row">

    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                {{-- <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src=""
                        alt="Foto de perfil">
                </div> --}}

                <h3 class="profile-username text-center"><b>{{$donat->name}}</b></h3>

                <p class="text-muted font-weight-bold">Últimos movimentos</p>


                <ul class="list-group list-group-unbordered mb-3">
                    @forelse ($donat->deposits as $item)
                    <li class="list-group-item">
                        <b>Valor</b> <a class="float-right">{{$item->value}}</a>
                    </li>

                    @empty

                    @endforelse
                </ul>
            <p>Valor total: <b>{{ $donat->deposits->sum('value')}} kz</b></p>

            </div>
            <!-- /.card-body -->
        </div>

    </div>

    <div class="col-md-9">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                {{-- <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src=""
                        alt="Foto de perfil">
                </div> --}}

                <h3 class="profile-username "> Insira o saldo que precisa acrescentar</h3>

                <form action="{{ route('admin.deposit.store')}}" class="form-inline" method="POST">
                    @csrf

                    <input type="hidden" name="user" value="{{$donat->id}}">
                    <div class="input-group">
                        <input type="number" class="form-control" name="value">
                        <div class="input-group-append">
                            <span class="input-group-text">.00 Kz</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-warning"> <i class="fas fa-check"></i> </button>

                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </div>

</div>

@endsection
