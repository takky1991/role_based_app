<?php

function flash($message, $type='info'){
    session()->flash($type, $message);
}