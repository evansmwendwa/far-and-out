<?php
namespace App\Traits;

use Symfony\Component\Validator\Constraints as Assert;

trait ArticleTrait {

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string
     */
    private $article;

    /**
     * Get the value of Image Name
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set the value of Image Name
     *
     * @param string imageName
     *
     * @return self
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

}
