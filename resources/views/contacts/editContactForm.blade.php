@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Contact: {{ $contact->fullName }}</div>


                </div>
                <div class="panel panel-default">

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ route("contacts.update", ['id' => $id]) }}">
                            {{csrf_field()}}
                            <div class="form-group"{{ $errors->has('fullName') ? ' has-error' : '' }}>

                                <div class="col-md-6">
                                    <label for="fullName" class="col-4 control-label">Full Name</label>
                                    <input id="fullName" type="text" class="form-control" name="fullName" value="{{$fullName}}"  >




                                </div>
                                @if ($errors->has('fullName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fullName') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group"{{ $errors->has('email') ? ' has-error' : '' }}>

                                <div class="col-md-6">
                                    <label for="email" class="col-4 control-label">Email</label>

                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" >


                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group"{{ $errors->has('phoneNumber') ? ' has-error' : '' }}>

                                <div class="col-md-6">
                                    <label for="phoneNumber" class="col-4 control-label">Phone Number</label>
                                    <input id="phoneNumber" type="text" class="form-control" name="phoneNumber" value="{{ $phoneNumber}}"  >




                                </div>
                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>




                            <div class="form-group">
                                <div class="col-md-4 ">
                                    <button type="submit" class="btn btn-primary">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection