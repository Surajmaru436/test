<?php 
function db($table,$pk='id'){
    return new class($table,$pk) extends mysqli{
        private $table,$pk;
        public function __construct($table,$pk)
        {
            parent::__construct(HOSTNAME,USERNAME,PASSWORD,DB);
            $this->table=$table;
            $this->pk=$pk;
        }
        public function all(){

        }
        public function find(){

        }
        public function save($data,$id=null){
            $sql="insert into $this->table set ";
            $wh="";
            if($id){
                $sql="update $this->table set ";
                $wh=" where $this->pk=$id";
            }
            foreach($data as $colname=>$val){
                $sql.="$colname='". addslashes($val)."',";
            }
            $sql= substr($sql,0,-1).$wh;
            $this->query($sql);
            return $id??$this->insert_id;
        }
        public function delete(){

        }
        public function custom(){

        }
    };
}
