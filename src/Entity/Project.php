<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\BaseEntity;
use App\Traits\SlugTrait;
use App\Traits\ImageTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project extends BaseEntity
{
    use SlugTrait;

    use ImageTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
}
