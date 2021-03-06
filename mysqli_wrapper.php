<?php
	define ('MYSQL_ASSOC', MYSQLI_ASSOC);
	define ('MYSQL_NUM', MYSQLI_NUM);
	define ('MYSQL_BOTH', MYSQLI_BOTH);
	$mysqli = null;
	function mysql_connect($a, $b, $c, $d = null) {
		global $mysqli;
		$mysqli = new mysqli($a, $b, $c, $d);
		return $mysqli;
	}
	function mysql_select_db($a, $db = null) {
		global $mysqli;
		return ($db?:$mysqli)->select_db($a);
	}
	function mysql_query($q, $db = null) {
		global $mysqli;
		return ($db?:$mysqli)->query($q);
	}
	function mysql_insert_id($db = null) {
		global $mysqli;
		return ($db?:$mysqli)->insert_id;
	}
	function mysql_fetch_array($r, $rt) {
		return $r->fetch_array($rt);
	}
	function mysql_numrows($r) {
		return $r->num_rows;
	}
	function mysql_num_rows($r) {
		return $r->num_rows;
	}
	function mysql_free_result($r) {
		return $r->free();
	}
	function mysql_close($db = null) {
		global $mysqli;
		return ($db?:$mysqli)->close();
	}
	function mysql_real_escape_string($s, $db = null) {
		global $mysqli;
		return ($db?:$mysqli)->real_escape_string($s);
	}
	function mysql_fetch_assoc($r) {
		return $r->fetch_assoc();
	}
	function mysql_fetch_row($r) {
		return $r->fetch_row();
	}
	function mysql_num_fields($r) {
		return $r->field_count;
	}
	function mysql_field_name($r, $offset) {
		return $r->fetch_field_direct($offset)->name;
	}
	function mysql_affected_rows($db = null) {
		global $mysqli;
		return ($db?:$mysqli)->affected_rows;
	}
	function mysql_error($db = null) {
		global $mysqli;
		return ($db?:$mysqli)->error;
	}
	function mysql_result($r, $row, $field = 0) {
		$r->field_seek($row);
		return $r->fetch_array()[$field];
	}
?>
