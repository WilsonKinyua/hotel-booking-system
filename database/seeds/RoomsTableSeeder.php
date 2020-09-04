<?php

use Illuminate\Database\Seeder;
use App\Photo;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo1     = Photo::create(["file"=>"43.jpg"]);
        $photo2     = Photo::create(["file"=>"44.jpg"]);
        $photo3     = Photo::create(["file"=>"45.jpg"]);
        $photo4     = Photo::create(["file"=>"46.jpg"]);
        $photo5     = Photo::create(["file"=>"47.jpg"]);
       

        $room = Room::create([
            "photo_id" => $photo1->id,
            "name" => "Room view Sea",
            "cost" => "400",
            "size" => "30 ft",
            "bed" => "KIng beds",
            "services" => " Air Conditioning, Free drinks, Restaurant quality, Cable TV, Unlimited Wifi, Service 24/24",
            "capacity" => "Max persion 5",
            "body" => "If you live in New York City or travel to and from New York City a lot, you know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go. Mauris molestie lectus in irdiet auctor. Dictum purus at blandit molestie. Neque non fermentum suscipit. Donec id dui ac massa malesuada. In sit amet sapien quis orci maximus. Vestibulum rutrum diam vel eros tristique. Every time I hail a cab in New York City or wait for one at the airports, I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.",
        ]);

        $room1 = Room::create([
            "photo_id" => $photo2->id,
            "name" => "Premium King Room",
            "cost" => "600",
            "size" => "30 ft",
            "bed" => "KIng beds",
            "services" => " Air Conditioning, Free drinks, Restaurant quality, Cable TV, Unlimited Wifi, Service 24/24",
            "capacity" => "Max persion 5",
            "body" => "If you live in New York City or travel to and from New York City a lot, you know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go. Mauris molestie lectus in irdiet auctor. Dictum purus at blandit molestie. Neque non fermentum suscipit. Donec id dui ac massa malesuada. In sit amet sapien quis orci maximus. Vestibulum rutrum diam vel eros tristique. Every time I hail a cab in New York City or wait for one at the airports, I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.",
        ]);

        $room2 = Room::create([
            "photo_id" => $photo3->id,
            "name" => "Room Vip King",
            "cost" => "550",
            "size" => "30 ft",
            "bed" => "KIng beds",
            "services" => " Air Conditioning, Free drinks, Restaurant quality, Cable TV, Unlimited Wifi, Service 24/24",
            "capacity" => "Max persion 5",
            "body" => "If you live in New York City or travel to and from New York City a lot, you know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go. Mauris molestie lectus in irdiet auctor. Dictum purus at blandit molestie. Neque non fermentum suscipit. Donec id dui ac massa malesuada. In sit amet sapien quis orci maximus. Vestibulum rutrum diam vel eros tristique. Every time I hail a cab in New York City or wait for one at the airports, I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.",
        ]);

        $room3 = Room::create([
            "photo_id" => $photo4->id,
            "name" => "Royal Room",
            "cost" => "450",
            "size" => "30 ft",
            "bed" => "KIng beds",
            "services" => " Air Conditioning, Free drinks, Restaurant quality, Cable TV, Unlimited Wifi, Service 24/24",
            "capacity" => "Max persion 5",
            "body" => "If you live in New York City or travel to and from New York City a lot, you know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go. Mauris molestie lectus in irdiet auctor. Dictum purus at blandit molestie. Neque non fermentum suscipit. Donec id dui ac massa malesuada. In sit amet sapien quis orci maximus. Vestibulum rutrum diam vel eros tristique. Every time I hail a cab in New York City or wait for one at the airports, I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.",
        ]);

        $room4 = Room::create([
            "photo_id" => $photo5->id,
            "name" => "Small Room",
            "cost" => "300",
            "size" => "30 ft",
            "bed" => "KIng beds",
            "services" => " Air Conditioning, Free drinks, Restaurant quality, Cable TV, Unlimited Wifi, Service 24/24",
            "capacity" => "Max persion 5",
            "body" => "If you live in New York City or travel to and from New York City a lot, you know all about the traffic there. Getting places is often next to impossible, even with the gazillion yellow cabs. If you’re like me you often look with envy at those shiny limousines with their unformed drivers and wish you could sit in one. Well, you can. New York limo service is more affordable than you think, whether it’s for Newark airport transportation, LaGuardia airport transportation, or to drive wherever you wish to go. Mauris molestie lectus in irdiet auctor. Dictum purus at blandit molestie. Neque non fermentum suscipit. Donec id dui ac massa malesuada. In sit amet sapien quis orci maximus. Vestibulum rutrum diam vel eros tristique. Every time I hail a cab in New York City or wait for one at the airports, I hope I’ll be lucky enough to get one that’s halfway decent and that the driver actually speaks English. I have spent many anxious moments wondering if I ever get to my destination. Or whether I’d get ripped off. Even if all goes well, I can’t say I can remember many rides in New York cabs that were very pleasant. And given how much they cost by now, going with a limo makes ever more sense.",
        ]);
    }
}
