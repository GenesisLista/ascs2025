@extends('layouts.app')
@section('title', 'Sponsorship Form')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Registration Form</h2>
            <form id="contact-form">
                <div class="success-message">Contact form submitted!</div>
                <div class="wrapper">
                    <label class="email">
                        <input type="text" placeholder="E-mail" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="name">
                        <input type="text" placeholder="Complete name (First name Middle name Last name)" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid Complete name.</span>
                    </label>

                    <label class="designation">
                        <input type="text" placeholder="Designation" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid designation.</span>
                    </label>

                    <label class="company">
                        <input type="text" placeholder="Company / Organization Name" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid company.</span>
                    </label>

                    <label class="address">
                        <input type="text" placeholder="Address" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid address.</span>
                    </label>

                    <label class="city">
                        <input type="text" placeholder="City" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid city.</span>
                    </label>

                    <label class="postcode">
                        <input type="text" placeholder="Post Code" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid post code.</span>
                    </label>

                    <label class="state">
                        <input type="text" placeholder="State" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid state.</span>
                    </label>

                    <label class="country">
                        <input type="text" placeholder="Country" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid country.</span>
                    </label>

                    <label class="telephone_number">
                        <input type="text" placeholder="Office Telephone Number" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid Office Telephone Number.</span>
                    </label>

                    <label class="mobile_number">
                        <input type="text" placeholder="Office Mobile Number" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid Office Mobile Number.</span>
                    </label>
                </div>

                <div class="form_btns">
                    <a href="{{ route('registration.index') }}" data-type="reset" class="more_btn bg5">Cancel</a>
                    <a href="javascript:void(0)" data-type="submit" class="more_btn bg5">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop