<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="gate-icon" href="{{ asset('images/gate.jpg') }}" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIKA GIRLS KARIBARIRI-Ifanikishe Ndoto Yako</title>
    <!--IONICONS-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-800 font-sans px-2">

<header>
    <nav>
        <div class="container nav__container">
            <a href="" class="nav__logo">
                <img src="./images/logo-school.png" alt="School Logo">
                <h4>THIKA GIRLS KARIBARIRI SENIOR SCHOOL</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="{{ url('/') }}"><b>HOME</b></a></li>
                <li><a href="{{ url('/about') }}"><b>ABOUT US</b></a></li>
                <li><a href="{{ url('/management') }}"><b>MANAGEMENT</b></a></li>
                <li><a href="{{ url('/school') }}"><b>THE SCHOOL</b></a></li>
                <li><a href="{{ url('/gallery') }}"><b>GALLERY</b></a></li>
                <li><a href="{{ url('/contact') }}"><b>CONTACT US</b></a></li>
            </ul>
            <button id="open-menu-btn"><ion-icon name="menu-outline"></ion-icon></button>
            <button id="close-menu-btn"><ion-icon name="close-outline"></ion-icon></button>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="bg-[#0D3B52] text-white/70 pt-16 pb-6 font-sans">
    <div style="max-width: 1200px; margin: 0 auto; padding: 48px 48px 0;">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-12 items-start">

            {{-- Col 1 --}}
            <div class="flex flex-col gap-4">
                <img src="{{ asset('images/logo-school.png') }}" alt="Logo" class="h-28 object-contain w-auto">
                <p class="text-sm leading-relaxed">
                    To provide a conducive environment and to offer quality, excellent and holistic education that motivates students to discover their talents and strive to reach their potential, thereby equipping them to fit well in society and contribute positively to Nation Building.
                </p>
            </div>

            {{-- Col 2 --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold text-xs tracking-widest uppercase">Contact Info</h4>
                <ul class="flex flex-col gap-3 text-sm">
                    <li class="flex items-start gap-3"><ion-icon name="location-outline" class="text-lg text-white shrink-0 mt-0.5"></ion-icon><span>P.O. Box 7649 - 01000, Thika</span></li>
                    <li class="flex items-start gap-3"><ion-icon name="call-outline" class="text-lg text-white shrink-0 mt-0.5"></ion-icon><span>+254 721 000000 / +254 733 000000</span></li>
                    <li class="flex items-start gap-3"><ion-icon name="mail-outline" class="text-lg text-white shrink-0 mt-0.5"></ion-icon><span>info@thikagirlskaribariri.sc.ke</span></li>
                    <li class="flex items-start gap-3"><ion-icon name="home-outline" class="text-lg text-white shrink-0 mt-0.5"></ion-icon><span>Karibariri, Kiambu County, Kenya</span></li>
                    <li class="flex items-start gap-3"><ion-icon name="time-outline" class="text-lg text-white shrink-0 mt-0.5"></ion-icon><span>Mon — Sat: 8AM — 5PM</span></li>
                </ul>
            </div>

            {{-- Col 3 --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold text-xs tracking-widest uppercase">Quick Links</h4>
                <ul class="flex flex-col gap-3 text-sm">
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="{{ route('about') }}" class="hover:text-white transition-colors">About Our School</a></li>
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="{{ route('gallery') }}" class="hover:text-white transition-colors">Media Gallery</a></li>
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="#" class="hover:text-white transition-colors">Academic Calendar</a></li>
                </ul>
            </div>

            {{-- Col 4 --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold text-xs tracking-widest uppercase">Information For</h4>
                <ul class="flex flex-col gap-3 text-sm">
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="#" class="hover:text-white transition-colors">Admissions &amp; Requirements</a></li>
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="#" class="hover:text-white transition-colors">Student Portal</a></li>
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="#" class="hover:text-white transition-colors">School News &amp; Notices</a></li>
                    <li class="flex items-center gap-2"><span class="text-white/50">•</span><a href="#" class="hover:text-white transition-colors">Parents Association</a></li>
                </ul>
            </div>

        </div>

        <div class="border-t border-white/15 pt-6 text-center text-sm text-white/60 tracking-wide">
            Copyright &copy; {{ date('Y') }} | Thika Girls Karibariri Senior School
        </div>
    </div>
</footer>
</body>
</html>
