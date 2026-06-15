@extends('layouts.app')

@section('title', 'About | Thika High School Kibirir')

@section('content')
    <h1 class="text-3xl font-bold text-blue-900 mb-6">About Us</h1>

    <div class="space-y-4 text-gray-700">
        <p>
            Thika High School Kibirir is committed to providing quality education that nurtures
            academic excellence, strong character, and leadership skills in every student.
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-8">
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Our Mission</h2>
                <p>To provide holistic education that empowers students to excel academically, socially, and morally.</p>
            </div>
            <div class="bg-blue-50 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-blue-800 mb-2">Our Vision</h2>
                <p>To be a center of excellence producing disciplined, innovative, and globally competitive learners.</p>
            </div>
        </div>
    </div>
@endsection
