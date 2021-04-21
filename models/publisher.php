<?php

class publisher extends Model {

  static $publishers = [					
    ['id'=>1,'publisher'=>'John Wiley & Sons ','country'=>'United States',
     'founded'=>1807,'genere'=>'Academic','books__book_id'=>[1,2],
     'books__title'=>['Operating System Concepts','Database System Concepts']], 
     ['id'=>2,'publisher'=>'Pearson Education','country'=>'United Kingdom',
     'founded'=>1844,'genere'=>'Education','books__book_id'=>[3,4],
     'books__title'=>['Computer Networks','Modern Operating Systems']], 
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $publ)
      if ($publ['id'] == $id) return $publ;
    return [];
  }
}
?>