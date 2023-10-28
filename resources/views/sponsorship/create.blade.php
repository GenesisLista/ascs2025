@extends('layouts.app')
@section('title', 'Sponsorship Form')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Sponsorship Form</h2>
            <form id="contact-form">
                <div class="success-message">Contact form submitted!</div>
                <div class="wrapper">
                    <label class="name">
                        <input type="text" placeholder="Name" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>

                    <label class="email">
                        <input type="text" placeholder="E-mail" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="phone last">
                        <input type="text" placeholder="Phone" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                </div>

                <label class="message">
                    <textarea placeholder="Message"></textarea>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                </label>
                <div class="form_btns">
                    <a href="{{ route('sponsorship.index') }}" data-type="reset" class="more_btn bg5">Cancel</a>
                    <a href="javascript:void(0)" data-type="submit" class="more_btn bg5">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop