<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model {

	protected $primaryKey = 'proposal';
	
	public $timestamps = false;

	protected $table = 'proposal';

}
