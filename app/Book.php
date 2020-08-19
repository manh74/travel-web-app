<?php

namespace App;


class Book 
{
    public $items=null;
    public $totalAdult=0;
    public $totalChild=0;
	public $totalPeople = 0;
	public $totalPrice=0;

	public static function restoreCart($oldBook)
	{
    $book = new static();

    if ($oldBook) {
        $book->items = $oldBook->items;
		$book->totalAdult= $oldBook->totalAdult;
		$book->totalChild= $oldBook->totalChild;
		$book->totalPeople= $oldBook->totalPeople;
        $book->totalPrice = $oldBook->totalPrice;
    }

    return $book;
}

    public function book($item, $id, $totalPeople=1, $totalA=1, $totalC=1){	
        						
		if($item->id_type == 3){						
			$dattour = ['totalA'=>0,'totalC'=>0,'totalPeople'=>0,'price' => $item->price!=1000000, 'item' => $item];					
			if($this->items){					
				if(array_key_exists($id, $this->items)){				
					$dattour = $this->items[$id];			
				}				
			}		
			$dattour['totalA'] = $dattour['totalA'] + $totalA;			
			$dattour['totalC'] = $dattour['totalC'] + $totalC;
			$dattour['totalPeople'] = $dattour['totalPeople'] + ($totalA + $totalC );						
			$dattour['price'] = $item->price * $dattour['totalPeople'];					
			$this->items[$id] = $dattour;					
            $this->totalAdult = $this->totalAdult + $totalA;	
            $this->totalChild = $this->totalChild + $totalC;	
            $this->totalPeople = $this->totalChild +  $this->totalAdult;	

			$this->totalPrice += $item->price * $dattour['totalPeople'];					
		}						
		else{						
			$dattour = ['totalPeople'=>0,'totalA'=>0,'totalC'=>0, 'price' => $item->price == 1000000, 'item' => $item];					
			if($this->items){					
				if(array_key_exists($id, $this->items)){				
					$dattour = $this->items[$id];			
				}				
			}					
			$dattour['totalA'] = $dattour['totalA'] + $totalA;			
			$dattour['totalC'] = $dattour['totalC'] + $totalC;
			$dattour['totalPeople'] = $dattour['totalPeople'] + ($totalA + $totalC );						
			$dattour['price'] = $item->price * $dattour['totalPeople'];					
			$this->items[$id] = $dattour;					
            $this->totalAdult = $this->totalAdult + $totalA;	
            $this->totalChild = $this->totalChild + $totalC;	
            $this->totalPeople = $this->totalChild +  $this->totalAdult;	

			$this->totalPrice += $item->price * $dattour['totalPeople'];									
		}						
								
	}							

}
