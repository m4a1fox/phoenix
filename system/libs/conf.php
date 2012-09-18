<?php
/**
 * @author m4a1fox
 * @date 10.03.2012 
 */

abstract class Conf{ 
    
    /**
     * 
     * @var int
     * @desc quality of download image file
     * @param $quality - Accepted values: 1-100
     * 
     */
    protected $quality = 100;
    
    /**
     * 
     * @var str
     * @desc what type of resize will be
     * Accepted values:
     *      auto - default ()
     * @TODO - write other needed option of changing size of file-image
     * 
     * 
     * 
     * @param $option
     * 
     */
    protected $option = 'auto';
    
    /**
     * 
     * @var int
     * @desc What width of original image will be
     * @param $imageW - Accepted values: all interger. default eq.700.
     * 
     */
    protected $imageW = 700;
    
    /**
     * 
     * @var type int
     * @desc What height of original image will be
     * @param $imageH - Accepted values: all interger. default eq.500.
     * 
     */
    protected $imageH = 500;
    
    /**
     * 
     * @var array
     * @desc What allowed type of image file can dowload on the server.
     * @param $allowTypeImage - Accepted values: array('image/jpeg', 'image/jpg', 'image/png', 'image/gif').
     * 
     */
    protected $allowTypeImage = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
    
    /**
     * 
     * @var array
     * @desc What allowed type of mp3 file can dowload on the server.
     * @param $allowTypeImage - Accepted values: array('audio/mpeg', 'audio/mp3').
     * 
     */
    protected $allowTypeAudio = array('audio/mpeg', 'audio/mp3');
    
    /**
     * 
     * @var str
     * @desc From what letter will be create name of download file
     * @param $abc - Accepted values: 'abcdefghijklmnopqrstuvwxyzABSCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'.
     * 
     */
    protected $abc = 'abcdefghijklmnopqrstuvwxyzABSCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    /**
     *
     * @var str
     * @desc path to the watermark file
     * @param  $watermarkFilePath - Accepted values: './file/watermark.png'.
     *  
     */
    protected $watermarkFilePath = './file/watermark.png';
    
    /**
     * 
     * @var bollean
     * @desc Switch watermark on the file
     * @param $watermarDo - Accepted values: TRUE || FALSE. default - TRUE 
     */
    protected $watermarDo = false;
        
    /**
     * 
     * @var str
     * @desc What watermark position will be on the file.
     * @desc Leave the var empty, and the value will be - default(left_top).
     * @param $watermarkPosition - Accepted values: top_left(default), top_center, top_right, middle_left, middle_center, middle_right, 
     * bottom_left, bottom_center, bottom_right.
     * 
     */
    protected $watermarkPosition = 'top_center';
    
    
    //////////////////////////////////////////////////////////////////////////////////////////
    //
    //      Pagination
    //
    //////////////////////////////////////////////////////////////////////////////////////////
    
}