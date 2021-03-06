<?php 
use Illuminate\Database\Seeder;
use App\Radio;

class RadioTableSeeder extends Seeder{
	public function run(){
		DB::table('radios')->delete();
		Radio::create([
			'id' => 'HgPcsQZMNbs4k7Jcwgd8YutTHaNeb91oEJiYtoK0', //This client_id is only valid for demo purpose
			'name' => 'Radio Proezas',
			'address' => 'Some address',
			'slogan' => 'En Cristo Podemos',
			'email' => 'info.momentodedios@gmail.com',
			'telephone' => '(999)-999-9999',
			'logo_url' => '2cdaf31.jpg',
			'youtube' => 'youtubeurl',
			'facebook' => 'facebookurl',
			'twitter' => 'twitterurl',
			'instagram' =>'instagramurl',
			'streaming_url' => 'streamurl'
 		]);
	}
}

?>