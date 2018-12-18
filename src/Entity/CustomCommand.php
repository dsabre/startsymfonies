<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomCommandRepository")
 */
class CustomCommand{
	
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $label;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $command;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Symfony", inversedBy="customCommands")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $symfony;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $onPreStart;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $onPostStop;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $onGitPull;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $onComposerInstall;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $onCacheAssetsReset;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $weightOnPreStart;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $weightOnPostStop;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $weightOnGitPull;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $weightOnComposerInstall;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	private $weightOnCacheAssetsReset;
	
	/**
	 * run when writing data to inaccessible members.
	 *
	 * @param $name  string
	 * @param $value mixed
	 *
	 * @return void
	 * @link http://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.members
	 */
	public function __set($name, $value){
		$this->{$name} = $value;
	}
	
	/**
	 * is utilized for reading data from inaccessible members.
	 *
	 * @param $name string
	 *
	 * @return mixed
	 * @link http://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.members
	 */
	public function __get($name){
		return $this->{$name};
	}
	
	public function getId(): ?int{
		return $this->id;
	}
	
	public function getLabel(): ?string{
		return $this->label;
	}
	
	public function setLabel(string $label): self{
		$this->label = $label;
		
		return $this;
	}
	
	public function getCommand(): ?string{
		return $this->command;
	}
	
	public function setCommand(string $command): self{
		$this->command = $command;
		
		return $this;
	}
	
	public function getSymfony(): ?Symfony{
		return $this->symfony;
	}
	
	public function setSymfony(?Symfony $symfony): self{
		$this->symfony = $symfony;
		
		return $this;
	}
	
	public function getOnPreStart(): ?bool{
		return $this->onPreStart;
	}
	
	public function setOnPreStart(?bool $onPreStart): self{
		$this->onPreStart = $onPreStart;
		
		return $this;
	}
	
	public function getOnPostStop(): ?bool{
		return $this->onPostStop;
	}
	
	public function setOnPostStop(?bool $onPostStop): self{
		$this->onPostStop = $onPostStop;
		
		return $this;
	}
	
	public function getOnGitPull(): ?bool{
		return $this->onGitPull;
	}
	
	public function setOnGitPull(?bool $onGitPull): self{
		$this->onGitPull = $onGitPull;
		
		return $this;
	}
	
	public function getOnComposerInstall(): ?bool{
		return $this->onComposerInstall;
	}
	
	public function setOnComposerInstall(?bool $onComposerInstall): self{
		$this->onComposerInstall = $onComposerInstall;
		
		return $this;
	}
	
	public function getOnCacheAssetsReset(): ?bool{
		return $this->onCacheAssetsReset;
	}
	
	public function setOnCacheAssetsReset(?bool $onCacheAssetsReset): self{
		$this->onCacheAssetsReset = $onCacheAssetsReset;
		
		return $this;
	}
	
	public function getWeightOnPreStart(): ?int{
		return $this->weightOnPreStart;
	}
	
	public function setWeightOnPreStart(int $weightOnPreStart): self{
		$this->weightOnPreStart = $weightOnPreStart;
		
		return $this;
	}
	
	public function getWeightOnPostStop(): ?int{
		return $this->weightOnPostStop;
	}
	
	public function setWeightOnPostStop(int $weightOnPostStop): self{
		$this->weightOnPostStop = $weightOnPostStop;
		
		return $this;
	}
	
	public function getWeightOnGitPull(): ?int{
		return $this->weightOnGitPull;
	}
	
	public function setWeightOnGitPull(int $weightOnGitPull): self{
		$this->weightOnGitPull = $weightOnGitPull;
		
		return $this;
	}
	
	public function getWeightOnComposerInstall(): ?int{
		return $this->weightOnComposerInstall;
	}
	
	public function setWeightOnComposerInstall(int $weightOnComposerInstall): self{
		$this->weightOnComposerInstall = $weightOnComposerInstall;
		
		return $this;
	}
	
	public function getWeightOnCacheAssetsReset(): ?int{
		return $this->weightOnCacheAssetsReset;
	}
	
	public function setWeightOnCacheAssetsReset(int $weightOnCacheAssetsReset): self{
		$this->weightOnCacheAssetsReset = $weightOnCacheAssetsReset;
		
		return $this;
	}
	
	/**
	 * @return array
	 *
	 * @author Daniele Sabre 14/dic/2018
	 */
	public function toArray(){
		return get_object_vars($this);
	}
	
}
