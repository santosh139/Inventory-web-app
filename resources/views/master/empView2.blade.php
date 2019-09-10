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
                            <label for="add" class="col-md-4 col-form-label text-md-right">{{ __('SSN') }}</label>

                            <div class="col-md-6">
                                <input id="add" type="text" class="form-control{{ $errors->has('emp_ssn') ? ' is-invalid' : '' }}" name="emp_ssn" value="{{ old('emp_ssn') }}" required autofocus>

                                @if ($errors->has('emp_ssn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_ssn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax" class="col-md-4 col-form-label text-md-right">{{ __('Tax') }}</label>

                            <div class="col-md-6">
                                <input id="tax" type="text" class="form-control{{ $errors->has('emp_tax') ? ' is-invalid' : '' }}" name="emp_tax" value="{{ old('emp_tax') }}" required>

                                @if ($errors->has('emp_tax'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_tax') }}</strong>
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
                SSN
            </th>
             <th>
                TAX
            </th>
            <th>
                Action
            </th>
        </tr>
        @foreach($sixth as $sixths)
        <tr>
            <td>
                {{$sixths->emp_ssn}}
            </td>
        
         
            <td>
                {{$sixths->emp_tax}}
            </td>        
         
            <td>
                <a class="btn btn-primary" href="{{url('edit2')}}/{{$sixths->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
