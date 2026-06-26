@extends('layouts.app')

@section('content')


    <section class="manage__section">
        <div class="intro__manage">
            <h4>The Management</h4>
        </div>
    </section>
    <!-----END OF TOP PAGE-->
    <section>
        <div class="manage__container">
            <div class="left-manage">
                <img src="{{ asset('images/halloffame.jpeg') }}" alt="School Management" class="left-image">
            </div>
            <div class="right-manage">
                <h1 class="main-heading">The School Management</h1>
                <p class="sub-heading">
                    The engine room of Thika Girls Karibariri is its School Administration, spearheaded
                    by the decisive leadership of Principal Rodah W. Kahindu. Charged with the vital task
                    of day-to-day management, they are the driving force behind a seamless and enriching
                    educational journey for our 1,383 girls. They include:
                </p>
                <div class="management-sections">

                    <div class="management-section">
                        <h2 class="section-title">The Board of Management</h2>
                        <p class="section-content">
                            Established under the Basic Education Act of 2013, the Board of Management (BOM)
                            holds primary responsibility for the management and development of the school.
                            The first BOM was inaugurated on 17th March 2017 and is chaired by
                            <strong>Eng. Henry Karanja</strong>. The BOM has overseen significant growth,
                            including the construction of 30 classrooms, a boardroom, and ICT/Home Science rooms.
                        </p>
                        <img src="{{ asset('images/bus.jpeg') }}" alt="Board of Management" class="section-image">
                    </div>

                    <div class="management-section">
                        <h2 class="section-title">The Parents Association</h2>
                        <p class="section-content">
                            The Parents Association plays a crucial role in ensuring the general welfare of
                            both staff and students within the school. Their ongoing support and partnership
                            with the administration has been instrumental in the school's growth since its
                            founding in 2015.
                        </p>
                        <img src="{{ asset('images/parking.jpeg') }}" alt="Parents Association" class="section-image">
                    </div>

                    <div class="management-section">
                        <h2 class="section-title">The School Administration</h2>
                        <p class="section-content">
                            Led by Principal <strong>Rodah W. Kahindu</strong>, the School Administration
                            forms the core operational team responsible for the day-to-day running of the school.
                            The school is served by 63 TSC teachers and 4 B.O.M-employed teachers, all dedicated
                            to providing the best possible experience for every student. The pioneer principal
                            was Anne W. Mukere (2015–2022), succeeded by Faith W. Mwarama (May 2022–2025).
                        </p>
                        <img src="{{ asset('images/class1.jpeg') }}" alt="School Administration" class="section-image">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!---END OF MANAGEMENT SECTION BODY-->
@endsection
