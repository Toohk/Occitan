<?php

namespace App\Entity;

use App\Repository\PictureMenuRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PictureMenuRepository::class)
 * @Vich\Uploadable
 */
class PictureMenu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @Vich\UploadableField(mapping="products", fileNameProperty="picture")
     * @var File|null
     */
    private $pictureFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function setPictureFile(?File $image = null) 
    {
        $this->pictureFile = $image;
        return $this;
    }

    public function getPictureFile()
    {
        return $this->pictureFile;
    }
}
