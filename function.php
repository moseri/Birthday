<?php

function rightYear ($birthYear) {
    if ( $birthYear % 400 == 0 ) {
        echo( "<b>It is a leap year</b>" );
    } 
    else if ( $birthYear % 100 == 0 ) {
        echo( "<b>It is not a leap year</b>" );
    } 
    else if ( $birthYear % 4 == 0 ) {
        echo( "<b>It is a leap year</b>" );
    } 

        echo( "<b>It is not a leap year</b>" );
    
}

function exEmployee(){

}

function notWorkingEmployee(){

}

function nonEmployee(){

}