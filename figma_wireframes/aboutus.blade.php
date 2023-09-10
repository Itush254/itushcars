@extends('layouts.app') {{-- Assuming you have a master layout named 'app.blade.php' --}}

@section('content')
    <section class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <p>Welcome to our car hire service! We are passionate about providing affordable and reliable car rental solutions to our valued customers.</p>
                    <p>Our mission is to make your travel experience convenient and enjoyable by offering a wide range of vehicles, excellent customer service, and a commitment to your satisfaction.</p>
                    <p>At [Your Company Name], we take pride in our dedication to safety, sustainability, and delivering exceptional value to every customer.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/about-us-image.jpg') }}" alt="Our Team">
                </div>
            </div>
        </div>
    </section>
    
    <section class="meet-the-team">
        <div class="container">
            <h2>Meet the Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="{{ asset('images/team-member-1.jpg') }}" alt="Team Member 1">
                        <h3>John Doe</h3>
                        <p>Founder & CEO</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="{{ asset('images/team-member-2.jpg') }}" alt="Team Member 2">
                        <h3>Jane Smith</h3>
                        <p>Operations Manager</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="{{ asset('images/team-member-3.jpg') }}" alt="Team Member 3">
                        <h3>Michael Johnson</h3>
                        <p>Customer Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
