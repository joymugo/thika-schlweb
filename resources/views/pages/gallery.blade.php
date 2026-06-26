@extends('layouts.app')

@push('styles')
    <style>
        /*****START OF GALLERY******/
        .gallery-container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #111;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .photo-item {
            overflow: hidden;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        .photo-item img {
            width: 100%;
            height: 160px;           /* uniform height for all photos */
            object-fit: cover;       /* crop neatly — no stretching */
            display: block;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }
        .photo-item img:hover {
            transform: scale(1.05);
        }

        /* ── LIGHTBOX BASIC STYLING ── */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85); /* Dark background layer */
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000; /* Stays above navbar layers */
        }

        /* Fixed: Targets the actual image container element smoothly */
        .lightbox-content {
            max-width: 85%;
            max-height: 85%;
            object-fit: contain; /* Keeps original proportions perfectly */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.4);
        }

        .lightbox-close {
            color: #ffffff;
            position: absolute;
            top: 25px;
            right: 35px;
            font-size: 42px;
            font-weight: 300;
            cursor: pointer;
            background: none;
            border: none;
            line-height: 1;
            transition: transform 0.2s ease, color 0.2s;
            z-index: 2001;
        }
        .lightbox-close:hover {
            color: #5BB8D4; /* School Sky Blue on hover */
            transform: scale(1.15);
        }

        /* ── TABS ── */
        .media-tabs {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 24px;
        }
        .tab-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 28px;
            border: 2px solid #111;
            background: transparent;
            color: #111;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 1px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .tab-btn ion-icon { font-size: 1.1rem; }
        .tab-btn.active,
        .tab-btn:hover {
            background: #111;
            color: #fff;
        }

        /* ── TAB PANELS ── */
        .tab-panel { display: none; }
        .tab-panel.active { display: block; }

        /* ── VIDEO GRID ── */
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
        }
    </style>
@endpush

@section('content')

    <section class="manage__section py-8 bg-slate-100 text-center">
        <div class="intro__manage">
            <h4 class="text-2xl font-bold tracking-wider text-slate-800">MEDIA GALLERY</h4>
        </div>
    </section>

    <div class="gallery-container my-8">

        {{-- ── TAB BUTTONS ── --}}
        <div class="media-tabs">
            <button class="tab-btn active" onclick="switchTab('photos', this)">
                <ion-icon name="images-outline"></ion-icon> PHOTOS
            </button>
            <button class="tab-btn" onclick="switchTab('videos', this)">
                <ion-icon name="videocam-outline"></ion-icon> VIDEOS
            </button>
        </div>

        {{-- ── PHOTOS TAB PANEL ── --}}
        <div id="tab-photos" class="tab-panel active">
            <div class="photo-grid">

                <div class="photo-item">
                    <img src="{{ asset('images/gate.jpeg') }}" alt="Event" onclick="openLightbox('{{ asset('images/gate.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/assembly.jpeg') }}" alt="School Event" onclick="openLightbox('{{ asset('images/assembly.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/boardingarea.jpeg') }}" alt="School Gathering" onclick="openLightbox('{{ asset('images/boardingarea.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/scout.jpeg') }}" alt="Aerial View" onclick="openLightbox('{{ asset('images/scout.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/bus.jpeg') }}" alt="School Bus" onclick="openLightbox('{{ asset('images/bus.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/class1.jpeg') }}" alt="Classroom" onclick="openLightbox('{{ asset('images/class1.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/halloffame.jpeg') }}" alt="Sports" onclick="openLightbox('{{ asset('images/halloffame.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/office.jpeg') }}" alt="Administration Office" onclick="openLightbox('{{ asset('images/office.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/office2.jpeg') }}" alt="Team Layout" onclick="openLightbox('{{ asset('images/office2.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/parking.jpeg') }}" alt="Parking Layout Area" onclick="openLightbox('{{ asset('images/parking.jpeg') }}')">
                </div>
                <div class="photo-item">
                    <img src="{{ asset('images/school1.jpeg') }}" alt="School Building Front" onclick="openLightbox('{{ asset('images/school1.jpeg') }}')">
                </div>

            </div>
        </div>

        {{-- ── VIDEOS TAB PANEL ── --}}
        <div id="tab-videos" class="tab-panel">
            <div class="video-grid p-8 text-center text-slate-500">
                <p>No videos uploaded yet.</p>
            </div>
        </div>

    </div> {{-- Fixed: Properly closes .gallery-container before lightbox modal element markup --}}

    {{-- ── PHOTO LIGHTBOX MODAL ── --}}
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <button class="lightbox-close" onclick="closeLightbox(); event.stopPropagation();">&times;</button>
        <img src="" id="lightbox-image" class="lightbox-content" alt="Enlarged gallery view">
    </div>

@endsection

@push('scripts')
    <script>
        // Force the function to register globally on the window object immediately
        window.openLightbox = function(imageSrc) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-image');

            if (lightbox && lightboxImg) {
                lightboxImg.src = imageSrc;
                lightbox.style.display = 'flex';
            } else {
                console.error("Lightbox elements were not found in the DOM.");
            }
        };

        window.closeLightbox = function() {
            const lightbox = document.getElementById('lightbox');
            if (lightbox) {
                lightbox.style.display = 'none';
            }
        };

        window.switchTab = function(name, btn) {
            document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

            const targetPanel = document.getElementById('tab-' + name);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
            if (btn) {
                btn.classList.add('active');
            }
        };

        // ESC key close safety trigger
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                window.closeLightbox();
            }
        });
    </script>
@endpush

