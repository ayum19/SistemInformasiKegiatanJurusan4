<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model {

	protected $primaryKey = 'id_proposal';
	
	public $timestamps = false;

	protected $table = 'proposal';

}
