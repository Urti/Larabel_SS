@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Edycja Użytkownika {{$user->id}}</div>
                <div class="card-body">
                <!-- Avatar -->
                <img src="{{ asset('storage/users/' . $user->id . '/avatars/' . $user->avatar )}}" alt="" class="img-responsive">

                    <form action="{{url('/users/' . $user->id)}}" method="post" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Avatar:</label>
                                    <input type="file" name="avatar" class="form-control" placeholder="wybierz plik">
                                    @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Imię i Nazwisko:</label>
                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $user->name }}">
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">e-mail:</label>
                                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $user->email }}">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
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
