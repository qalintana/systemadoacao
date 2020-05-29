@extends('layouts.admin')

@section('title', 'Mensagens')

@section('content')

<div class="row">
    <div class="col-md-3">
        <hr href="compose.html" class="btn bg-main  mb-3 text-white">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recebidas</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                    <a href="{{ route('admin.message')}}" class="nav-link">
                            <i class="fas fa-inbox"></i> Todas
                            <span class="badge bg-primary float-right">12</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/messages?status=sim" class="nav-link">
                            <i class="far fa-envelope-open"></i> Lidas
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="/admin/messages?status=nao" class="nav-link">
                            <i class="fas  fa-envelope"></i> Não Lidas
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Respostas</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-seedling"></i>
                            Enviadas
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>


    <div class="col-md-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Todas Mensagens</h3>

                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">

                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <thead class="text-main font-weight-bold">
                            <td>Nome</td>
                            <td>Mensagem</td>
                            <td>Status</td>
                            <td>Recebida aos</td>
                        </thead>
                        <tbody>
                            @forelse ($messages as $message)
                            <tr>
                                <td class="mailbox-name"><a href="read-mail.html">{{$message->name}}</a></td>
                                <td class="mailbox-subject">
                                    <b>{{substr($message->message,0, 10)}}</b>{{substr($message->message,4, 20)}}...
                                </td>
                                <td class="mailbox-attachment">
                                    @if ($message->status)
                                         <span class="badge badge-info">Lido</span>
                                    @else
                                    <span class="badge badge-warning">Não lido</span>
                                    @endif</td>
                                <td class="mailbox-date">{{date('d/m/Y', strtotime($message->created_at))}}</td>
                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">

            </div>
            <!-- /.card -->
        </div>
    </div>


    @endsection
