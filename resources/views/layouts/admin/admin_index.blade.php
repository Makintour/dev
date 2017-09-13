@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Административная панель</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="links">
                        <a href="<?=route('all_clients')?>">Импорт Туристов</a><br />
                        <a href="<?=route('all_requests')?>">Импорт Заявок</a><br />
                        <a href="<?=route('all_leads_requests')?>">Импорт Лидов</a><br />
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection