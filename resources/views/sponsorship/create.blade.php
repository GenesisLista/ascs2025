@extends('layouts.app')
@section('title', 'Sponsorship Form')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Sponsorship / Exhibition Form</h2>
            @if(session('success-submitted'))
            <p class="txt6">{{ session('success-submitted') }}</p>
            @endif
            
            <form id="contact-form" action="{{ route('sponsorship.store') }}" method="POST"
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

                    <label class="designation">
                        <input type="text" name='designation' placeholder="* Designation" />
                        @if ($errors->has('designation'))
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

                    <label class="address">
                        <input type="text" name='address' placeholder="* Address" />
                        @if ($errors->has('address'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="city">
                        <input type="text" name='city' placeholder="* City" />
                        @if ($errors->has('city'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="state">
                        <input type="text" name='state' placeholder="* State" />
                        @if ($errors->has('state'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="country">
                        <input type="text" name='country' placeholder="* Country" />
                        @if ($errors->has('country'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="telephone_number">
                        <input type="text" name='telephone_number' placeholder="* Telephone Number" />
                        @if ($errors->has('telephone_number'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="country_code">
                        <input type="text" name='country_code' placeholder="* Country Code" />
                        @if ($errors->has('country_code'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <label class="mobile_number">
                        <input type="text" name='mobile_number' placeholder="* Mobile Number" />
                        @if ($errors->has('mobile_number'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <p class="txt6">* Please choose ONE of the choices from the dropdown list below before submitting
                        the form.</p>
                    @if(session('success-rejected'))
                    <span class="error_message">{{ session('success-rejected') }}</span>
                    @endif

                    <p>For Sponsorship Packages</p>
                    <label class="sponsorship_package">
                        <select name="sponsorship_package">
                            <option value="">-- Please Choose --</option>
                            @foreach ($sponsorship as $sp)
                            <option value="{{ $sp->id }}">{{ $sp->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('sponsorship_package'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <p>For Booth Packages</p>
                    <label class="booth_package">
                        <select name="booth_package">
                            <option value="">-- Please Choose --</option>
                            @foreach ($booth as $bp)
                            <option value="{{ $bp->id }}">{{ $bp->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('booth_package'))
                        <span class="error_message">* This field is required.</span>
                        &nbsp;
                        @endif
                    </label>

                    <p>After submitting your sponsorship / exhibition form, the
                        &#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#64;&#97;&#115;&#99;&#115;&#50;&#48;&#50;&#53;&#46;&#99;&#111;&#109;
                        will send a confirmation and bank details by email.
                    </p>

                </div>

                <div class="form_btns">
                    <a href="{{ route('sponsorship.index') }}" data-type="reset" class="more_btn bg5">Cancel</a>
                    <button type="submit" data-type="submit" class="more_btn_save bg5"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop