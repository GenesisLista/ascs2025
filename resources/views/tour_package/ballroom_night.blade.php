@extends('layouts.app')
@section('title', 'Ballroom Night')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Ballroom Night</h2>
            
            <form id="contact-form" action="{{ route('registration.store') }}" method="POST"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="wrapper">
                    <span class="error_message">* All fields are required</span>
                    <label class="email">
                        <input type="text" name='email' placeholder="* E-mail" />
                        @if ($errors->has('email'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="name">
                        <input type="text" name='name' placeholder="* Complete name" />
                        @if ($errors->has('name'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="company">
                        <input type="text" name='company' placeholder="* Company / Organization Name" />
                        @if ($errors->has('company'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <p>After submitting your request form, the
                        &#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#64;&#97;&#115;&#99;&#115;&#50;&#48;&#50;&#53;&#46;&#99;&#111;&#109;
                        will send a confirmation and bank details by email.
                    </p>
                </div>

                <div class="form_btns">
                    <a href="{{ route('tour_package.index') }}" data-type="reset" class="more_btn bg5">Cancel</a>
                    <button type="submit" data-type="submit" class="more_btn_save bg5"> Submit </button>
                </div>
            </form>    
        </div>
    </div>
</div>
@stop