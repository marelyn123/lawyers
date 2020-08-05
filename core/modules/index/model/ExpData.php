<?php
class ExpData {
	public static $tablename = "file";//nombre de la tabla nueva que vas a crear en la DB

	public function ExpData(){
		$this->name = "";
		$this->price_in = "";
		$this->price_out = "";
		$this->unit = "";
		$this->user_id = "";
		$this->presentation = "0";
		$this->created_at = "NOW()";
	}

	public function getCategory(){ return ExpData::getById($this->category_id);}

	//aqui creas de una ve para la ase datos
	//tal cual como los tenes en ->controlador ->html ->base datos
	//dudas!?
	//si tenes dudas me decis 
	public function add(){
		$sql = "insert into ".self::$tablename." (name,apellido,tel,description,is_public,user_id,created_at) ";
		$sql .= "value ($this->name,\"$this->apellido\",\"$this->tel\",\"$this->description\",$this->is_public,$this->user_id,NOW())";
		return Executor::doit($sql);
	}

	public function add_folder(){
		$sql = "insert into ".self::$tablename." (code,filename,description,is_folder,is_public,user_id,created_at) ";
		 $sql .= "value (\"$this->code\",\"$this->filename\",\"$this->description\",1,$this->is_public,$this->user_id,NOW())";
		return Executor::doit($sql);
	}


	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ExpData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set description=\"$this->description\",is_public=\"$this->is_public\" where id=$this->id";
		Executor::doit($sql);
	}

	public function del_category(){
		$sql = "update ".self::$tablename." set category_id=NULL where id=$this->id";
		Executor::doit($sql);
	}


	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ExpData());

	}

	public static function getByCode($id){
		$sql = "select * from ".self::$tablename." where code=\"$id\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ExpData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}


	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}


	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where barcode like '%$p%' or name like '%$p%' or id like '%$p%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}


	public static function getRootFoldersByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id and is_folder=1 and folder_id is NULL order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}

	public static function getQFoldersByUserId($user_id,$q){
		$sql = "select * from ".self::$tablename." where user_id=$user_id and is_folder=1 and folder_id is NULL and (filename like '%$q%' or description like '%$q%') order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}

	public static function getRootByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id and folder_id is NULL order by is_folder desc, filename asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}


	public static function getQRootByUserId($user_id,$q){
		$sql = "select * from ".self::$tablename." where user_id=$user_id and folder_id is NULL and (filename like '%$q%' or description like '%$q%') order by is_folder desc, filename asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}


	public static function getAllByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}


	public static function getAllByFolderId($folder_id){
		$sql = "select * from ".self::$tablename." where folder_id=$folder_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}

	public static function getQByFolderId($folder_id,$q){
		$sql = "select * from ".self::$tablename." where folder_id=$folder_id and  (filename like '%$q%' or description like '%$q%') order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}

	public static function getAllByCategoryId($category_id){
		$sql = "select * from ".self::$tablename." where category_id=$category_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ExpData());
	}







}

?>