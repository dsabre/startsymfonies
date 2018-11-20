<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SymfonyRepository")
 */
class Symfony{
	
	const STATUS_ACTIVE = 1;
	const STATUS_STOPPED = 0;
	
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;
	
	/**
	 * @ORM\Column(type="text")
	 */
	private $path;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $version;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $phpExecutable;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $ip;
	
	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $port;
	
	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $starred;
	
	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $entryPoint;
	
	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $status;
	
	/**
	 * Symfony constructor.
	 */
	public function __construct(){
		$this->setStarred(false);
		$this->setStatus(Symfony::STATUS_STOPPED);
	}
	
	public function getId(): ?int{
		return $this->id;
	}
	
	public function getPath(): ?string{
		return $this->path;
	}
	
	public function setPath(string $path): self{
		$this->path = $path;
		
		return $this;
	}
	
	public function getVersion($returnMain = false){
		return !$returnMain ? $this->version : (int)$this->version[0];
	}
	
	public function setVersion(string $version): self{
		$this->version = $version;
		
		return $this;
	}
	
	public function getPhpExecutable(): ?string{
		return $this->phpExecutable;
	}
	
	public function setPhpExecutable(?string $phpExecutable): self{
		$this->phpExecutable = $phpExecutable;
		
		return $this;
	}
	
	public function getIp(): ?string{
		return $this->ip;
	}
	
	public function setIp(?string $ip): self{
		$this->ip = $ip;
		
		return $this;
	}
	
	public function getPort(): ?int{
		return $this->port;
	}
	
	public function setPort(?int $port): self{
		$this->port = $port;
		
		return $this;
	}
	
	public function getStarred(): ?bool{
		return $this->starred;
	}
	
	public function setStarred(?bool $starred): self{
		$this->starred = $starred;
		
		return $this;
	}
	
	public function getEntryPoint($jsonDecode = false){
		$ret = $this->entryPoint;
		
		if($ret && $jsonDecode){
			$ret = json_decode($ret);
		}
		
		return $ret;
	}
	
	public function setEntryPoint(?string $entryPoint): self{
		$this->entryPoint = $entryPoint;
		
		return $this;
	}
	
	public function getStatus(): ?int{
		return $this->status;
	}
	
	public function setStatus(?int $status): self{
		$this->status = $status;
		
		return $this;
	}
	
	/**
	 * Return if a symfony is in error or not
	 *
	 * @return bool
	 */
	public function isOk(){
		return !(bool)strstr($this->getVersion(), 'x.x');
	}
	
	/**
	 * @return array
	 */
	public function toArray(){
		return get_object_vars($this);
	}
}
