@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">enter employee details</div>


                <!-- this code is for alert of error -->
                @if(count($errors)>0)
                <div class="alert alert-success">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ url('emp_detail') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="emp_add" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="emp_add" type="text" class="form-control{{ $errors->has('emp_add') ? ' is-invalid' : '' }}" name="emp_add" value="{{ old('emp_add') }}" required autofocus>

                                @if ($errors->has('emp_add'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_add') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_phn" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                            <div class="col-md-6">
                                <input id="emp_phn" type="text" class="form-control{{ $errors->has('emp_phn') ? ' is-invalid' : '' }}" name="emp_phn" value="{{ old('emp_phn') }}" required>

                                @if ($errors->has('emp_phn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('emp_phn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_sal" class="col-md-4 col-form-label text-md-right">{{ __('salary') }}</label>

                            <div class="col-md-6">
                                <input id="emp_sal" type="text" class="form-control" name="emp_sal" required>
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
                <button onclick="view('{{$fifths->id}}')" class="btn btn-primary">view</button>
                 <a class="btn btn-danger" href="{{url('delete1/')}}/{{$fifths->id}}">Delete</a>



            </td>
        </tr>
        @endforeach
    </table> 
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        {{$fifth->render()}}
</div>

</div>

<!-- <--the modal--> -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" style="font-family:oblique;">Employee details</h2>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      
      </div>
      <div class="modal-body">
        <div class="container">
        <form>
            <input type="text" name="emp_add" id="employee_address" disabled class="form-control"><br>
            <input type="text" name="emp_phn" id="employee_phone" disabled class="form-control"><br>
            <input type="text" name="emp_sal" id="employee_salary" disabled class="form-control"><br>
        </form>
      </div>
      <div class="modal-footer">
    </div>
    </div>

  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    function view1(id)
    {
        $.ajax({
            method:'GET',
            url:"{{ route('view1.emp')}}",
            data:{
                id: id
            },
            success:function(data)
            {
                $('#employee_address').val(data.emp_add);
                $('#employee_phone').val(data.emp_phn);
                $('#employee_salary').val(data.emp_sal);
                $('#myModal').modal('show');
            }
        });
    }
</script>