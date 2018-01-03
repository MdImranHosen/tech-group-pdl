<?php 

/**
* Category Class..
*/
class Category{
    private $db;
    private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
     #Category Insert query and validation...
	public function categoryAdd($data){
         $category = $data['category'];

         $category = $this->fm->validation($category);
         $category = mysqli_real_escape_string($this->db->link, $category);

         if (empty($category)) {
         	$msg = '<div class="alert alert-warning" role="alert">
                  Field must not be Empty!
                 </div>';
           return $msg;
         }else{
         	$sql = "INSERT INTO category(category) VALUES('$category')";
         	$result = $this->db->insert($sql);
         	if ($result) {
         		$msg = '<div class="alert alert-success" role="alert">
                  Data Inserted Successfully!
                 </div>';
           return $msg;
         	}else{
         		$msg = '<div class="alert alert-danger" role="alert">
                  Data Not Inserted!
                 </div>';
           return $msg;
         	}
         }
	}
	  #Category Select query... 
	public function getCategoryData(){
		$sql = "SELECT * FROM category";
		$result = $this->db->select($sql);
		return $result;
	}
	#Category Delete query...
	public function getCategoryDelete($catId){
		$sql = "DELETE FROM category WHERE catId = '$catId'";
		$result = $this->db->delete($sql);
		if ($result) {
			$msg = '<div class="alert alert-success" role="alert">
			   Data Deleted Successfully!
			 </div>';
		   return $msg;
		}else{
			$msg = '<div class="alert alert-danger" role="alert" >
                 Data Not Deleted!
			</div>';
			return $msg;
		}
	}
	
}