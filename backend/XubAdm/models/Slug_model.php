<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slug_model extends CI_Model {

	protected $latin, $plain;
	protected $primary_key = 'id';

	public function __construct()
	{
		$this->latin = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'ç', 'ü', 'à', 'è', 'ì', 'ò', 'ù', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ç', 'Ü', 'À', 'È', 'Ì', 'Ò', 'Ù');
		$this->plain = array('a', 'e', 'i', 'o', 'u', 'n', 'c', 'u', 'a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'N', 'C', 'U', 'A', 'E', 'I', 'O', 'U');
		
	}
	public function slug($text) {
		$slug = str_replace($this->latin, $this->plain, $text);
		$slug = url_title($slug);
		$slug = strtolower($slug);
		return $slug;
	}

	public function slug_unique($text, $table, $column = 'slug') {
		$slug = $this->slug($text);
		$x = $this->_check_table($slug, $table, $column);
		if ( $x > 0) {
			$i=1;
			$new_slug = $slug.'-'.$i;
			while ($this->_check_table($new_slug, $table, $column) > 0) {
				$i++;
				$new_slug = $slug.'-'.$i;
			}
			return $new_slug;
		} else {
			return $slug;
		}

	}

	protected function _check_table($slug, $table, $column)
	{
		
		$this->db->where($column, $slug);
		$a = $this->db->get($table);

		return $a->num_rows();
	}

}