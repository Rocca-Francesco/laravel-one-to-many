<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{   
    protected $fillable = ['title', 'lenguages', 'link'];
    use HasFactory;

    public static function generateSlug($title) {
        $possible_slug = Str::of($title)-slug('-');
        $projects = Project::where('slug', $possible_slug)->get();
        $original_slug = $possible_slug;
        $i = 2;

        while(count($projects)) {
            $possible_slug = $original_slug . '-' . $i;
            $projects = Project::where('slug', $possible_slug)->get();
            $i++;
        }

        return $possible_slug;
    }
}
