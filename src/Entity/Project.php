<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\BaseEntity;
use App\Utils\Utility;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Project extends BaseEntity
{
    use \App\Traits\SlugTrait;
    use \App\Traits\ImageTrait;
    use \App\Traits\ArticleTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $category;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $companyName;

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of Company Name
     *
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set the value of Company Name
     *
     * @param mixed companyName
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

}
