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
                    <form method="POST" action="{{ url('emp_insert') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="emp_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="emp_name" type="text" class="form-control{{ $errors->has('emp_name') ? ' is-invalid' : '' }}" name="emp_name" value="{{ old('emp_name') }}" required autofocus>

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
                                <input id="emp_email" type="email" class="form-control{{ $errors->has('emp_email') ? ' is-invalid' : '' }}" name="emp_email" value="{{ old('emp_email') }}" required>

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
                                <input id="emp-id" type="type" class="form-control" name="emp_id" required>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-6 control-label">upload profile pic</label>
                            <div class="col-sm-4">
                                <input type="file" name="image" class="form-control" id="name" placeholder="upload" accept=".jpg">
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
<br>
<div classs="row">
<div class="col-md-6 ">
    
</div> 
    <div class="col-md-6">     
        <div class="input-group">     
         <form action="{{url('empSearch')}}" method="GET" class="form-inline">   
          <input type="text" class="form-control" placeholder="Search for..." name="searchEmp">   
              <span class="input-group-btn">       
                <button class="btn btn-default" type="button">Go!</button> 
</span>    
</form>
 </div><!-- /input-group -->   
       <a href="{{action('ThirdController@downloadAllPDF')}}" class="btn btn-warning">download pdf</a>

</div><!-- /.col-lg-6 -->
 </div><!-- /.row -->
 </div>
 <br> 
 
 
<div class="container">
    <table class="table table-hover">
        <tr>
            <th>
                profile pic
            </th>
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
                <img src="{{url('../storage/app/images/'.$thirds->file_upload)}}" width="150px" height="150px" style="border-radius:50%">
            </td>
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
                <button onclick="view('{{$thirds->id}}')" class="btn btn-primary">view</button>
                 <a class="btn btn-danger" href="{{url('delete/')}}/{{$thirds->id}}">Delete</a>
                 <a href="{{action('ThirdController@downloadPDF',$thirds->id)}}" class="btn btn-warning">download pdf</a>



            </td>
        </tr>
        @endforeach
    </table> 
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        {{$third->render()}}
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
            <input type="text" name="name" id="employee_name" disabled class="form-control"><br>
            <input type="text" name="email" id="employee_email" disabled class="form-control"><br>
            <input type="text" name="id" id="employee_id" disabled class="form-control"><br>
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
    function view(id)
    {
        $.ajax({
            method:'GET',
            url:"{{ route('view.emp')}}",
            data:{
                id: id
            },
            success:function(data)
            {
                $('#employee_name').val(data.emp_name);
                $('#employee_email').val(data.emp_email);
                $('#employee_id').val(data.emp_id);
                $('#myModal').modal('show');
            }
        });
    }
</script>