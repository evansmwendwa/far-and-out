<?php
namespace App\Traits;

use Symfony\Component\Validator\Constraints as Assert;
use App\Utils\Utility;

trait SlugTrait {

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get the value of Slug
     *
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of Slug
     *
     * @param mixed slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = Utility::slugify($slug);
        return $this;
    }

    /**
     * Set slug
     *
     * @ORM\PreUpdate
     * @ORM\PrePersist
     *
     * @return $this
     */
    public function setSlugDefault()
    {
        $this->slug = (empty($this->slug)) ? $this->title : $this->slug;
        $this->slug = Utility::slugify($this->slug);
        return $this;
    }
}
