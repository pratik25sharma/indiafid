<?php
include_once 'DbConfig.php';

class Crud extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
        public function getDataUTF($query)
	{		
                mysqli_set_charset($this->connection,"utf8");
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
        
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
	public function insertData($tablename,$data){
		if(!empty($data) && !empty($tablename)){
			$sql = 'INSERT INTO '.$tablename;
			$keys = '(';
			$values = '(';
			$comma = '';
			foreach($data as $key=>$dt){
				$keys .= $comma.$key;
				$dt = $this->escape_string($dt);
				if($dt != ''){
					$values .= $comma."'".$dt."'";
				}else{
					$values .= $comma. "NULL" ;
				}
				$comma = ', ';
			}
			$keys .= ')';
			$values .= ')';
			$sql .= $keys .' VALUES '. $values;
			if ($this->connection->query($sql) === TRUE) {
				return json_encode(array('status'=>true,'message'=>$this->connection->insert_id));	
			} else {
				return json_encode(array('status'=>false,'message'=>$this->connection->error));
			}
		}
	}
	public function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	public function generateRandonNumber($length = 6) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	public function getVenueTypes(){
		return array(
			'4_star_above_hotels' => '4 Star & Above Hotels',
			'banquet_hall' => 'Banquet Hall',
			'lawn_farmhouse' => 'Lawn / Farmhouse',
			'hotels' => 'Hotels',
			'country_golf_club' => 'Country / Golf Club',
			'resort' => 'Resort',
			'restaurant_lounge_bar' => 'Restaurant / Lounge Bar',
			'heritage_property' => 'Heritage property'
		);
	}
	public function getSpacePreferences(){
		return array(
			'indoor' => 'Indoor',
			'outdoor' => 'Outdoor',
			'indoor_with_outdoor' => 'Indoor with outdoor',
			'poolside' => 'Poolside',
			'terrace' => 'Terrace',
		);
	}
	public function getPhotographyServices(){
		return array(
			'photo_video' => 'Photo + Video',
			'photo_package' => 'Photo Package'
		);
	}
	public function getAirbrushOptions(){
		return array(
			'no' => 'Does Not Offer Airbrush',
			'yes' => 'Offers Airbrush'
		);
	}
	public function getBridalOutfitType(){
		return array(
			'bridal_lehenga' => 'Bridal Lehenga',
			'light_lehengas' => 'Light Lehengas',
			'gowns' => 'Gowns',
			'trousseau_anarkalis' => 'Trousseau Anarkalis',
			'trousseau_sarees' => 'Trousseau Sarees',
			'indo_westerns' => 'Indo westerns',
			'christian_wedding_gowns' => 'Christian wedding gowns'
		);
	}
	public function getStoreType(){
		return array(
			'retail_shop' => 'Retail Shop',
			'studio_boutique' => 'Studio / Boutique',
			'couture_brand' => 'Couture Brand',
			'multi_designer_studio' => 'Multi designer studio',
			'rental_store' => 'Rental Store'
		);
	}
	public function getGroomOutfitType(){
		return array(
			'sherwanis' => 'Sherwanis',
			'customised_suits_tuxes' => 'Customised Suits & Tuxes',
			'indo_western_outfits' => 'Indo Western Outfits',
			'Bandhgalas' => "Bandhgala&apos;s",
			'kurta_pyjama_sets' => 'Kurta Pyjama Sets',
			'waistcoats_and_nehru_jackets' => 'Waistcoats and Nehru Jackets',
			'groom_accessories' => 'Groom Accessories'
		);
	}
	public function getSpecialityOptions(){
		return array(
			'unboxed_invites' => 'Unboxed Invites',
			'boxed_invites' => 'Boxed Invites',
			'digital_E_cards' => 'Digital E- Cards'
		);
	}
	public function getJewelleryOptions(){
		return array(
			'semi_precious_jewellery' => 'Semi Precious Jewellery',
			'real_jewellery' => 'Real Jewellery',
			'floral_gota_jewellery' => 'Floral or Gota Jewellery'
		);
	}
	public function getCateringSpecialRequirementOptions(){
		return array(
			'jain_catering_only' => 'Jain Catering Only',
			'vegetarian_only' => 'Vegetarian Only',
			'chaat_street_food_only' => 'Chaat & Street Food Only',
			'small_size_gathering_only' => 'Small size gathering only',
			'drinks_only' => 'Drinks only'
		);
	}
	public function getAccessoryTypeOptions(){
		return array(
			'shoes' => 'Shoes',
			'clutches_and_bags' => 'Clutches and Bags',
			'tit_bits_for_mehendi_favors' => 'Tit bits for Mehendi Favors'
		);
	}
	public function getFavorTypeOptions(){
		return array(
			'chocolates' => 'Chocolates',
			'cookies_and_biscuits' => 'Cookies and Biscuits',
			'mithai' => 'Mithai',
			'flavored_tea' => 'Flavored Tea',
			'honey_jam_or_other_preserves' => 'Honey, Jam, or other preserves',
			'nuts' => 'Nuts',
			'cake_in_a_jar_cupcakes_etc' => 'Cake in a Jar, Cupcakes etc',
			'non_edible_gifts' => 'Non Edible Gifts',
			'mehendi_favors' => 'Mehendi Favors',
			'brownies' => 'Brownies',
			'candies' => 'Candies',
			'unique_gifting_solutions' => 'Unique Gifting Solutions'
		);
	}
	public function makeThumbnails($directory,$fullimg,$thumbnail_width,$thumbnail_height){
		$thumb_beforeword = "thumb";
		$arr_image_details = getimagesize("$directory"."$fullimg"); // pass id to thumb name
		$original_width = $arr_image_details[0];
		$original_height = $arr_image_details[1];
		if ($original_width > $original_height) {
			$new_width = $thumbnail_width;
			$new_height = intval($original_height * $new_width / $original_width);
		} else {
			$new_height = $thumbnail_height;
			$new_width = intval($original_width * $new_height / $original_height);
		}
		$dest_x = intval(($thumbnail_width - $new_width) / 2);
		$dest_y = intval(($thumbnail_height - $new_height) / 2);
		if ($arr_image_details[2] == IMAGETYPE_GIF) {
			$imgt = "ImageGIF";
			$imgcreatefrom = "ImageCreateFromGIF";
		}
		if ($arr_image_details[2] == IMAGETYPE_JPEG) {
			$imgt = "ImageJPEG";
			$imgcreatefrom = "ImageCreateFromJPEG";
		}
		if ($arr_image_details[2] == IMAGETYPE_PNG) {
			$imgt = "ImagePNG";
			$imgcreatefrom = "ImageCreateFromPNG";
		}
		if (isset($imgt) && !empty($imgt)) {
			$imagenameArr = explode('.', $fullimg);
			$extension = end($imagenameArr);
			array_pop($imagenameArr);
			$imageName = implode(".",$imagenameArr).'_'.$thumbnail_width.'x'.$thumbnail_height.'.'.$extension;
			$old_image = $imgcreatefrom("$directory"."$fullimg");
			$new_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
			imagecopyresized($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
			$imgt($new_image, "$directory"."$imageName");
		}
	}

}
?>
