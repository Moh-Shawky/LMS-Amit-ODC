<?php
namespace App\Models;

class listing{
    public static function all() {
        return [
            [
                'id' => 1,
                'title' =>'Listing One',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis architecto magnam accusamus amet ullam, atque iusto! Eum mollitia aliquid inventore in ipsam sed architecto reiciendis corporis distinctio, ad eveniet pariatur!'
            ],
            [
                'id' => 2,
                'title' =>'Listing Two',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis architecto magnam accusamus amet ullam, atque iusto! Eum mollitia aliquid inventore in ipsam sed architecto reiciendis corporis distinctio, ad eveniet pariatur!'
            ]
        ];
    }
    public static function find($id){
        $all_listings = self::all();
        foreach ($all_listings as $item){
            // dd($item);
            if ($item['id'] == $id){
                // dd($item);
                return $item;
            }
        }
    }
}

?>