<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 * @Vich\Uploadable
 */
class Event
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $menu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureDesc;

    /**
     * @Vich\UploadableField(mapping="products", fileNameProperty="picture")
     * @var File|null
     */
    private $pictureFile;

    /**
     * @Vich\UploadableField(mapping="products", fileNameProperty="menu")
     * @var File|null
     */
    private $menuFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
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

    public function getPictureDesc(): ?string
    {
        return $this->pictureDesc;
    }

    public function setPictureDesc(string $pictureDesc): self
    {
        $this->pictureDesc = $pictureDesc;

        return $this;
    }

    public function getMenu(): ?string
    {
        return $this->menu;
    }

    public function setMenu(?string $menu): self
    {
        $this->menu = $menu;

        return $this;
    }

    public function setMenuFile(?File $image = null) 
    {
        $this->menuFile = $image;
        return $this;
    }

    public function getMenuFile()
    {
        return $this->menuFile;
    }
}
