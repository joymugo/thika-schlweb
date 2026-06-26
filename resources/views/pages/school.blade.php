@extends('layouts.app')

@section('content')
    <section class="school__section">
        <div class="intro__school">
            <h4>The School</h4>
        </div>
    </section>

    <section class="prayer__theme">
        <div class="prayer__container">
            <div class="prayer__left">
                <div class="history__image">
                    <img src="{{ asset('images/cross.jpeg') }}" alt="School Cross">
                </div>
            </div>

            <div class="prayer__right">
                <h4>SCHOOL PRAYER</h4>
                <div class="line-separator"></div>
                <p>
                    Our Father in heaven be glorified.<br>
                    For giving us the best school that we are proud of.<br>
                    We are committed to becoming<br>
                    The very best in all dimensions;<br>
                    The very best school in Kenya.
                </p>
            </div>
        </div>
    </section>

    <section class="anthem__theme">
        <div class="anthem__school">
            <h4 class="be-inspired">Ifanikishe Ndoto Yako!</h4>
            <div class="separator4"></div>
            <h2 class="anthem-title">THE SCHOOL ANTHEM</h2>
            <div class="school__anthem">
                <div class="other-verses">
                    <p>
                        Thika Girls Karibariri, a Centre of Excellence;<br>
                        Thika Girls Karibariri, like soldiers marching on.<br>
                        We are marching on, never looking back;<br>
                        Let our school shine.
                    </p>
                    <p>
                        Thika Girls, we are striving for excellence,<br>
                        We gonna rise above the sky;<br>
                        With selflessness we're soaring high,<br>
                        Integrity, our personality,<br>
                        Is our mark of identity.
                    </p>
                    <p>
                        Our school is not a nest for rest,<br>
                        We truly believe in integrity.<br>
                        Our goals of right path in completeness;<br>
                        We believe in fear of the Lord,<br>
                        Integrity is the virtue of success.
                    </p>
                    <p>
                        Dynamic ladies of integrity,<br>
                        Equipped with knowledge and skill;<br>
                        Holistic education is our foundation,<br>
                        Thika Girls, a powerhouse in sports,<br>
                        A centre of excellence, we shine.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="school__culture">
        <div class="school-section">
            <div class="left-panel">
                <h2>Freshman Orientation</h2>
                <p>Every new student is oriented to the school through a guardian.<br>
                    The new student is guided to understand the history of the school,
                    its protocol, school tenets, and all that makes up
                    Thika Girls Karibariri Senior School.</p>
            </div>
            <div class="right-panel">
                <div class="panel-box">
                    <div class="icon"><ion-icon name="people-circle-outline"></ion-icon></div>
                    <h3>Staff</h3>
                    <p>The school boasts 63 TSC teachers and 4 B.O.M-employed teachers who dedicate
                        their time, skills, and experience to nurture our girls throughout
                        their four-year journey.</p>
                </div>
                <div class="panel-box">
                    <div class="icon"><ion-icon name="home-outline"></ion-icon></div>
                    <h3>School Culture</h3>
                    <p>Rooted in the motto <em>Ifanikishe Ndoto Yako</em>, our culture puts God first
                        and works as a family — cultivating dynamic ladies of integrity and making
                        excellence a daily habit.</p>
                </div>
                <div class="panel-box">
                    <div class="icon"><ion-icon name="receipt-outline"></ion-icon></div>
                    <h3>The Pathway</h3>
                    <p>From the first batch of 56 students in 2015 to a thriving community of 1,383 girls —
                        this is a brief layout of the journey every student takes from joining
                        to leaving Thika Girls Karibariri.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
