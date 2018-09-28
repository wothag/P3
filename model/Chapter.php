<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 14/12/2017
 * Time: 17:21
 */

class chapter
{
	protected $id;
	protected $title;
	protected $content;
	protected $date_created;
	protected $date_modified;

	public function __construct($donnees)
	{
		if (!empty($donnees))
		{
			return $this->hydrate($donnees);
		}
	}

	public function hydrate(array $donnees)
	{
		foreach ($donnees as $key=>$value)
		{
			$method = 'set' . ucfirst($key);
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

//getters

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getDatecreated()
	{
		return $this->date_created;
	}

	public function getDatemodified()
	{
		return $this->date_modified;
	}

//SETTERS

	/**
	 * @param mixed $id
	 */
	public function setId($id): void
	{
		$this->id = $id;
	}

	/**
	 * @param mixed $title
	 */
	public function setTitle($title): void
	{
		$this->title = $title;
	}

	/**
	 * @param mixed $content
	 */
	public function setContent($content): void
	{
		$this->content = $content;
	}

	/**
	 * @param mixed $date_created
	 */
	public function setDateCreated($date_created): void
	{
		$this->date_created = $date_created;
	}

	/**
	 * @param mixed $date_modified
	 */
	public function setDateModified($date_modified): void
	{
		$this->date_modified = $date_modified;
	}
}