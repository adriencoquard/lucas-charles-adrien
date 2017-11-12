<?php
namespace ContentBundle\Util;

use ContentBundle\Entity\Category;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\EntityManager;

/**
 * Category management
 *
 * [CREATE, UPDATE, GET, DELETE]
 */
class CategoryManager
{
    private $em;
    private $slugify;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->slugify = new Slugify();
    }

    /**
     * Create a new category
     * @param  String $name
     * @param  Integer $parentId the ID of the parent category
     * @return void
     */
    public function create(
        $name,
        $parentId = NULL
    ) {
         
        $category = new Category();
        $category->setName($name);

        $category->setParentId($parentId);
        $category->setSlug($this->slugify->slugify($name));

        $this->em->persist($category);
        $this->em->flush();
    }

    public function update($category)
    {
        $this->em->flush();
    }

    /**
     * Get a category or all categories
     * @param  Integer $id
     * @return Category|Category[]
     */
    public function get($id = NULL)
    {
        if($id)
            $CategoryMan = $this->em->getRepository(Category::class)->findOneById($id);
        else
            $CategoryMan = $this->em->getRepository(Category::class)->findAll();
        return $CategoryMan;
    }

    /**
     * Delete a specific category
     *
     * @param integer $id
     * @return void
     */
    public function delete($id)
    {
        $CategoryMan = $this->em->getRepository(Category::class)->findOneById($id);
        $this->em->remove($CategoryMan);
        $this->em->flush();
    }
}
