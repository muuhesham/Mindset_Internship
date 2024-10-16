<?php

class Product {
    protected $products = [
        "phase1" => [
            [
                "title" =>"BLACK:FULL OUTFIT",
                "image" => "../Images/phase1.jpg",
                "price" => 3200,
            ],
            [
                "title" =>"BLACK:FULL OUTFIT",
                "image" => "../Images/phase1.1.jpg",
                "price" => 3200,
            ],
            [

                "title" =>"BLACK:FULL OUTFIT",
                "image" => "../Images/phase 1.2.jpg",
                "price" => 3200
            ]
        ],
        "phase2" => [
            [

                "title" =>"ORANGE&BLUE: FULL OUTFIT",
                "image" => "../Images/phase 2.jpg",
                "price" => 8000,
            ],
            [
                "title" => "ORANGE&BLUE: FULL OUTFIT",
                "image" => "../Images/phase 2.1.jpg",
                "price" => 8000
            ],
            [
                "title" => "ORANGE&BLUE: FULL OUTFIT",
                "image" => "../Images/phase 2.1.jpg",
                "price" => 8000
            ]
        ],
        "phase3" => [
            [
                "title" => "A5RSANA:T-SHIRT",
                "image" => "../Images/product 2.jpg",
                "price" => 1200,
            ],
            [

                "title" => "A5RSANA:T-SHIRT",
                "image" => "../Images/product 2.jpg",
                "price" => 1200
            ],
            [

                "title" => "A5RSANA:T-SHIRT",
                "image" => "../Images/product 2.jpg",
                "price" => 1200
            ]
        ],
    ];
    
    public function products_Phase1(){
        foreach ($this->products["phase1"] as $phase) {
                        echo "<div class='item'>";
                        echo "<img src='" . $phase['image'] . "' >";
                        echo "<div class='heart'>". "<img src='./Images/wheart.png' title='Add to Cart' >"
                            ."</div>";
                        echo "<div class='info'> Title: " . $phase['title'] . "<br> Price: " . $phase['price'] . "EGP </div>";
                        echo "</div>";
                }
    }
    public function products_phase2(){
        foreach ($this->products["phase2"] as $phase) {
                        echo "<div class='item'>";
                        echo "<img src='" . $phase['image'] . "' >";
                        echo "<div class='heart'>". "<img src='./Images/wheart.png' title='Add to Cart' >"
                            ."</div>";
                        echo "<div class='info'> Title: " . $phase['title'] . "<br> Price: " . $phase['price'] . "EGP </div>";
                        echo "</div>";
                }
    }
    public function products_phase3(){
        foreach ($this->products["phase3"] as $phase) {
                        echo "<div class='item'>";
                        echo "<img src='" . $phase['image'] . "' >";
                        echo "<div class='heart'>". "<img src='./Images/wheart.png' title='Add to Cart' >"
                            ."</div>";
                        echo "<div class='info'> Title: " . $phase['title'] . "<br> Price: " . $phase['price'] . "EGP </div>";
                        echo "</div>";
                }
    }
}

class NewProducts extends Product {
    protected $title;
    protected $image;
    protected $price;

    #methods to new products#

}