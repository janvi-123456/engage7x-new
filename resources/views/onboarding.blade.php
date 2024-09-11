@extends('authLayout.app')

@section('content')
    <div class="onboarding-step position-relative d-flex justify-content-center">
        <div class=" position-relative col-12 mt-4 col-lg-5 d-flex justify-content-center">
            <div class="container ">
                <div class="text-center mt-4">
                    <img class="logo-absolute" src="./assets/images/Login/main logo.png" alt="">
                </div>
                <p class="h4 text-center mt-4 fw-semibold">Fill This Form to Proceed</p>
                <div id="stepper1" class="bs-stepper">
                    <div class="card">

                        <div class="card-header">
                            <div class="d-flex align-items-lg-center justify-content-lg-between" role="tablist">
                                <div class="step" data-target="#test-l-1">
                                    <div class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                        <div class="bs-stepper-circle">1</div>
                                    </div>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <div class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                        <div class="bs-stepper-circle">2</div>
                                    </div>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <div class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3">
                                        <div class="bs-stepper-circle">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form id="promotionForm" {{--onSubmit="return false"--}} {{--class="needs-validation"--}} novalidate >
                                    <!-- <form onSubmit="return false" class="needs-validation" novalidate> -->
                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                                        <div class="row g-3">
                                            <div>
                                                <label for="bsValidation3" class="form-label">Course Name <span class="required-span">*</span></label>
                                                <div class="input-group col-12">
                                                    <select name="course_name" class="form-select" id="inputGroupSelect01" required>
                                                        <option selected value="">Choose...</option>
                                                       @foreach($courses as $course)
                                                           <option value="{{$course->name}}">{{$course->name}}</option>
                                                       @endforeach
                                                    </select>
                                                    <label class="input-group-text" for="inputGroupSelect01">Search</label>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label class="form-label">Name of College <span class="required-span">*</span></label>
                                                <input type="text" class="form-control" name="college_name" placeholder="Enter College Name" required>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Duration of Promotion <span class="required-span">*</span></label>
                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <input type="date" class="form-control" name="start_date" placeholder="Start Date" required>
{{--                                                        <div class="valid-feedback">--}}
{{--                                                            Looks good!--}}
{{--                                                        </div>--}}
{{--                                                        <div class="invalid-feedback">--}}
{{--                                                            Please choose a start date.--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="date" class="form-control" name="end_date"  placeholder="End Date" required>
{{--                                                        <div class="invalid-feedback">--}}
{{--                                                            Please choose an end date.--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12  text-center mt-4 ">
                                                <button type="button" class="btn btn-primary" onclick="stepper1.next()">Save & Proceed</button>
                                            </div>
                                        </div><!---end row-->

                                    </div>

                                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                                        <div class="row g-3">

                                            <div class="col-12 ">
                                                <label class="form-label">UTM Link <span class="required-span">*</span></label>
                                                <input type="text" name="utm_link" class="form-control" placeholder="Enter Link" required>
                                            </div>
                                            <div class="">
                                                <label class="form-label">Logo <span class="required-span">*</span></label>
                                                <input type="file" name="logo" class="form-control" required>
                                                <p class="m-0 pt-1 ">File Size should be 35mm by 45mm</p>
                                            </div>
                                            <div class="">
                                                <label class="form-label">One Slide <span class="required-span">*</span></label>
                                                <div class="input-group">
                                                    <input type="file" name="on_slide" class="form-control" placeholder="Enter Link" id="inputGroupFile04"
                                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">View
                                                        Sample</button>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label class="form-label">GD PI Experiences <span class="required-span">*</span></label>
                                                <div class="input-group">
                                                    <input type="file" name="gdpi_experience" class="form-control" placeholder="Add File" id="inputGroupFile04"
                                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">View
                                                        Sample</button>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label class="form-label">Brahmastra Document <span class="required-span">*</span></label>
                                                <div class="input-group">
                                                    <input type="file" name="brahmastra_document" class="form-control" placeholder="Add File" id="inputGroupFile04"
                                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">View
                                                        Sample</button>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label class="form-label">Emailers <span class="required-span">*</span></label>
                                                <div class="input-group">
                                                    <input type="file" name="emailers" class="form-control" placeholder="Add File" id="inputGroupFile04"
                                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">View
                                                        Sample</button>
                                                </div>
                                                <button class="btn btn-outline-secondary btn-outline-secondary-small"><svg width="16"
                                                                                                                           height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.25 0.5H1.75C1.41848 0.5 1.10054 0.631696 0.866116 0.866116C0.631696 1.10054 0.5 1.41848 0.5 1.75V14.25C0.5 14.5815 0.631696 14.8995 0.866116 15.1339C1.10054 15.3683 1.41848 15.5 1.75 15.5H14.25C14.5815 15.5 14.8995 15.3683 15.1339 15.1339C15.3683 14.8995 15.5 14.5815 15.5 14.25V1.75C15.5 1.41848 15.3683 1.10054 15.1339 0.866116C14.8995 0.631696 14.5815 0.5 14.25 0.5ZM14.25 14.25H1.75V1.75H14.25V14.25ZM11.75 8C11.75 8.16576 11.6842 8.32473 11.5669 8.44194C11.4497 8.55915 11.2908 8.625 11.125 8.625H8.625V11.125C8.625 11.2908 8.55915 11.4497 8.44194 11.5669C8.32473 11.6842 8.16576 11.75 8 11.75C7.83424 11.75 7.67527 11.6842 7.55806 11.5669C7.44085 11.4497 7.375 11.2908 7.375 11.125V8.625H4.875C4.70924 8.625 4.55027 8.55915 4.43306 8.44194C4.31585 8.32473 4.25 8.16576 4.25 8C4.25 7.83424 4.31585 7.67527 4.43306 7.55806C4.55027 7.44085 4.70924 7.375 4.875 7.375H7.375V4.875C7.375 4.70924 7.44085 4.55027 7.55806 4.43306C7.67527 4.31585 7.83424 4.25 8 4.25C8.16576 4.25 8.32473 4.31585 8.44194 4.43306C8.55915 4.55027 8.625 4.70924 8.625 4.875V7.375H11.125C11.2908 7.375 11.4497 7.44085 11.5669 7.55806C11.6842 7.67527 11.75 7.83424 11.75 8Z"
                                                            fill="currentColor" />
                                                    </svg> &nbsp;
                                                    Add more</button>
                                            </div>
                                            <div class="">
                                                <label class="form-label">Micro Site <span class="required-span">*</span></label>
                                                <div class="input-group">
                                                    <input type="file" name="micro_site" class="form-control" placeholder="Add File" id="inputGroupFile04"
                                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">View
                                                        Sample</button>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center mt-4">
                                                <div class=" gap-3">
                                                    <button class="btn btn-outline-primary px-4" type="button" onclick="stepper1.previous()">Back</button>
                                                    <button class="btn btn-primary" type="button" onclick="stepper1.next()">Save & Proceed</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!---end row-->

                                    </div>

                                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
                                        <div class="row g-3">


                                            <div class="">
                                                <label class="form-label fw-semibold text-danger">Admission Deadline</label>
                                                <div class="row g-3 col-12">

                                                    <div class="col-md-4">
                                                        <label class="form-label">Round 1 <span class="required-span">*</span></label>
                                                        <input type="date" name="round1" id="round1" class="form-control"  placeholder="DD/MM/YY" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please choose round1.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Round 2 <span class="required-span">*</span></label>
                                                        <input type="date" name="round2" id="round2" class="form-control"  placeholder="DD/MM/YY" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please choose round2.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label">Round 3 <span class="required-span">*</span></label>
                                                        <input type="date" name="round3" id="round3" class="form-control"  placeholder="DD/MM/YY" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label class="form-label">Application Form Fees <span class="required-span">*</span></label>
                                                <input type="number" name="application_fees" class="form-control" placeholder="Enter Amount" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please add application form fees.
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <label class="form-label">College Fees <span class="required-span">*</span></label>
                                                <input type="number" name="college_fees" class="form-control" placeholder="Enter Amount" required>
                                            </div>
                                            <div class="col-12 ">
                                                <label class="form-label">Placement  Highlights <span class="required-span">*</span></label>
                                                <input type="text" name="placement_highlights" class="form-control" placeholder="Click here to type" required>
                                            </div>
                                            <div class="col-12 ">
                                                <label class="form-label">5 WOW Factors <span class="required-span">*</span></label>
                                                <input type="text" name="wow_factors" class="form-control" placeholder="Click here to type" required>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <div class=" gap-3">
                                                    <button class="btn btn-outline-primary px-4" type="button" onclick="stepper1.previous()">Back</button>
                                                    <button class="btn btn-primary " type="submit" onclick="stepper1.next()">Save</button>
                                                </div>
                                            </div>
                                        </div><!---end row-->

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        // $(document).ready(function () {
        //   $('#startDate').datepicker({
        //     format: 'mm/dd/yyyy',
        //     autoclose: true
        //   }).on('changeDate', function (e) {
        //     $(this).addClass('is-valid');
        //   });

        //   $('#endDate').datepicker({
        //     format: 'mm/dd/yyyy',
        //     autoclose: true
        //   }).on('changeDate', function (e) {
        //     $(this).addClass('is-valid');
        //   });
        // });

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        // (function () {
        //     'use strict'
        //
        //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
        //     var forms = document.querySelectorAll('.needs-validation')
        //
        //     // Loop over them and prevent submission
        //     Array.prototype.slice.call(forms)
        //         .forEach(function (form) {
        //             form.addEventListener('submit', function (event) {
        //                 if (!form.checkValidity()) {
        //                     event.preventDefault()
        //                     event.stopPropagation()
        //                 }
        //
        //                 form.classList.add('was-validated')
        //             }, false)
        //         })
        // })()
    </script>

    <!-- Include BS Stepper JavaScript -->

@endsection
