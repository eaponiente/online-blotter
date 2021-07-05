@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="margin:3% 0;max-width:1200px;">
            <div>
                <div class="logo text-center">
                    <span class="db"><img src="./assets/images/logo.png" width="150" alt="logo"></span>
                    <h2 class="font-weight-medium mb-3 mt-1">How to use the application</h2>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">1. Select city or municipality</figcaption>
                            <img src="{{ url('images/howto/1.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">2. Fill up the incident report form</figcaption>
                            <img src="{{ url('images/howto/2.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">3. These are the list of valid ID's that are allowed in the upload field</figcaption>
                            <img src="{{ url('images/howto/3.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">4. After you submitted the form, a popup would appear then copy the control no. in the image provided.</figcaption>
                            <img src="{{ url('images/howto/4.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">5. Then a link for the survey would also appear in the popup, you can then go to this link.</figcaption>
                            <img src="{{ url('images/howto/5.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

                <h3 class="text-center">View Report</h3>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">1. Click the "Search Blotter" link, then fill in your control no in the field on the page. </figcaption>
                            <img src="{{ url('images/howto/6.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <figure class="figure">
                            <figcaption class="figure-caption">2. You can now view the report info in this page, you can also print the incident report. </figcaption>
                            <img src="{{ url('images/howto/7.png') }}" style="width: 70%" class="figure-img img-fluid rounded mt-2 mx-auto d-block" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection