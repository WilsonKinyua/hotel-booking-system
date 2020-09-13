@extends('layouts/home')

@section('title')
    <title>All Rooms Found in Star</title>
@endsection

@section('content')

    
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('assets/img/bg-img/16.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Room</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                  @if (isset($rooms))
                    @foreach ($rooms as $room)
                        <!-- Single Room Area -->
                        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Room Thumbnail -->
                            <div class="room-thumbnail">
                                <img style="width: 2000px; height: 400px" src="{{asset('assets/img/bg-img/' . $room->photo->file)}}" alt="">
                            </div>
                            <!-- Room Content -->
                            <div class="room-content">
                                <h2>{{ $room->name }}</h2>
                                <h4>{{ $room->cost }}$ <span>/ Day</span></h4>
                                <div class="room-feature">
                                    <h6>Size: <span>{{ $room->size }}</span></h6>
                                    <h6>Capacity: <span>{{ $room->capacity }}</span></h6>
                                    <h6>Bed: <span>{{ $room->beds }}</span></h6>
                                    <h6>Services: <span>Wifi, television ...</span></h6>
                                </div>
                                <a href="{{route('room.details',$room->id)}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    @endforeach
                  @else
                      <h2>No rooms available at the moment</h2>
                  @endif

                   
                    {{ $rooms->links() }}
                </div>


            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

    
@endsection