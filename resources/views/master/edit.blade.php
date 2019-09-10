@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">enter employee details</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('emp_update') }}">
                        @csrf
                       <input type="hidden" name="id" value="{{$third1->id}}">
                        <div class="form-group row">
                            <label for="emp_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="emp_name" type="text" class="form-control{{ $errors->has('emp_name') ? ' is-invalid' : '' }}" name="emp_name" value="{{ $third1->emp_name }}" required autofocus>

                                @if ($errors->has('emp_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="emp_email" type="email" class="form-control{{ $errors->has('emp_email') ? ' is-invalid' : '' }}" name="emp_email" value="{{ $third1->emp_email }}" required>

                                @if ($errors->has('emp_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_id" class="col-md-4 col-form-label text-md-right">{{ __('emp_id') }}</label>

                            <div class="col-md-6">
                                <input id="emp-id" type="type" class="form-control" name="emp_id"value="{{ $third1->emp_id }}" required>
                                @if ($errors->has('emp_id'))   
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table table-hover">
        <tr>
            <th>
                name
            </th>
             <th>
                email
            </th>
             <th>
                Emp_id
            </th>
            <th>
                Action
            </th>
        </tr>
        @foreach($third as $thirds)
        <tr>
            <td>
                {{$thirds->emp_name}}
            </td>
        
         
            <td>
                {{$thirds->emp_email}}
            </td>        
         
            <td>
                {{$thirds->emp_id}}
            </td>
            <td>
                <a class="btn btn-primary" href="{{url('edit/')}}/{{$thirds->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
