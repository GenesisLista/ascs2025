@extends('layouts.app')
@section('title', 'Abstract Form')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Abstract Submission Form</h2>
            <form id="contact-form" action="{{ route('abstract_submission.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="success-message">Contact form submitted!</div>

                <div class="wrapper">
                    <label class="name">
                        <input type="text" name="author" placeholder="Author's full name" />
                        @if ($errors->has('author'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="email">
                        <input type="text" name="email" placeholder="E-mail" />
                        @if ($errors->has('email'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="country">
                        <input type="text" name="country" placeholder="Country" />
                        @if ($errors->has('country'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="country_code">
                        <input type="text" name="code" placeholder="Country Code" />
                        @if ($errors->has('code'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="phone">
                        <input type="text" name="phone" placeholder="Phone" />
                        @if ($errors->has('phone'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="company">
                        <input type="text" name="company" placeholder="Institution or Company" />
                        @if ($errors->has('company'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="presenter">
                        <input type="text" name="presenter" placeholder="Presenter full name" />
                        @if ($errors->has('presenter'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="title">
                        <input type="text" name="title" placeholder="Abstract title" />
                        @if ($errors->has('title'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="biography">
                        <textarea name="biography" placeholder="Presenter's Short Bio"></textarea>
                        @if ($errors->has('biography'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>
                    
                    <label class="theme">
                        <select name="theme_id">
                            <option value="">-- Please Choose Theme --</option>
                            @foreach ($theme as $themes)
                                <option value="{{ $themes->id }}">{{ $themes->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('theme_id'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="poster">
                        <select name="poster_id">
                            <option value="">-- Please Choose Poster --</option>
                            @foreach ($poster as $posters)
                                <option value="{{ $posters->id }}">{{ $posters->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('poster_id'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="file">
                        <span>* Upload abstract file with Author's Name and Institution or Company name </br></span>
                        <span>* Upload only PDF Format </br></span>
                        <span>* Maximum of 15mb </br></span>
                        <input type="file" name="abstract_path" placeholder="Abstract title" />
                        @if ($errors->has('abstract_path'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <p>After submitting your abstract, the Secretariat will send a confirmation by email.</p>

                </div>

                <div class="form_btns">
                    <a href="{{ route('abstract_submission.index') }}" data-type="reset" class="more_btn bg5">Cancel</a>
                    <button type="submit" data-type="submit" class="more_btn_save bg5"> Submit </button>
                </div>
            </form>

        </div>
    </div>
</div>
@stop