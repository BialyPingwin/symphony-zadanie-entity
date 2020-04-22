<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JogurtyRepository")
 */
class Jogurty
{
    public function __construct($nazwa = "test")
    {
        $this->setNazwa($nazwa);

    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $nazwa;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $opis;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_waznosci;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_produkcji;

    /**
     * @ORM\Column(type="integer")
     */
    private $numer_partii;

    /**
     * @ORM\Column(type="float")
     */
    private $waga;

    /**
     * @ORM\Column(type="integer")
     */
    private $pojemnosc;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $nazwa_producenta;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ilosc_w_opakowaniu;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $data_dostawy;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $promocja;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(?string $opis): self
    {
        $this->opis = $opis;

        return $this;
    }

    public function getDataWaznosci(): ?\DateTimeInterface
    {
        return $this->data_waznosci;
    }

    public function setDataWaznosci(\DateTimeInterface $data_waznosci): self
    {
        $this->data_waznosci = $data_waznosci;

        return $this;
    }

    public function getDataProdukcji(): ?\DateTimeInterface
    {
        return $this->data_produkcji;
    }

    public function setDataProdukcji(\DateTimeInterface $data_produkcji): self
    {
        $this->data_produkcji = $data_produkcji;

        return $this;
    }

    public function getNumerPartii(): ?int
    {
        return $this->numer_partii;
    }

    public function setNumerPartii(int $numer_partii): self
    {
        $this->numer_partii = $numer_partii;

        return $this;
    }

    public function getWaga(): ?float
    {
        return $this->waga;
    }

    public function setWaga(float $waga): self
    {
        $this->waga = $waga;

        return $this;
    }

    public function getPojemnosc(): ?int
    {
        return $this->pojemnosc;
    }

    public function setPojemnosc(int $pojemnosc): self
    {
        $this->pojemnosc = $pojemnosc;

        return $this;
    }

    public function getNazwaProducenta(): ?string
    {
        return $this->nazwa_producenta;
    }

    public function setNazwaProducenta(string $nazwa_producenta): self
    {
        $this->nazwa_producenta = $nazwa_producenta;

        return $this;
    }

    public function getIloscWOpakowaniu(): ?int
    {
        return $this->ilosc_w_opakowaniu;
    }

    public function setIloscWOpakowaniu(?int $ilosc_w_opakowaniu): self
    {
        $this->ilosc_w_opakowaniu = $ilosc_w_opakowaniu;

        return $this;
    }

    public function getDataDostawy(): ?\DateTimeInterface
    {
        return $this->data_dostawy;
    }

    public function setDataDostawy(?\DateTimeInterface $data_dostawy): self
    {
        $this->data_dostawy = $data_dostawy;

        return $this;
    }

    public function getPromocja(): ?bool
    {
        return $this->promocja;
    }

    public function setPromocja(?bool $promocja): self
    {
        $this->promocja = $promocja;

        return $this;
    }
}
