<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends \Stephenjude\FilamentBlog\Models\Post
{
    use HasFactory;

    public function scopeFilter($query, array $filters = []): void
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) => $query
            ->where(fn ($query) => $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%')));

        $query->when($filters['category'] ?? false, fn ($query, $category) => $query
            ->whereHas('category', fn ($query) => $query->where('slug', $category)));

        $query->when($filters['author'] ?? false, fn ($query, $author) => $query->whereHas('author', fn ($query) => $query->where('name', 'LIKE', '%' . $author . '%')));
    }

    public static function getRelatedPosts(Post $post, int $count = 4)
    {
        $relatedPosts = collect();
        $allPosts = Post::all();

        foreach($allPosts as $otherPost) {
            if($otherPost->id !== $post->id) {
                similar_text($otherPost->title, $post->title, $percent);

                if ($percent >= 5) {
                    $relatedPosts->push($otherPost);

                    if ($relatedPosts->count() == $count) {
                        return $relatedPosts->shuffle();
                    }
                }
            }
        }
        if ($relatedPosts->count() < $count){
            $sameCategoryPosts = Post::where('blog_category_id', 
            $post->blog_category_id)
            ->whereNot('id', $post->id)
            ->whereNotIn('id', $relatedPosts->pluck('id')->toArray())
            ->take($count-$relatedPosts->count())
            ->get();
            $relatedPosts = $relatedPosts->concat($sameCategoryPosts);
        }

        if($relatedPosts->count()<$count){
            $randomPosts = Post::whereNot('id', $post->id)
            ->whereNotIn('id', $relatedPosts->pluck('id')->toArray())    
            ->inRandomOrder()
            ->take($count - $relatedPosts->count())
            ->get();

            $relatedPosts = $relatedPosts->concat($randomPosts);
        }
        return $relatedPosts->shuffle();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected $perPage = 3; // Jumlah item per halaman

}
