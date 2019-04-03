<?php
    function getBelt($age)
    {
        if ($age >= 18) {
            return "green";
        } else {
            return    "pink";
        }
    }
