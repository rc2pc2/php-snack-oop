<?php

    class Wearable{
        public $material;

        function __construct(String $material){
            $this->material = $material;
        }
    }

    class Shoe extends Wearable{
        public $heel;

        function __construct(String $material, String $heel){
            parent::__construct($material);
            $this->heel = $heel;
        }
    }


    class Hat  extends Wearable{
        public $brim;

        function __construct(String $material, String $brim){
            parent::__construct($material);
            $this->brim = $brim;
        }
    }


    var_dump( new Wearable('textile'), new Shoe('ecoskin', 'metal'), new Hat('cotton', 'baseball'));


?>