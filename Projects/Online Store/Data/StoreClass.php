<?php

class Store {
    public static string $name = "Fashion Store";
    public static string $image = "<img src='./Images/phase 0.jpg' alt='Fashion Boy' width='300px' height='500px'>
                                <img src='./Images/phase 0.1.jpg' alt='Fashion Boy' width='300px' height='500px'>
                                <img src='./Images/phase 0.2.jpg' alt='Fashion Boy' width='300px' height='500px'>";
    public static string $description = "Dive into the world of fashion that speaks your language. At Fashion Store, we're all about fresh, bold, and trendsetting styles that capture the essence of Gen-Z. Our collections are curated to keep you ahead of the curve, blending streetwear vibes with chic aesthetics, perfect for expressing your unique identity.<br><br>Whether you're looking for the latest must-have pieces, sustainable fashion, or that one statement item to complete your look, we've got it all. Our store is your go-to for everything from casual cool to party-ready, making it easy to find what fits your vibe.";

    // public function __construct(string $name, string $description, string $image) {
    //     $this->name = $name;
    //     $this->description = $description;
    //     $this->image = $image;
    // }
    
    static function getName(){
        return self::$name;
    }
    static function getImages(){
        return self::$image;
    }
    static function getDescription(){
        return self::$description;
    }
}
