@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">enter employee details</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('emp_update1') }}">
                        @csrf
                       <input type="hidden" name="id" value="{{$fifth1->id}}">
                        <div class="form-group row">
                            <label for="emp_add" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="emp_add" type="text" class="form-control{{ $errors->has('emp_add') ? ' is-invalid' : '' }}" name="emp_add" value="{{ $fifth1->emp_add }}" required autofocus>

                                @if ($errors->has('emp_add'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_add') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_phn" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="emp_phn" type="text" class="form-control{{ $errors->has('emp_phn') ? ' is-invalid' : '' }}" name="emp_phn" value="{{ $fifth1->emp_phn }}" required>

                                @if ($errors->has('emp_phn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_phn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_sal" class="col-md-4 col-form-label text-md-right">{{ __('emp_sal') }}</label>

                            <div class="col-md-6">
                                <input id="emp_sal" type="type" class="form-control" name="emp_sal"value="{{ $fifth1->emp_sal }}" required>
                                @if ($errors->has('emp_sal'))   
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_sal') }}</strong>
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
                Address
            </th>
             <th>
                phone
            </th>
             <th>
                salary
            </th>
            <th>
                Action
            </th>
        </tr>
        @foreach($fifth as $fifths)
        <tr>
            <td>
                {{$fifths->emp_add}}
            </td>
        
         
            <td>
                {{$fifths->emp_phn}}
            </td>        
         
            <td>
                {{$fifths->emp_sal}}
            </td>
            <td>
                <a class="btn btn-primary" href="{{url('edit1/')}}/{{$fifths->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
