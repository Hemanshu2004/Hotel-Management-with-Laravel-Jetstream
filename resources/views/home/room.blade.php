<div class="our_room">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text-center">
                    <h2>Our Rooms</h2>
                    <p>Welcome to Keto's! Enjoy your stay in our comfortable and modern rooms.</p>
                </div>
            </div>
        </div>


        <style>

         .our_room {
    padding: 50px 0;
}

.titlepage h2 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
}

.titlepage p {
    font-size: 16px;
    color: #555;
}

.room-card {
    border: 2px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    background-color: #fff;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.room-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.room-img-wrapper {
    width: 100%;
    height: 200px;
    overflow: hidden;
    position: relative;
}

.room-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.room-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: rgba(0, 123, 255, 0.9); /* Bootstrap primary blue with opacity */
    color: #fff;
    padding: 5px 10px;
    font-size: 12px;
    font-weight: bold;
    border-radius: 4px;
    text-transform: uppercase;
}

.room-content {
    text-align: center;
    padding: 15px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.room-title {
    font-size: 20px;
    margin-bottom: 10px;
}

.room-description {
    font-size: 14px;
    color: #555;
    margin-bottom: 15px;
}

        </style>

        <!-- Rooms Grid -->
        <div class="row">
            @foreach($room as $rooms)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="room-card shadow-sm">
                    <div class="room-img-wrapper position-relative">
                        <img class="room-img" src="/room/{{ $rooms->image }}" alt="{{ $rooms->room_title }}">
                        
                        {{-- Room Type Badge --}}
                        @if($rooms->room_type)
                        <span class="room-badge">{{ $rooms->room_type }}</span>
                        @endif
                    </div>

                    <div class="room-content">
                        <h3 class="room-title">{{ $rooms->room_title }}</h3>
                        <p class="room-description">{!! Str::limit($rooms->description, 50) !!}</p>
                        <a class="btn btn-success" href="{{ url('room_details', $rooms->id) }}">Room Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
