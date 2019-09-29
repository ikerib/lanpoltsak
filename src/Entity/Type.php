<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeRepository")
 */
class Type
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Zerbait idatzi behar duzu")
     * @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = "Gutxienez {{ limit }} karaketere",
     *      maxMessage = "Gehienez {{ limit }} karaktere"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=3)
     * @Assert\NotBlank(message="Zerbait idatzi behar duzu")
     * @Assert\Length(
     *      min = 1,
     *      max = 3,
     *      minMessage = "Gutxienez {{ limit }} karaketere",
     *      maxMessage = "Gehienez {{ limit }} karaktere"
     * )
     */
    private $abbreviation;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=255, unique=true)
     */
    private $slug;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

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

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(string $abbreviation): self
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }
}
