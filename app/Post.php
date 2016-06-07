<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
 
    protected $table = 'tbl_posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','post_title','post_caption', 'post_description', 'user_id', 'created_at', 'updated_at'];

    protected static $userModel = 'User';

    public function users(){

    	 return $this->belongsTo(static::$userModel);
    }
 
}