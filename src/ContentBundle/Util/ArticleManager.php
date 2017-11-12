<?php
namespace ContentBundle\Util;

use ContentBundle\Entity\Article;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\EntityManager;

/**
 * Article management
 *
 * [CREATE, UPDATE, GET, DELETE]
 */
class ArticleManager
{
    private $em;
    private $slugify;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->slugify = new Slugify();
    }

    /**
     * Create an article in database
     * @param  String $name
     * @param  String $cover       file path
     * @param  String $text
     * @param  Integer $category_id
     * @return void
     */
    public function create(
        $name,
        $cover,
        $text,
        $category_id
    ) {
        
        $article = new Article();
        $article->setText($text);
        $article->setName($name);
        $article->setCategoryId($category_id);
        $article->setCover($cover);
        $article->setSlug($this->slugify->slugify($name));

        $this->em->persist($article);
        $this->em->flush();
    }

    public function update($article)
    {
        $this->em->flush();
    }

    /**
     * Get an article from database
     * @param  Integer $id
     * @return Article|Article[]
     */
    public function get($id = NULL)
    {
        if($id){
        $ArticleMan = $this->em->getRepository(Article::class)->findOneById($id);
        }
        else{
        $ArticleMan = $this->em->getRepository(Article::class)->findAll();
        }
        return $ArticleMan;
    }

    /**
     * Get an article and delete it
     * @param  Integer $id
     * @return void
     */
    public function delete($id)
    {
        $ArticleMan = $this->em->getRepository(Article::class)->findOneById($id);
        $this->em->remove($ArticleMan);
        $this->em->flush();
    }
}
