<?php

namespace Builder\Components;

enum CarType: string
{
    case SEDAN  = "SEDAN";
    case SPORT  = "SPORT";
    case SUV    = "SUV";
    case PICKUP = "PICKUP";
    case TRUCK  = "TRUCK";
}