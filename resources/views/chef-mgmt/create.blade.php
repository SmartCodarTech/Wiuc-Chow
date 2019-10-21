@extends('chef-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Your Details</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('chef-management.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="first name" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="last name"required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mars-double"></i>
                                    </div>
                                    <select type="text"  name="gender" class="form-control pull-right" id="gender" required>
                                        <option value="none">Please select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" placeholder="Age"required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Address"required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address"required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Employment Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('employed_date') }}" name="employed_date" class="form-control pull-right" id="hiredDate" placeholder="hired date" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <label for="salary" class="col-md-4 control-label">Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="number" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Salary"required>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('staff_position') ? ' has-error' : '' }}">
                            <label for="staff_position" class="col-md-4 control-label">Staff postion</label>

                            <div class="col-md-6">
                                <input id="staff_position" type="text" class="form-control" name="staff_position" value="{{ old('staff_position') }}" placeholder="Staff position"required>

                                @if ($errors->has('staff_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('staff_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('twiiter_account') ? ' has-error' : '' }}">
                            <label for="twiiter_account" class="col-md-4 control-label">Twitter Account</label>

                            <div class="col-md-6">
                                <input id="twiiter_account" type="text" class="form-control" name="twiiter_account" value="{{ old('twiiter_account') }}" placeholder="Twitter Acoount"required>

                                @if ($errors->has('twiiter_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('twiiter_account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('facebook_account') ? ' has-error' : '' }}">
                            <label for="facebook_account" class="col-md-4 control-label">Facebook Account</label>

                            <div class="col-md-6">
                                <input id="facebook_account" type="text" class="form-control" name="facebook_account" value="{{ old('facebook_account') }}" placeholder="Facebook Account"required>

                                @if ($errors->has('facebook_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook_account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('ig_account') ? ' has-error' : '' }}">
                            <label for="ig_account" class="col-md-4 control-label">Instagram Account</label>

                            <div class="col-md-6">
                                <input id="ig_account" type="text" class="form-control" name="ig_account" value="{{ old('ig_account') }}" placeholder="Instagram Account"required>

                                @if ($errors->has('ig_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ig_account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gmail_account') ? ' has-error' : '' }}">
                            <label for="gmail_account" class="col-md-4 control-label">Google Account</label>

                            <div class="col-md-6">
                                <input id="gmail_account" type="text" class="form-control" name="gmail_account" value="{{ old('gmail_account') }}" placeholder="Google Account"required>

                                @if ($errors->has('gmail_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gmail_account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div>
                        <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ url('chef-management') }}" target="" class="btn btn-default"><i class="fa fa-close"></i>Cancel</a>
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Submit
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
