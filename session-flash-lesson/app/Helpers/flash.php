<?php

function flash($message, $level = 'info'){
	session()->flash('alert_message', $message);
	session()->flash('alert_class', $level);
}