@extends('website.partials.layouts')
@section('content')
    <section class="heading">
        <div class="container">
            <h1>Contact Us</h1>
            <h5>Get in touch with our team</h5>
        </div>
    </section>
    <section class="section contact-us mb-5">
        <div class="container">
            <div class="content">
                <div class="where-my-package mb-4">
                    <h4 class="mb-4">Where is my package? When can I receive it?</h4>
                    <p>We are so sorry that we couldn&#039;t help you in the case because we are only a platform for
                        tracking information, our user allow to enjoy the convenience of tracking all couriers information
                        with us, but we are <b class="text-danger">not providing any assistance on the tracking
                            information</b>
                        because we do not operate any courier company.</p>
                    <p>If there is any issues with your shipment,<b class="text-danger">
                            please contact related courier company for further assistance</b>.</p>
                </div>
                <div class="row row-eq-height contact-boxs">
                    <div class="col-md-4">
                        <div class="contact-box">
                            <div class="icon"><i class="fas fa-map-marker"></i></div>
                            <h5>Address</h5>
                            <p>Indahpura, Kulai, Johor</p>
                            <p class="text-muted">(Appointment required)</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box">
                            <div class="icon"><i class="fas fa-clock"></i></div>
                            <h5>Business Hours</h5>
                            <p>Monday – Friday: <span class="text-muted">9am – 6pm</span><br>Saturday:
                                <span class="text-muted">9am – 1pm</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-box">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <h5>Email</h5>
                            <p>
                                <span x-data="{ email: 'support' }" x-text="email+'@tracking.my'">loading...</span>
                            </p>
                            <p class="text-muted">(No assistance of tracking)</p>
                        </div>
                    </div>
                </div>

                <div class="where-my-package mb-4">
                    <form x-data="googleForm()" @submit.prevent="passForm">
                        <div class="row align-items-center">
                            <div class="col col-12 col-md-6 mb-4">
                                <img data-src="https://mytrackcdn.com/images/contact_form.png.webp"
                                    class="img-fluid lazyload">
                            </div>
                            <div class="col col-12 col-md-6">
                                <div class="row">
                                    <h1 class="mb-5 text-center">
                                        Contact
                                        <span class="text-primary">Form<span>
                                    </h1>
                                    <div class="form-group col-md-4 pb-3">
                                        <input type="text" class="form-control" x-model="name" id="name"
                                            placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-md-4 pb-3">
                                        <input type="email" class="form-control" x-model="email" name="email"
                                            id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-4 pb-3">
                                        <input type="text" class="form-control" x-model="contact" name="contact"
                                            id="contact" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-md-12 pb-3">
                                        <select x-model="equiry" x-ref="equiry" name="equiry" id="equiry"
                                            class="form-select" required>
                                            <option disabled selected value>-- Choose a type --</option>
                                            <option value="Problem Feedback">Problem Feedback
                                            </option>
                                            <option value="Business Cooperation">
                                                Business Cooperation</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 pb-3 bg-transparent">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Submit</button>
                                        <p class="mt-2 text-muted text-center">
                                            <small>Clicking the &quot;Submit&quot; button will redirect to the full
                                                form</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
