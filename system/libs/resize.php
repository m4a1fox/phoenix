<?php

/**
 * Resize class image
 * @author admin
 * @copyright 2011
 */  
class Resize extends Conf{
    
    /**
    * @var $image 
    * @var $width
    * @var $height
    */
    
    public  $file;
    private $image;
    private $width;
    private $height;
    private $imageResized;
    public $watermark;
    public $watermarkWidth;
    public $watermarkHeight;
    
    public function __construct($fileName){
        $this->file = $fileName;
        // Open file
        $this->image = $this->openImage($fileName);
        // default parameters: width&height
        $this->width = imagesx($this->image);
        $this->height = imagesy($this->image);
        if($this->watermarDo){
            if(file_exists($this->watermarkFilePath)){
            $this->watermark = imagecreatefrompng($this->watermarkFilePath);
            $this->watermarkWidth = imagesx($this->watermark);
            $this->watermarkHeight = imagesy($this->watermark);
            }else{
                throw new Exception("Watermark doesn't exist");
            }
        }
        
    }
    
    private function openImage($file){
        $extension = strtolower(strrchr($file, '.'));
        
        switch($extension){
            case '.jpg':
            case '.jpeg':
                $image = @imagecreatefromjpeg($file);
            break;
            case '.gif':
                $image = @imagecreatefromgif($file);
            break;
            case '.png':
                $image = imagecreatefrompng($file);
            break;
            default:
                $image = false;
            break;
        }
        return $image;
    }
    
    public function watermarkPosition(){
        
        $x = array(10, $this->width/2, $this->width - $this->watermarkWidth - 10);
        $y = array(10, $this->height/2, $this->height - $this->watermarkHeight - 10);
        
        switch($this->watermarkPosition){
            case('top_center'):
                $posX = $x[1];
                $posY = $y[0];
                break;
            case('top_right'):
                $posX = $x[2];
                $posY = $y[0];
                break;
            case('middle_left'):
                $posX = $x[0];
                $posY = $y[1];
                break;
            case('middle_center'):
                $posX = $x[1];
                $posY = $y[1];
                break;
            case('middle_right'):
                $posX = $x[2];
                $posY = $y[1];
                break;
            case('bottom_left'):
                $posX = $x[0];
                $posY = $y[2];
                break;
            case('bottom_center'):
                $posX = $x[1];
                $posY = $y[2];
                break;
            case('bottom_right'):
                $posX = $x[2];
                $posY = $y[2];
                break;
            default :
                $posX = 10;
                $posY = 10;
        }
        return array('x'=>$posX, 'y'=>$posY);
    }
    
    
    
    public function resizeImage($newWidth, $newHeight, $option = 'auto'){
        if($this->watermarDo){
            $position = $this->watermarkPosition();
            imagecopy($this->image, $this->watermark, $position['x'], $position['y'], 0, 0, $this->watermarkWidth, $this->watermarkHeight);
        }
        $optionArray = $this->getDimension($newWidth, $newHeight, strtolower($option));
        
        $optimalWidth = $optionArray['optimalWidth'];
        $optimalHeight = $optionArray['optimalHeight'];
        
        $this->imageResized = imagecreatetruecolor($optimalWidth, $optimalHeight);
        imagecopyresampled($this->imageResized, $this->image, 0, 0, 0, 0, $optimalWidth, $optimalHeight, $this->width, $this->height);
        
        
        
        if($option == 'crop'){
            $this->crop($optimalWidth, $optimalHeight, $newWidth, $newHeight);
        }
    }
     
    private function getDimension($newWidth, $newHeight, $option){
        switch($option){
            case 'exact':
                $optimalWidth = $newWidth;
                $optimalHeight = $newHeight;
            break;
            case 'portrain':
                $optimalWidth = $this->getSizeByFixedHeight($newHeight);
                $optimalHeight = $newHeight;
            break;
            case 'landscape':
                $optimalWidth = $newWidth;
                $optimalHeight = $this->getSizeByFixedWidth($newWidth);
            break;
            case 'auto':
                $optionArray = $this->getSizeByAuto($newWidth, $newHeight);
                $optimalWidth = $optionArray['optimalWidth'];
                $optimalHeight = $optionArray['optimalHeight'];
            break;
            case 'crop' :
                $optionArray = $this->getOptimalCrop($newWidth, $newHeight);
                $optimalWidth = $optionArray['optimalWidth'];
                $optimalHeight = $optionArray['optimalHeight'];
        }
        return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
    }
    
    private function getSizeByFixedHeight($newHeight){
        $ration = $this->width/$this->height;
        $newWidth = $newHeight * $ration;
        return $newWidth;
    }
    
    private function getSizeByFixedWidth($newWidth){
        $ratio = $this->height / $this->width;
        $newHeight = $newWidth * $ratio;
        return $newHeight;
    }
    
    private function getSizeByAuto($newWidth, $newHeight){
        // Change image by width (landscape)
        if($this->height < $this->width){
            $optimalWidth = $newWidth;
            $optimalHeight = $this->getSizeByFixedWidth($newWidth);
        }elseif($this->height > $this->width){ // Image change by height (portrait)
            $optimalWidth = $this->getSizeByFixedHeight($newHeight);
            $optimalHeight = $newHeight;
        }else{ // Change image with the specificed values 
            if($newHeight < $newWidth){
                $optimalWidth = $newWidth;
                $optimalHeight = $this->getSizeByFixedWidth($newWidth);
            }elseif($newHeight > $newWidth){
                $optimalWidth = $this->getSizeByFixedHeight($newHeight);
                $optimalHeight = $newHeight;
            }else{
                $optimalWidth = $newWidth;
                $optimalHeight = $newHeight;
            }
        }
        return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
    }
    
    private function getOptimalCrop($newWidth, $newHeight){
        $widthRation = $this->width / $newWidth;
        $heightRation = $this->height / $newHeight;
      
        if($heightRation < $widthRation){
            $optimalRatio = $heightRation;
        }else{
            $optimalRatio = $widthRation;
        }
        
        $optimalWidth = $this->width / $optimalRatio;
        $optimalHeight = $this->height / $optimalRatio;
        
        return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
    }
    
    private function crop($optimalWidth, $optimalHeight, $newWidth, $newHeight){
        // Search of center image for resize
        $cropStartX = ($optimalWidth/2) - ($newWidth/2);
        $cropStartY = ($optimalHeight/2) - ($newHeight/2);
        
        $crop = $this->imageResized;
        
        // cut a piece of the specified image
        $this->imageResized = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($this->imageResized, $crop, 0, 0, $cropStartX, $cropStartX, $newWidth, $newHeight, $newWidth, $newHeight);
    }
    
    public function saveImage($savePath, $imageQulity = '100'){
        // Get extension
        $extension = strrchr($savePath, '.');
        $extension = strtolower($extension);

        switch($extension){
            case '.jpg':
            case '.jpeg':
                if(imagetypes() & IMG_JPG){
                    imagejpeg($this->imageResized, $savePath);
                }
            break;
            
            case '.gif':
                if(imagetypes() & IMG_GIF){
                    imagegif($this->imageResized, $savePath);
                }
            break;
            
            case '.png':
                // Quality rand 0-100 -> 0-9
                $scaleQuality = round(($imageQulity/100)*9);
                
                // Invert quality 0 -> best
                $invertScaleQuality = 9-$scaleQuality;
                
                if(imagetypes() & IMG_PNG){
                    imagepng($this->imageResized, $savePath, $invertScaleQuality);
                }
            break;
            
            default:
                break;
        }
        imagedestroy($this->imageResized);
    }  
 }
