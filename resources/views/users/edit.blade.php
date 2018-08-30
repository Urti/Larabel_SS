@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Edycja Użytkownika {{$user->id}}</div>
                <div class="card-body">
                    <form action="{{url('/users/' . $user->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Imię i Nazwisko:</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                <label for="sex">Płeć</label>
                                    <select class="form-control" id="sex" class="form-control" name="sex">
                                        <option value="m" @if ($user->sex == 'm')selected @endif>Mężczyzna</option>
                                        <option value="f" @if ($user->sex == 'f')selected @endif>Kobieta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">e-mail:</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm pull-right">Zapisz zmiany</button>
                    </form>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection
