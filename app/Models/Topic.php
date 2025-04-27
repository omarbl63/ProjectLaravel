<?php
// app/Models/Topic.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    // Define any properties or relationships for the Topic model
    protected $fillable = ['name', 'description', 'image', 'category', 'audio', 'video']; // Add audio and video to fillable
}
