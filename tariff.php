<?php

class SaveTariff {
    public  string $name;
    public  int $price;
    public  string $duration;
    public  int $speed;
    public  string $tariff;

    public function __construct(string $name, int $price, string $duration, int $speed, string $tariff) {
        $this->name = $name;
        $this->price = $price;
        $this->duration = $duration;
        $this->speed = $speed;
        if($tariff == "актуальный" || $tariff == "архивный" || $tariff == "системный" )$this->tariff = $tariff;
    }
}


