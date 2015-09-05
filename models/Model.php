<?php

abstract class Model {

  /**
   * Instance dari kelas DB. Untuk mengakses data pada tabel.
   *
   * @var DB $db
   */
  protected $db;

  /**
   * Tabel database yang digunakan model ini.
   *
   * @var string
   */
  protected $table;

  /**
   * Set instance DB pada property $db.
   *
   * @return void
   */
  public function __construct()
  {
    $this->db = DB::getInstance();
  }

  /**
   * Mengambil record data tertentu, berdasarkan column id.
   *
   * @param integer $id
   * @return StdClass Object
   */
  public function find($id)
  {
      $this->db->get($this->table, ['id', '=', $id]);

      return $this->db->first();
  }

  /**
   * Mengambil semua data record.
   *
   * @return array
   */
  public function all()
  {
      $this->db->get($this->table);

      return $this->db->results();
  }

  /**
   * Membuat record baru.
   *
   * @return boolean
   */
  public function create($data = [])
  {
    try {
      $this->db->insert($this->table, $data);

      return true;
    } catch(Exception $e) {
      die($e->getMessage);
    }
  }

  /**
   * Memperbarui record tertentu.
   *
   * @return boolean
   */
  public function update($id, $data = [])
  {
    try {
      $this->db->update($this->table, $id,$data);

      return true;
    } catch(Exception $e) {
      die($e->getMessage);
    }
  }

  /**
   * Menghapus record tertentu berdasarkan column id.
   *
   * @return bool
   */
  public function delete($id)
  {
    try {
      $this->db->delete($this->table, ['id', '=', $id]);

      return true;
    } catch(Exception $e) {
      throw new Exception("Cannot delete record.");
    }
  }

}
