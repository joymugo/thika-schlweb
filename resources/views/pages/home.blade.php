@extends('layouts.app')

@section('content')
    <section class="hero-section">

        <div class="hero-inner">

            {{-- Top: Text + Image Grid --}}
            <div class="hero-top">

                {{-- Left: Text Content --}}
                <div class="hero-text">
                    <div>
                        <p class="hero-eyebrow">Karibariri, Kiambu County — Est. Kenya</p>
                        <div class="hero-rule"></div>
                    </div>

                    <h1 class="hero-headline">
                        A Centre of <span class="hero-accent">Excellence</span> &amp; Character
                    </h1>

                    <p class="hero-subtext">
                        Ifanikishe Ndoto Yako — Realise Your Dream. Shaping tomorrow's leaders through holistic education.
                    </p>

                    <div class="hero-btns">
                        <a href="{{ route('about') }}" class="btn-primary">Explore the School</a>
                        <a href="{{ route('about') }}" class="btn-secondary">Watch Our Story</a>
                    </div>
                </div>

                {{-- Right: Photo Grid --}}
                <div class="hero-grid">

                    {{-- Large left card --}}
                    <div class="img-card img-card--tall">
                        <img src="{{ asset('images/bus.jpeg') }}" alt="Campus Life" loading="lazy">
                        <div class="img-overlay"></div>
                        <span class="img-label">Campus Life</span>
                    </div>

                    {{-- Right column: two stacked cards --}}
                    <div class="hero-grid-right">
                        <div class="img-card">
                            <img src="{{ asset('images/scout.jpeg') }}" alt="Scouts" loading="lazy">
                            <div class="img-overlay"></div>
                            <span class="img-label">Scouts</span>
                        </div>
                        <div class="img-card">
                            <img src="{{ asset('images/assembly.jpeg') }}" alt="Assembly" loading="lazy">
                            <div class="img-overlay"></div>
                            <span class="img-label">Assembly</span>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Bottom: Stats + Scroll button --}}
            <div class="hero-footer">
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-num">7</span>
                        <span class="stat-lbl">Core Values</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num">10+</span>
                        <span class="stat-lbl">Clubs &amp; Societies</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num">100%</span>
                        <span class="stat-lbl">Holistic Focus</span>
                    </div>
                </div>

                <button class="scroll-btn" aria-label="Scroll down">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" width="14" height="14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/>
                    </svg>
                </button>
            </div>

        </div>

    </section>

    <!-- START THEMES -->
    <section class="Page2">
        <div class="overlay__background">
            <h2 class="landing-title">A CENTER <br>OF EXCELLENCE<br></h2>
            <p class="landing-title">Caribbean Blues marching on.</p>

            <div class="container themes__container">
                <article class="theme">
                    <div class="theme__info">
                        <div class="theme__icon"><ion-icon name="receipt-outline"></ion-icon></div>
                        <a href="{{ url('school') }}"><h4>SCHOOL PRAYER</h4></a>
                        <div class="separator"></div>
                        <p>Our Father in heaven be glorified. For giving us the best school that we are proud of. We are committed to becoming the very best in all dimensions; the very best school in Kenya.</p>
                    </div>
                </article>

                <article class="theme">
                    <div class="theme__info">
                        <div class="theme__icon"><ion-icon name="flag-outline"></ion-icon></div>
                        <a href="{{ url('school') }}"><h4>SCHOOL ANTHEM</h4></a>
                        <div class="separator"></div>
                        <p>
                            Thika Girls Karibariri, a Centre of excellence;<br>
                            Thika Girls Karibariri, like soldiers marching on.<br>
                            We are marching on, never looking back;<br>
                            Let our school shine.
                        </p>
                    </div>
                </article>

                <article class="theme">
                    <div class="theme__info">
                        <div class="theme__icon"><ion-icon name="pencil-outline"></ion-icon></div>
                        <h4>OUR MISSION</h4>
                        <div class="separator"></div>
                        <p>To provide holistic education that will  equip the students with knowledge and skills relevant to the global trend and mold dynamic <b>leaders</b> of integrity.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END OF THEMES -->

    {{-- START OF CORE VALUES --}}
    <section class="core-values-section">
        <div class="overlay__background2">
            <div class="cv__inner">

                {{-- Section Header --}}
                <div class="cv__header">
                    <p class="cv__eyebrow">What We Stand For</p>
                    <h2 class="cv__heading">Our Core Values</h2>
                    <div class="cv__rule"></div>
                </div>

                {{-- Values Grid --}}
                <div class="values-grid">

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h3>Determination</h3>
                        <div class="cv__sep"></div>
                        <p>Revering God and living a life that honors Him.<br>
                            <small><em>(Proverbs 1:7)</em></small>
                        </p>
                    </div>

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h3>Diligence</h3>
                        <div class="cv__sep"></div>
                        <p>Upholding honesty, strong moral principles, and ethical behavior in all aspects of school life.<br>
                            <small><em>(Philippians 4:8–9)</em></small>
                        </p>
                    </div>

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h3>Transparency</h3>
                        <div class="cv__sep"></div>
                        <p>Collaborating effectively and harmoniously to achieve common goals.<br>
                            <small><em>(Amos 3:3)</em></small>
                        </p>
                    </div>

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                                <line x1="6" y1="1" x2="6" y2="4"/>
                                <line x1="10" y1="1" x2="10" y2="4"/>
                                <line x1="14" y1="1" x2="14" y2="4"/>
                            </svg>
                        </div>
                        <h3>Honesty</h3>
                        <div class="cv__sep"></div>
                        <p>Prioritizing truthfulness and uprightness in everything we do.<br>
                            <small><em>(Proverbs 12:22)</em></small>
                        </p>
                    </div>

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </div>
                        <h3>Humility</h3>
                        <div class="cv__sep"></div>
                        <p>Walking modestly and valuing others with a respectful heart.<br>
                            <small><em>(Philippians 2:3)</em></small>
                        </p>
                    </div>

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 11 12 14 22 4"/>
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
                            </svg>
                        </div>
                        <h3>Integrity</h3>
                        <div class="cv__sep"></div>
                        <p>Dedication to responsibilities, goals, and the values of the school community.<br>
                            <small><em>(Joshua 24:15)</em></small>
                        </p>
                    </div>

                    <div class="value-item">
                        <div class="value-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                        </div>
                        <h3>Respect for Diversity</h3>
                        <div class="cv__sep"></div>
                        <p>Embracing differences and treating every individual with dignity and equality.<br>
                            <small><em>(Galatians 3:28)</em></small>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- END OF CORE VALUES --}}

    {{-- START OF HISTORY SECTION --}}
    <section class="Page3">
        <div class="wwa__container">

            {{-- Left: Image --}}
            <div class="wwa__left">
                <div class="wwa__img-wrap">
                    <div class="wwa__img-frame">
                        <img src="{{ asset('images/gate.jpeg') }}" alt="School Gate">
                    </div>
                    <span class="wwa__badge">Est. Kiambu County</span>
                </div>
            </div>

            {{-- Right: Text --}}
            <div class="wwa__right">
                <span class="wwa__pill">Who We Are</span>

                <h2 class="wwa__heading">
                    A School Built<br>
                    by <span class="wwa__accent">Community</span> Spirit
                </h2>

                <div class="wwa__rule"></div>

                <p class="wwa__body">
                    Thika Girls Karibariri was conceived by visionary elders responding to the
                    community's desire for quality education. Founders offered their support in a
                    rare spirit of selflessness to fulfill registration requirements and create an
                    environment of academic empowerment.
                </p>

                <ul class="wwa__list">
                    <li>
                    <span class="wwa__check" aria-hidden="true">
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="2,6 5,9 10,3"/>
                        </svg>
                    </span>
                        National curriculum with holistic co-curricular activities
                    </li>
                    <li>
                    <span class="wwa__check" aria-hidden="true">
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="2,6 5,9 10,3"/>
                        </svg>
                    </span>
                        Faith-centered environment with strong moral grounding
                    </li>
                    <li>
                    <span class="wwa__check" aria-hidden="true">
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="2,6 5,9 10,3"/>
                        </svg>
                    </span>
                        Community-founded, purpose-driven leadership
                    </li>
                    <li>
                    <span class="wwa__check" aria-hidden="true">
                        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="2,6 5,9 10,3"/>
                        </svg>
                    </span>
                        Active clubs, scouts, and St. John's Ambulance
                    </li>
                </ul>

                <a href="{{ url('about') }}" class="wwa__btn">Learn More About Us</a>
            </div>

        </div>
    </section>
    <!-- END OF PAGE3 -->

    {{-- START OF CLUBS --}}
    <section class="Page4">
        <div class="overlay__clubs">
            <div class="clubs__inner">

                <div class="clubs__header">
                    <p class="clubs__eyebrow">Beyond the Classroom</p>
                    <h2 class="clubs__heading">Clubs &amp; Societies</h2>
                    <p class="clubs__sub">Non-academic activities that students are involved in</p>
                </div>

                <div class="container clubs__container">

                    {{-- Wildlife Club --}}
                    <article class="clubs">
                        <div class="clubs__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </div>
                        <h3>Wildlife Club</h3>
                        <div class="separator2"></div>
                        <p>Explore and appreciate the natural world, learn about conservation efforts, and participate in activities that promote environmental awareness.</p>
                    </article>

                    {{-- Scouts Club --}}
                    <article class="clubs">
                        <div class="clubs__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                        </div>
                        <h3>Scouts Club</h3>
                        <div class="separator2"></div>
                        <p>Members learn practical skills, participate in community service projects, and develop a strong connection to nature to become responsible citizens.</p>
                    </article>

                    {{-- St. John's Ambulance --}}
                    <article class="clubs">
                        <div class="clubs__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                        </div>
                        <h3>St. John's Ambulance</h3>
                        <div class="separator2"></div>
                        <p>Students learn essential first aid skills, emergency response techniques, and develop a sense of civic responsibility through targeted emergency training.</p>
                    </article>

                </div>

                {{-- Footer: teaser + CTA --}}
                <div class="clubs__footer">
                    <p class="clubs__footer-text">
                        Discover more ways students grow beyond academics through our full range of clubs and societies.
                    </p>
                    <a href="{{ url('clubs') }}" class="clubs__btn">
                        All Clubs &amp; Societies
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                             width="14" height="14">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>
    {{-- END OF CLUBS --}}

    {{-- Motto Banner --}}
    <section class="Page5">
        <div class="motto">
            <div class="motto__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
            </div>
            <h2>A Center of Excellence</h2>
        </div>
    </section>

@endsection
