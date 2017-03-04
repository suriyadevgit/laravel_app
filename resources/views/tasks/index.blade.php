@extends('layouts.app')


<style>

    input ,label{

        margin: 20px!important;

    }


    table {

        margin :auto;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Application Form </b></div>
                {{ csrf_field() }}
                <div class="panel-body">

                  {!! Form::model($tasks ,array('route' => ['appform.update',$tasks->id],'method'=>'PUT','files'=>'true')) !!}

                  Email Id :   <label >{{$tasks->email_id}}</label> 
                  First Name :   {!! Form::text('first_name',null,['class'=>'form-control']) !!} Last Name :    {!! Form::text('last_name',null,['class'=>'form-control']) !!} 
                  Date of Birth : {!! Form::text('d_o_b',null,['class'=>'form-control']) !!}  
                  Gender : {!! Form::text('gender',null,['class'=>'form-control']) !!} 
                  Mobile Number : {!! Form::text('mobile_number',null,['class'=>'form-control']) !!} trNationality  {!! Form::text('nationality',null,['class'=>'form-control']) !!} 
                  Blood Group : {!! Form::text('bloodgroup',null,['class'=>'form-control']) !!} 

                  {!! Form::text('data2Id',null,['class'=>'form-control']) !!} 
                  
                  {!! Form::file('doc'); !!}
                  {!! Form::file('doc2'); !!}


                  {!! Form::token() !!}

                  {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}


                  {!! Form::close() !!}


                  <!-- {{link_to_route('appform.update','Save Changes',[$tasks->id],['class'=>'btn btn-success'])}} -->



              </div>
          </div>
      </div>
  </div>
</div>
@endsection
