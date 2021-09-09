<?php

namespace App\Entity;

use App\Repository\AboutRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=AboutRepository::class)
 * @Vich\Uploadable
 */
class About
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $leftImg;

    /**
     * @Vich\UploadableField(mapping="products", fileNameProperty="leftImg")
     * @var File|null
     */
    private $leftImgFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $leftImgDesc;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rightImg;

    /**
     * @Vich\UploadableField(mapping="products", fileNameProperty="rightImg")
     * @var File|null
     */
    private $rightImgFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rightImgDesc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getLeftImg(): ?string
    {
        return $this->leftImg;
    }

    public function setLeftImg(?string $leftImg): self
    {
        $this->leftImg = $leftImg;

        return $this;
    }

    public function getRightImg(): ?string
    {
        return $this->rightImg;
    }

    public function setRightImg(?string $rightImg): self
    {
        $this->rightImg = $rightImg;

        return $this;
    }


    public function setLeftImgFile(?File $image = null) 
    {
        $this->leftImgFile = $image;
        return $this;
    }

    public function getLeftImgFile()
    {
        return $this->leftImgFile;
    }


    public function setRightImgFile(?File $image = null) 
    {
        $this->rightImgFile = $image;
        return $this;
    }

    public function getRightImgFile()
    {
        return $this->rightImgFile;
    }

    public function getLeftImgDesc(): ?string
    {
        return $this->leftImgDesc;
    }

    public function setLeftImgDesc(?string $leftImgDesc): self
    {
        $this->leftImgDesc = $leftImgDesc;

        return $this;
    }

    public function getRightImgDesc(): ?string
    {
        return $this->rightImgDesc;
    }

    public function setRightImgDesc(?string $rightImgDesc): self
    {
        $this->rightImgDesc = $rightImgDesc;

        return $this;
    }
}
