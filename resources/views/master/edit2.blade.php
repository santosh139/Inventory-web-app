@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">enter employee details</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('emp_info') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="add" class="col-md-4 col-form-label text-md-right">{{ __('ssn') }}</label>

                            <div class="col-md-6">
                                <input id="add" type="text" class="form-control{{ $errors->has('emp_name') ? ' is-invalid' :'' }}" name="emp_ssn" value="{{ $sixth->emp_ssn }}" required autofocus>

                                @if ($errors->has('emp_ssn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_ssn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax" class="col-md-4 col-form-label text-md-right">{{ __('tax') }}</label>

                            <div class="col-md-6">
                                <input id="emp_ssn" type="text" class="form-control{{ $errors->has('emp_ssn') ? ' is-invalid' :'' }}" name="emp_ssn" value="{{ $third->emp_ssn }}" required>

                                @if ($errors->has('emp_ssn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_ssn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
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
        @foreach($third1 as $third1s)
        <tr>
            <td>
                {{$third1s->emp_name}}
            </td>
        
         
            <td>
                {{$third1s->emp_email}}
            </td>
             <td>
                {{$third1s->emp_id}}
            </td>
            <td>
                <a class="btn btn-primary" href="{{url('edit')}}/{{$third1s->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
