<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getCountBook()
	{
		$this->db->select('count(*) as count');
		$result = $this->db->get('book');
		$result = $result->result_array();
		return $result;
	}

	public function showDataBookByName($name='')
	{
		$this->db->select('book.*,author.Name as NameTG,kind.Name as NameTL,publisher.Name as NameNXB');
		$this->db->from('book');
		$this->db->like('upper(book.Name)', $name, 'BOTH');
		$this->db->join('author', 'author.ID = book.ID_Author');
		$this->db->join('kind', 'kind.ID = book.ID_Kind');
		$this->db->join('publisher', 'publisher.ID = book.ID_Publisher');
		$result = $this->db->get();
		$result =$result->result_array();
		return $result;
	}

	public function loadMoreBook($limit,$offset)
	{
		$this->db->select('book.*,author.Name as NameTG,kind.Name as NameTL,publisher.Name as NameNXB');
		$this->db->from('book');
		$this->db->join('author', 'author.ID = book.ID_Author');
		$this->db->join('kind', 'kind.ID = book.ID_Kind');
		$this->db->join('publisher', 'publisher.ID = book.ID_Publisher');
		$result = $this->db->get('',$limit,$offset);
		$result =$result->result_array();
		return $result;
	}

	public function showDataBook()
	{
		$this->db->select('book.*,author.Name as NameTG,kind.Name as NameTL,publisher.Name as NameNXB');
		$this->db->from('book');
		$this->db->join('author', 'author.ID = book.ID_Author');
		$this->db->join('kind', 'kind.ID = book.ID_Kind');
		$this->db->join('publisher', 'publisher.ID = book.ID_Publisher');
		$result = $this->db->get();
		$result =$result->result_array();
		return $result;
	}

	public function show6DataBook()
	{
		$this->db->select('book.*,author.Name as NameTG,kind.Name as NameTL,publisher.Name as NameNXB');
		$this->db->limit(6);
		$this->db->from('book');
		$this->db->join('author', 'author.ID = book.ID_Author');
		$this->db->join('kind', 'kind.ID = book.ID_Kind');
		$this->db->join('publisher', 'publisher.ID = book.ID_Publisher');
		$result = $this->db->get();
		$result =$result->result_array();
		return $result;
	}

	public function showDataAuthor()
	{
		$this->db->select('*');
		$this->db->from('author');
		$result = $this->db->get();
		$result = $result->result_array();
		return $result;
	}

	public function showDataPublisher()
	{
		$this->db->select('*');
		$this->db->from('publisher');
		$result = $this->db->get();
		$result = $result->result_array();
		return $result;
	}

	public function showDataKindBook()
	{
		$this->db->select('*');
		$this->db->from('kind');
		$result = $this->db->get();
		$result = $result->result_array();
		return $result;
	}

	public function detailBookByID($id)
	{
	$this->db->select('book.*,author.Name as NameTG,kind.Name as NameTL,publisher.Name as NameNXB');
		$this->db->from('book');
		$this->db->where('book.ID', $id);
		$this->db->join('author', 'author.ID = book.ID_Author');
		$this->db->join('kind', 'kind.ID = book.ID_Kind');
		$this->db->join('publisher', 'publisher.ID = book.ID_Publisher');
		$result = $this->db->get();
		$result =$result->result_array();
		return $result;
	}

	public function insertBook($Abook)
	{
		return $this->db->insert('book', $Abook);
	}

	public function deleteBook($id)
	{
		$this->db->where('ID', $id);
		return $this->db->delete('book');
	}

	public function updateBook($Abook,$id)
	{
		$this->db->where('ID', $id);
		return $this->db->update('book', $Abook);
	}

	public function getBookByKind($kind)
	{
		$this->db->select('book.*,author.Name as NameTG,kind.Name as NameTL,publisher.Name as NameNXB');
		$this->db->from('book');
		$this->db->join('author', 'author.ID = book.ID_Author');
		$this->db->join('kind', 'kind.ID = book.ID_Kind');
		$this->db->join('publisher', 'publisher.ID = book.ID_Publisher');
		$this->db->where('book.ID_Kind', $kind);
		$result = $this->db->get();
		$result =$result->result_array();
		return $result;
	}

}

/* End of file Book_model.php */
/* Location: ./application/models/Book_model.php */