<?php 
// membuat class biodata
 class Biodata{
 	// menyimpan data dalam array
 	public $data = [];
 	// ini nama
 	public function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
	}
	// ini umur
	public function umur($umur)
	{
		$this->data['age'] = $umur;
		return $this;
	}
 	// ini alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}
 	// ini hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	// ini menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	// ini sekolah
 	public function sekolah($sekolah = ArrayObject())
 	{
 		$this->data['list_school'] = $sekolah;
 		return $this;
 	}
 	// ini kemampuan
 	public function kemampuan($kemampuan = ArrayObject())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
	}
	public function MinatCoding($minat)
	{
		$this->data['interest_in_coding'] = $minat;
		return $this;	
	}
 	// ini konvert ke json
 	public function konjson(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 	
}
$biodata 	= new Biodata();
$nama		= "Achmad Dodhy Putrani Wido";
$umur		= "18";
$alamat		= "Jalan Kemauan 5 No.9/11 kel. Maccini Parang Kec. Makassar Kota Makassar Prov. Sulawesi Selatan";
$hobi 		= ['Bermain game','Videography'];
$sekolah	= [
				"highSchool" 	=> "SMA Negeri 16 Makassar",
			  ];
$kemampuan	= [
				"Web"		=> ['HTML','CSS','PHP'],
				"Media"		=> ['desain Graphic','VideoGrapher']
			  ];
print_r($biodata->nama($nama)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->MinatCoding(true)
				->konjson()
);
