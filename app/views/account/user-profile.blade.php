
@extends('layout.basic')

@section('page-header')
@parent
{{ HTML::style('css/user-settings.css')}}
@stop

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ URL::to('/') }}/account/settings">User Settings</a></li>
        <li class="active">Your Profile</li>
    </ol>

    @if( Session::has("message") )
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span
                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{{ Session::get("message") }}}
        </div>
    @endif

    @if( isset($errorMessage) )
        <div class="alert alert-danger" role="alert">
            {{{ $errorMessage }}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Profile for {{ Session::get("username") }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
    <form action="{{ URL::to("account/user-profile") }}" method="post" role="form">

        <div class="form-group">
            <label class="control-label">E-mail</label>
            <p class="form-control-static">{{{ $userProfile->emails[0] }}}</p>
        </div>
        <div class="form-group required">
            <label class="control-label">Name</label>
            <div><input class="form-control" id="userName" maxlength="50" name="userName"
                        placeholder="Name" type="text"
                        value="{{{ $userProfile->userName }}}"/></div>
        </div>
        <div class="form-group">
            <label class="control-label">Organization</label>
            <div><input class="form-control" id="homeOrganization" name="homeOrganization"
                        placeholder="Organization" type="text"
                        value="{{{ $userProfile->homeOrganization }}}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Country</label>
            <div><input class="form-control" id="country" name="country"
                        placeholder="Country" type="text"
                        value="{{{ $userProfile->country }}}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Phone Numbers</label>
            @foreach ($userProfile->phones as $phone)
                @include('partials/user-profile-phone-template', array('phone' => $phone))
            @endforeach
            <button id="add-phone-button" class="btn btn-default" type="button">Add Phone</button>
        </div>

        <input name="update" type="submit" class="btn btn-primary btn-block" value="Update">
    </form>

</div>

<div id="new-phone-template" class="hidden">
    @include('partials/user-profile-phone-template', array('phone' => ''))
</div>

@stop

@section('scripts')
@parent
<script>

    $('#add-phone-button').click(function(e){
        $(this).before($('#new-phone-template').html());
    });
    $(document).on('click', '.delete-phone-button', function(e){
        $(this).closest('.input-group').remove();
    });
</script>
@stop
