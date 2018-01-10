<?php namespace Simexis\Rapyd\Demo;

/**
 * ArticleDetail
 */
class ArticleDetail extends \Eloquent
{

    protected $table = 'demo_article_detail';
    public $timestamps = false;

    public function article()
    {
        return $this->belongsTo('Simexis\Rapyd\Models\Article', 'article_id');
    }

}
