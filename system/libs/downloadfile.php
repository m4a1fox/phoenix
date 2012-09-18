<?php
/**
 * @author m4a1fox
 * @copyright 2012
 */

class DownloadFile extends Conf{
    private     $folder; // folder to download file
    public      $image; 
    private     $smallWH; // size of small image W - width, H- height
    private     $smallImageName; // small image name
    private     $NewFileName; // name of normal image
    private     $imageName; // connect ext & name
    private     $extension; // ext
    private     $error = array(); // error put on this array()
    
    /**
     * __construct take param 
     * $file - filename. Taken from $_FILES['input name="????"']
     * $folder - folder to download file
     * $smallWH - W - width, H- height
     */
    public function __construct(){}
    /**
     * initialize take param 
     * $file - filename. Taken from $_FILES['input name="????"']
     * $folder - folder to download file
     * $smallWH - W - width, H- height
     */
    function initialize($param = array()){
        if(count($param) > 0){
            foreach ($param as $key => $value) {
                $this->$key = $value;
            }
        }
        $this->extension = pathinfo($this->image['name'], PATHINFO_EXTENSION);
        $this->NewFileName = $this->RandomFileName();
        $this->imageName = $this->NewFileName.'.'.$this->extension;
        $this->smallImageName = $this->NewFileName.'_s.'.$this->extension;
    }
    
    /**
     * main method to move & create of copy file
     */
    
    public function MoveImage() {
       /**
        * check for error
        */ 
        if($this->CheckForError()){
            /**
             * default function of php - move upload file
             * @param tmp file
             * @param folder & name of image
             */
                move_uploaded_file($this->image['tmp_name'], $this->folder.$this->imageName);
                /**
                 * check file ext
                 */
                if(in_array($this->image['type'], $this->allowTypeImage)){
                    /**
                     * create a link to Resize class
                     * @param file
                     */
                    $this->resize = new Resize($this->folder.$this->imageName);
                    /**
                     * copy file.
                     * @param Width (from Conf class)
                     * @param Height (from Conf class)
                     * @param Some other option (from Conf class)
                     * @param Path to default file
                     * @param choose quality of the dcreaten file 
                     */
                    $this->MakeCopy($this->imageW, $this->imageH, $this->option, $this->folder.$this->imageName, $this->quality);
                    /**
                     * insert in array the path to big image
                     */
                    $ar['image'] = $this->folder.$this->imageName;
                    /**
                     * if in __construct() isset array() of width & height small image - create it
                     */
                    if(count($this->smallWH)){
                        $this->MakeCopy($this->smallWH[0], $this->smallWH[1], $this->option, $this->folder.$this->smallImageName, $this->quality);
                    /**
                     * insert in array the path to small image
                     */
                        $ar['small_image'] = $this->folder.$this->smallImageName;
                    }
                    /**
                     * return array with paths of big & small image
                     */
                    return $ar;
                }
                /**
                 * return path to big image
                 */
                return $this->folder.$this->imageName;
        }else{
            /**
             * else, return error
             */
            return $this->error;
        }
    }
    
    /**
     * function check for error
     * if error is - put the error in array()
     */
    private function CheckForError(){
        if(!is_uploaded_file($this->image['tmp_name'])){
            $this->error['file'] = 'You must load the file';
            return FALSE;
        }elseif(!in_array($this->image['type'], $this->allowTypeImage) && !in_array($this->image['type'], $this->allowTypeAudio)){
            $this->error['type'] = 'Uncorrect type image';
            return FALSE;
        }
        return TRUE;
    }  
    
    /**
     * function to copy file from tmp folder -> uor folder
     */
    private function MakeCopy($width, $height, $option, $folder, $quality){
        /**
         * take the function from the Resize class
         * @param width
         * @param height
         * @param option
         */
        $this->resize->resizeImage($width, $height, $option);
        /**
         * take the function from the Resize class
         * @param folder
         * @param quality
         */   
        $this->resize->saveImage($folder, $quality);
    }
    
    /**
     * if name file not on english, use method translate it
     */
    public function TranslitFileName()
	{
	$trans = array(
		"А"=>"a","Б"=>"b","В"=>"v","Г"=>"g",
        "Д"=>"d","Е"=>"e","Ж"=>"j","З"=>"z","И"=>"i",
        "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
        "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
        "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"ts","Ч"=>"ch",
        "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
        "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya", 
        " "=> "_", "/"=> "_"
		);
	  return strtr(pathinfo($this->image['name'], PATHINFO_FILENAME), $trans).time();
	}
    
    /**
     * random name of file
     */
    private function RandomFileName(){
        /**
         * var abc taken from the Conf class
         */
        return substr(str_shuffle($this->abc), 0, 10);
    }  
}