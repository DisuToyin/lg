<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory; 
    use Illuminate\Database\Eloquent\Model;

    class Listing extends Model
    {
        use HasFactory;


        // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

        public function scopeFilter($query, array $filters){
           if($filters['tag'] ?? false){ //if there is a tag do whats in this block
                $query->where('tags', 'like', '%' . request('tag') . '%');
           }
           
           if($filters['search '] ?? false){ //if there is a tag do whats in this block
                $query->where('title', 'like', '%' . request('search') . '%') -> orWhere('tags', 'like', '%' . request('search') . '%');
            }
        }

        
    }