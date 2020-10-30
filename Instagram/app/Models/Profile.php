<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	use HasFactory;

	protected $guarded = [];

	public function profileImage()
    {
    	return $this->image ? '/storage/' . $this->image : 'https://www.publicdomainpictures.net/pictures/280000/nahled/not-found-image-15383864787lu.jpg';
    }

    public function followers()
    {
    	return $this->belongsToMany(User::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
