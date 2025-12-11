@extends('website.partials.layouts')
@section('content')
    <section class="heading">
        <div class="container" style="max-width: 768px;">
            <h1 class="career-title text-center">We Make Impact on Logistic</h1>
            <h5 class="text-center mb-5">As a workplace, we challenge and support you to sharpen your skills</h5>

            <div class="accordion accordion-careers" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed font-size-25" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Web Developer
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <h6>Responsibilities</h6>
                            <ul>
                                <li>Collaborating with other designers and developers</li>
                                <li>Improve our inhouse code base</li>
                                <li>Optimize codes for high volume transaction</li>
                                <li>Test and debug applications</li>
                                <li>Research on new technologies (a better and easier way to solve the same problem)</li>
                            </ul>

                            <h6 class="mt-4">Requirements</h6>
                            <ul>
                                <li>Able to code and interested in code</li>
                                <li>Love to solve problems with coding</li>
                                <li>Like to brainstorm for better solutions</li>
                                <li>Independent and result oriented</li>
                                <li>Required Skills:
                                    <b>HTML, CSS, JavaScript, VueJS, PHP, Laravel, MySQL, Flutter</b>
                                </li>
                                <li>Prefer who having good command of
                                    <b>Mandarin</b>
                                    and
                                    <b>English</b>
                                    language
                                </li>
                                <li>If you are looking for
                                    <b>internship</b>
                                    opportunities, you are also welcome!
                                </li>
                                <li>To succeed in this role, you must be passionate about technology and open to learning
                                    new things in a fast-paced environment</li>
                            </ul>
                            <p>Does this role sound like a good fit? Just drop your cv to us at <a href="#"
                                    x-data="{ email: 'careers' }" x-text="email+'@tracking.my'"
                                    @click.prevent="$clipboard(email+'@tracking.my'); $store.notifications.notify('Email copied')">loading...</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sales & marketing Executive
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <h6>Responsibilities</h6>
                            <ul>
                                <li>Assist in planning, executing and evaluating marketing campaigns</li>
                                <li>Engage and strengthen relationship with customers and partners</li>
                                <li>Build up brand awareness among blogging community</li>
                                <li>New business leads penetration and business opportunity evaluation</li>
                                <li>Do market research and competitor analysis</li>
                                <li>Handle and follow up sales enquiries</li>
                                <li>To achieve and maximise sales based on planned sales strategies</li>
                            </ul>

                            <h6 class="mt-4">Requirements</h6>
                            <ul>
                                <li>Candidate must possess either Diploma/Degree in Business Administration, Marketing,
                                    Advertising or any related qualification</li>
                                <li>Candidates with prior property
                                    <b>sales or digital marketing experience</b>
                                    are preferred
                                </li>
                                <li>Good communication and interpersonal skill</li>
                                <li>Creativity and problem solving skill</li>
                                <li>Self-motivated, committed and result-oriented</li>
                                <li>Prefer who having good command of written and spoken <b>English, Mandarin</b> and
                                    <b>Bahasa Malaysia</b>
                                </li>
                                <li>If you are looking for
                                    <b>internship</b> opportunities, you are also welcome!
                                </li>
                            </ul>
                            <p>Does this role sound like a good fit? Just drop your cv to us at <a href="#"
                                    x-data="{ email: 'careers' }" x-text="email+'@tracking.my'"
                                    @click.prevent="$clipboard(email+'@tracking.my'); $store.notifications.notify('Email copied')">loading...</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Customer Relationship Executive
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            <h6>Responsibilities</h6>
                            <ul>
                                <li>Communicating courteously with customers by telephone, email and live chat.</li>
                                <li>Solving customers’ problems, which may be complex or long-standing problems involving
                                    third parties in the process.</li>
                                <li>Resolves product or service problems by clarifying the customers’ complaint; determining
                                    the cause of the problem; selecting and explaining the best solution to solve the
                                    problem; expediting correction or adjustment; following up to ensure resolution.</li>
                                <li>Liaise with business partners and customers at the same time; not limiting to calls,
                                    emails and live chat, within the same period requiring multi-tasking skill.</li>
                            </ul>

                            <h6 class="mt-4">Requirements</h6>
                            <ul>
                                <li>Candidates must possess at least a STPM certificate.</li>
                                <li>Good oral presentation and written communication skills in English.</li>
                                <li>Required skill(s): Computer Knowledge, Internet Know How.</li>
                                <li>Required language(s): English and Bahasa Malaysia.</li>
                                <li>Candidates fluent in Mandarin preferred as the role requires candidates to deal with
                                    Mandarin speaking clients.</li>
                                <li>Passionate in helping / solving people’s problems and able to work under pressure.</li>
                                <li>Background on logistics and e-commerce is an added advantage.</li>
                                <li>Fresh graduates are welcome to apply.</li>
                            </ul>
                            <p>Does this role sound like a good fit? Just drop your cv to us at <a href="#"
                                    x-data="{ email: 'careers' }" x-text="email+'@tracking.my'"
                                    @click.prevent="$clipboard(email+'@tracking.my'); $store.notifications.notify('Email copied')">loading...</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Sales Executive
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            <h6>Responsibilities</h6>
                            <ul>
                                <li>Positive mindset, proactive & team player.</li>
                                <li>Develop relationships with potential and existing customers via emails and online
                                    community involvement.</li>
                                <li>New business leads penetration & business opportunity evaluation.</li>
                                <li>Actively get new customers and new sales.</li>
                                <li>Increase the yield per client.</li>
                                <li>Prepare quotations competently.</li>
                                <li>Process new orders proficiently.</li>
                                <li>Follow-up with the customers consistently.</li>
                                <li>Assist in any ad-hoc projects as assigned.</li>
                            </ul>

                            <h6 class="mt-4">Requirements</h6>
                            <ul>
                                <li>Candidates must possess at least a Primary/Secondary School/SPM/”O” Level, Professional
                                    Certificate, Diploma, Advanced/Higher/Graduate Diploma, any field.</li>
                                <li>Required skill(s): computer knowledge, internet know-how.</li>
                                <li>At least 1 year(s) of working experience in the related field is required for this
                                    position.</li>
                                <li>A can-do attitude is a must</li>
                                <li>He/she has good communication skills, is persuasive and pleasant</li>
                                <li>Ability to develop marketing strategy and networking</li>
                                <li>Basic plus high commission</li>
                                <li>Fresh graduates interested to work in sales environment are encouraged to apply</li>
                                <li>Preferably Junior Executives specializing in Sales – Corporate or equivalent</li>
                            </ul>
                            <p>Does this role sound like a good fit? Just drop your cv to us at <a href="#"
                                    x-data="{ email: 'careers' }" x-text="email+'@tracking.my'"
                                    @click.prevent="$clipboard(email+'@tracking.my'); $store.notifications.notify('Email copied')">loading...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="content">
                <div class="row align-items-center mb-4">
                    <div class="col col-12 col-md-6">
                        <img data-src="https://mytrackcdn.com/images/careers/careers1.jpg.webp" class="img-fluid lazyload">
                    </div>
                    <div class="col col-12 col-md-6 ">
                        <h4 class="mt-3">We work hard! We play hard!</h4>
                        <p class="text-justify">Since our inception in 2016, Tracking.my has become Malaysia&#039;s leading
                            one-stop courier tracking platform. We have grown to become the largest shipment tracking
                            platform in Malaysia, with millions of Malaysians using our platform to track their shipments.
                        </p>

                        <p class="text-justify">At Tracking.my, we believe in growing together, having fun, and striving to
                            reach our goals. We are passionate about nurturing our employees&#039; talents and helping them
                            progress individually and as a company. Whether you have a strong interest and passion for the
                            industry or you&#039;re looking to learn and grow digitally, Tracking.my is the perfect home for
                            you. We provide an environment where your potential and talents can shine, and we welcome your
                            contribution to our team.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col col-12 col-md-6 order-md-2">
                        <img data-src="https://mytrackcdn.com/images/careers/careers2.jpg.webp" class="img-fluid lazyload">
                    </div>
                    <div class="col col-12 col-md-6">
                        <h4 class="mt-3">GROW your career with <img data-src="https://mytrackcdn.com/images/logo.png.webp"
                                class="lazyload" style="height:33px;"></h4>
                        <p class="text-justify">At Tracking.my, we are a rapidly growing company that values nurturing and
                            grooming our team to achieve their career dreams. We are constantly seeking exceptionally
                            talented and passionate individuals to join our family. If you are passionate, hardworking,
                            driven, and looking to advance your career, Tracking.my is the perfect place for your potential
                            to thrive.</p>
                        <p class="text-justify">Our team at Tracking.my is composed of fearless thinkers and goal achievers
                            who strive to offer the best and be at the top. We work in a modern and creative office
                            environment that is both fun and relaxing. You can enjoy our comfortable office space as well as
                            our designated fun zone during breaks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-3">
                <h1>WHAT IS SO ATTRACTIVE?</h1>
                <h3>Forget about the traditional “Law of Working”</h3>
            </div>
            <div class="content">
                <div class="row careers-attractive">
                    <div class="col col-6 col-md-4">
                        <img data-src="https://mytrackcdn.com/images/careers/game.png.webp" class="lazyload">
                        <h5>Gaming Centre</h5>
                        <p>We believe in &quot;Work Hard, Play Hard.&quot; Our fun room has the latest gadgets, like Meta
                            Quest VR, Nintendo Switch, and billiards, for employees to de-stress and unwind during breaks.
                        </p>
                    </div>
                    <div class="col col-6 col-md-4">
                        <img data-src="https://mytrackcdn.com/images/careers/movie.png.webp" class="lazyload">
                        <h5>65 inch SMART TV</h5>
                        <p>Our trendy SMART TV in the fun room lets you connect your mobile, play 3D games, watch your
                            favorite 3D movies, and comment on social media with ease.</p>
                    </div>
                    <div class="col col-6 col-md-4">
                        <img data-src="https://mytrackcdn.com/images/careers/monitor.png.webp" class="lazyload">
                        <h5>Dual View Monitors</h5>
                        <p>Boost your productivity with our dedicated laptop and 24-inch monitor for better viewing and
                            greater enjoyment at work.</p>
                    </div>
                    <div class="col col-6 col-md-4">
                        <img data-src="https://mytrackcdn.com/images/careers/cafe.png.webp" class="lazyload">
                        <h5>Indoor Cafe</h5>
                        <p>Come and meet new friends and colleagues at our indoor cafe, where you can laugh, drink, and
                            recharge before heading to a busy day.</p>
                    </div>
                    <div class="col col-6 col-md-4">
                        <img data-src="https://mytrackcdn.com/images/careers/gym.png.webp" class="lazyload">
                        <h5>Indoor Gym</h5>
                        <p>Our indoor gym allows you to stay fit while avoiding traffic jams after work. Recharge and relax
                            after a long day at work.</p>
                    </div>
                    <div class="col col-6 col-md-4">
                        <img data-src="https://mytrackcdn.com/images/careers/island.png.webp" class="lazyload">
                        <h5>Team Building</h5>
                        <p>Our annual team-building activities in locations such as Pulau Redang promote teamwork and
                            personal growth while enjoying fun adventures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h1>Our Moments</h1>
                <h5>We work hard and play hard. We enjoy great food and cherish our time together.</h5>
            </div>
            <div class="content">
                <div class="row g-2">
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/1.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/2.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/3.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/4.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/5.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/6.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/7.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/8.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/9.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/10.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/11.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/12.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/13.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/14.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/15.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/16.jpg.webp"
                            class="img-fluid lazyload">
                    </div>

                    <div class="col col-6 col-md-3 col-xl-2 d-md-none d-xl-block">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/17.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                    <div class="col col-6 col-md-3 col-xl-2 d-md-none d-xl-block">
                        <img data-src="https://mytrackcdn.com/images/careers/moments/18.jpg.webp"
                            class="img-fluid lazyload">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
