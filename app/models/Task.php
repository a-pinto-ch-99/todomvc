<?php
class task extends \Eloquent {
  
  protected $fillable = array('title');
  
  protected $attributes = array('done'=> false);
}