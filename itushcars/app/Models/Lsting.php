<?php
namespace App\Models;

class Listing {
  public static function all(){
    return [
      [
          'id' => 1,
          'title' => 'Listing One',
          'description' => "What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make"
      ],
      [
          'id' => 2,
          'title' => 'Listing Two',
          'description' => "What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make"
      ],

    ];
  }

  public static function find($id) {
    $listings = self::all();

    foreach($listings as $listing) {
      if($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}