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
                        <input type="text" placeholder="Complete name" />
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

                    <label class="countrycode">
                        <input type="text" placeholder="Country Code" />
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
                        <input type="text" placeholder="Telephone Number" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid Telephone Number.</span>
                    </label>

                    <label class="mobile_number">
                        <input type="text" placeholder="Mobile Number" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid Mobile Number.</span>
                    </label>

                    <label class="intl_delegate_physical">
                        <select name="intl_delegate_physical_id">
                            <option value="">-- Please Choose International Delegate - Physical Attendees --</option>
                            <option>IFSCC Members (Early Bird) / Jan - Sept 2024 / USD 500</option>
                            <option>IFSCC Members / Oct 2024 - Jun 2025 / USD 550</option>
                            <option> --- </option>
                            <option>Non IFSCC Members (Early Bird) / Jan - Sept 2024 / USD 540</option>
                            <option>Non IFSCC Members / Oct 2024 - Jun 2025 / USD 600/option>
                            <option> --- </option>
                            <option>Students (Early Bird) / Jan - Sept 2024 / USD 360</option>
                            <option>Students / Oct 2024 - Jun 2025 / USD 400</option>
                        </select>
                        @if ($errors->has('intl_delegate_physical_id'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="local_delegate_physical">
                        <select name="local_delegate_physical_id">
                            <option value="">-- Please Choose Local Delegate - Physical Attendees --</option>
                            <option>PSCS Members (Early Bird) / Jan - Sept 2024 / Php 22,500</option>
                            <option>PSCS Members / Oct 2024 - Jun 2025 / Php 25,000</option>
                            <option> --- </option>
                            <option>Non PSCS Members / Jan - Sept 2024 / Php 27,000</option>
                            <option>Non PSCS Members / Oct 2024 - Jun 2025 / Php 30,000</option>
                            <option> --- </option>
                            <option>Students / Jan - Sept 2024 / Php 18,000</option>
                            <option>Students / Oct 2024 - Jun 2025 / Php 20,000</option>
                        </select>
                        @if ($errors->has('local_delegate_physical_id'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="intl_delegate_online">
                        <select name="intl_delegate_online_id">
                            <option value="">-- Please Choose International Delegate - Online Attendees --</option>
                            <option>IFSCC Members (Early Bird) / Jan - Sept 2024 / USD 285</option>
                            <option>IFSCC Members / Oct 2024 - Jun 2025 / USD 315</option>
                            <option> --- </option>
                            <option>Non IFSCC Members / Jan - Sept 2024 / USD 315</option>
                            <option>Non IFSCC Members / Oct 2024 - Jun 2025 / USD 350</option>
                            <option> --- </option>
                            <option>Students / Jan - Sept 2024 / USD 135</option>
                            <option>Students / Oct 2024 - Jun 2025 / USD 150</option>
                        </select>
                        @if ($errors->has('intl_delegate_online_id'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
                    </label>

                    <label class="local_delegate_online">
                        <select name="local_delegate_online_id">
                            <option value="">-- Please Choose Local Delegate - Online Attendees --</option>
                            <option>PSCS Members (Early Bird) / Jan - Sept 2024 / Php 6,750</option>
                            <option>PSCS Members / Oct 2024 - Jun 2025 / Php 7,500</option>
                            <option> --- </option>
                            <option>Non PSCS Members / Jan - Sept 2024 / Php 9,000</option>
                            <option>Non PSCS Members / Oct 2024 - Jun 2025 / Php 10,000</option>
                            <option> --- </option>
                            <option>Students / Jan - Sept 2024 / Php 4,500</option>
                            <option>Students / Oct 2024 - Jun 2025 / Php 4,950</option>
                        </select>
                        @if ($errors->has('local_delegate_online_id'))
                            <span class="error_message">* This field is required.</span>
                            &nbsp;
                        @endif
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