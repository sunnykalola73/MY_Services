<?php

function DistAB($lat_a,$lon_a,$lat_b,$lon_b)

      {
          $delta_lat = $lat_b - $lat_a ;
          $delta_lon = $lon_b - $lon_a ;

          $earth_radius = 6372.795477598;

          $alpha    = $delta_lat/2;
          $beta     = $delta_lon/2;
          $a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($lat_a)) * cos(deg2rad($lat_b)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
          $c        = asin(min(1, sqrt($a)));
          $distance = 2*$earth_radius * $c;
          $distance = round($distance, 4);

          return $distance;

      }

print(DistAB(22.6812,72.8795,23.0043,72.6216));

?>