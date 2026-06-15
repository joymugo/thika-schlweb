@extends('layouts.app')

@section('title', 'Home | Thika High School Kibirir')

@section('content')

    {{-- Header section --}}
    <section class="bg-blue-900 text-white rounded-lg p-10 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-3">Thika High School Kibirir</h1>
        <p class="text-blue-100">A secondary school located in Thika, Kenya.</p>
    </section>

    {{-- Quick facts --}}
    <section class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
        @php
            $facts = [
                ['value' => '1,200', 'label' => 'Students'],
                ['value' => '60', 'label' => 'Teaching Staff'],
                ['value' => '1975', 'label' => 'Year Founded'],
                ['value' => 'Mixed', 'label' => 'School Type'],
            ];
        @endphp
        @foreach ($facts as $fact)
            <div class="bg-white rounded-lg shadow-sm p-4 text-center border border-blue-100">
                <div class="text-xl font-bold text-blue-900">{{ $fact['value'] }}</div>
                <div class="text-sm text-gray-500">{{ $fact['label'] }}</div>
            </div>
        @endforeach
    </section>

    {{-- About summary --}}
    <section class="py-12 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-2xl font-bold text-blue-900 mb-4">About the School</h2>
            <p class="text-gray-600 mb-4 leading-relaxed">
                Thika High School Kibirir offers secondary education following the Kenyan curriculum,
                with subjects spanning sciences, humanities, and languages. The school is staffed
                by qualified teachers and supports a range of co-curricular activities.
            </p>
            <a href="{{ route('about') }}" class="text-blue-800 font-semibold hover:underline">
                More about the school &rarr;
            </a>
        </div>
        <div class="bg-blue-100 rounded-lg h-56 flex items-center justify-center text-blue-400">
            School Photo
        </div>
    </section>

    {{-- Departments / sections --}}
    <section class="py-8">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">What's on this site</h2>
        <div class="grid md:grid-cols-3 gap-4">
            <a href="{{ route('academics') }}" class="block bg-white rounded-lg shadow-sm p-5 border border-blue-100 hover:border-blue-300 transition">
                <h3 class="font-semibold text-blue-900 mb-1">Academics</h3>
                <p class="text-sm text-gray-600">Subjects offered and curriculum information.</p>
            </a>
            <a href="{{ route('admissions') }}" class="block bg-white rounded-lg shadow-sm p-5 border border-blue-100 hover:border-blue-300 transition">
                <h3 class="font-semibold text-blue-900 mb-1">Admissions</h3>
                <p class="text-sm text-gray-600">How placement and enrollment work.</p>
            </a>
            <a href="{{ route('news') }}" class="block bg-white rounded-lg shadow-sm p-5 border border-blue-100 hover:border-blue-300 transition">
                <h3 class="font-semibold text-blue-900 mb-1">News & Events</h3>
                <p class="text-sm text-gray-600">Updates and announcements from the school.</p>
            </a>
        </div>
    </section>

    {{-- Contact strip --}}
    <section class="border-t border-blue-100 pt-8 text-center text-gray-600">
        <p>For inquiries, visit the <a href="{{ route('contact') }}" class="text-blue-800 font-semibold hover:underline">Contact page</a>.</p>
    </section>

@endsection
