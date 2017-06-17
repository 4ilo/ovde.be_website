<?php

namespace App;

use Parsedown;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ["titel", "body", "tag_id"];
    
    /**
     * Get the markdown body parsed to html
     * @return string
     */
    public function getHtmlInhoud()
    {
        // We laten de user toe om markdown als input te geven, dus zetten we dit om
        $parsedown = new Parsedown();
        return $parsedown->setBreaksEnabled(true)->text($this->body);
    }
    
    /**
     * Tag relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }
    
    /**
     * Get solutions based on tag id
     * @param $tagId
     * @return mixed
     */
    static public function getByTag($tagId)
    {
        return Solution::where('tag_id', $tagId)
                       ->orderBy("titel");
    }
}
