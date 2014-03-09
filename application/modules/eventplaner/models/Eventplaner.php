<?php
/**
 * @copyright Balthazar3k
 * @package eventplaner
 */

namespace Eventplaner\Models;

defined('ACCESS') or die('no direct access');

class Eventplaner extends \Ilch\Model
{

    protected $_id;
    protected $_status;
    protected $_start;
    protected $_ends;
    protected $_organizer;
	protected $_title;
	protected $_event;
	protected $_message;
	protected $_created;
	protected $_changed;
	//protected $_;

	
    public function getId()
    {
        return $this->_id;
    }

    public function getStatus()
    {
        return $this->_Status;
    }

    public function getStart()
    {
        return $this->_start;
    }
	
	public function getEnds()
    {
        return $this->_ends;
    }

    public function getOrganizer()
    {
        return $this->_organizer;
    }

    public function getTitle()
    {
        return $this->_title;
    }
	
	public function getEvent()
    {
        return $this->_event;
    }
	
	public function getMessage()
    {
        return $this->_message;
    }
	
	public function getCreated()
    {
        return $this->_created;
    }
	
	public function getChanged()
    {
        return $this->_changed;
    }

	## SETTER #################################### 

    public function setId($id)
    {
        $this->_id = (integer)$id;
    }

	public function setStatus($res)
    {
		$this->_status = (integer)$res;
    }
	
	public function setStart($res)
    {
		$this->_start = (integer)$res;
    }
   
   	public function setEnds($res)
    {
		$this->_ends = (integer)$res;
    }
	
	public function setOrganizer($res)
    {
		$this->_organizer = (integer)$res;
    }
	
	public function setTitle($res)
    {
		$this->_title = (string)$res;
    }
	
	public function setEvent($res)
    {
		$this->_event = (string)$res;
    }
	
	public function setMessage($res)
    {
		$this->_message = (string)$res;
    }
	
	public function setCreated($res)
    {
		$this->_created = (integer)$res;
    }
	
	public function setChanged($res)
    {
		$this->_changed = (integer)$res;
    }
}
?>