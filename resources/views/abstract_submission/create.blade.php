@extends('layouts.app')
@section('title', 'Abstract Form')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Abstract Submission Form</h2>
            <form id="contact-form">
                <div class="success-message">Contact form submitted!</div>

                <div class="wrapper">
                    <label class="name">
                        <input type="text" placeholder="Author's full name" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid Complete name.</span>
                    </label>

                    <label class="email">
                        <input type="text" placeholder="E-mail" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="country">
                        <input type="text" placeholder="Country" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="code">
                        <input type="text" placeholder="Code" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid designation.</span>
                    </label>

                    <label class="phone">
                        <input type="text" placeholder="Phone" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid company.</span>
                    </label>

                    <label class="company">
                        <input type="text" placeholder="Institution or Company" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid address.</span>
                    </label>

                    <label class="presenter">
                        <input type="text" placeholder="Presenter full name" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid city.</span>
                    </label>

                    <label class="title">
                        <input type="text" placeholder="Abstract title" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid post code.</span>
                    </label>

                    <label class="bio">
                        <textarea placeholder="Presenter's Short Bio"></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>

                    <label class="theme">
                        <select>
                            <option>Please select the theme most relevant for your abstract</option>
                            <option>Beauty technology and Digital application</option>
                            <option>Beauty innovation in Raw material packaging and finished products</option>
                            <option>Beauty tradition and Evolution</option>
                            <option>Beauty safety and efficacy testing</option>
                            <option>Natural resources for new ingredients</option>
                        </select>
                    </label>

                    <label class="poster">
                        <select>
                            <option>Please select the poster format of presentation</option>
                            <option>Poster</option>
                            <option>Poduim ( Oral )</option>
                        </select>
                    </label>

                    <label class="file">
                        <span>* Upload abstract file with Author's Name and Institution or Company name </br></span>
                        <span>* Upload only PDF Format </br></span>
                        <span>* Maximum of 15mb </br></span>
                        <input type="file" placeholder="Abstract title" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid post code.</span>
                    </label>

                    <p>After submitting your abstract, the Secretariat will send a confirmation by email.</p>

                </div>

                <div class="form_btns">
                    <a href="{{ route('abstract_submission.index') }}" data-type="reset" class="more_btn bg5">Cancel</a>
                    <a href="javascript:void(0)" data-type="submit" class="more_btn bg5">Submit</a>
                </div>
            </form>

        </div>
    </div>
</div>
@stop