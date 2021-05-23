
<?php 



error_reporting(0);
define('CAPTCHA_SESSION_VAR','CAPTCHA');
class Noise_dot_captcha
{
    public $width='200';
    public $height='50';
    public $input='abcdefghijklmnopqrstu vw xyz ABCDEFGHIJKLMNOPQR 123456789';

   
     public function reset($k=NULL)
    {
        $_SESSION[CAPTCHA_SESSION_VAR] = NULL;
    }
    
     public function html($color='#333',$bg=NULL)
    {
         $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQR123456789';
            $security_code = substr(str_shuffle($permitted_chars), 0, 6);
               $_SESSION[Add_security]=$security_code;
            $width = 150;
            $height = 50;
            $image = ImageCreate($width, $height);
            $white = imagecolorallocate($image, 255, 255, 255);
            $black = imagecolorallocate($image, 0, 0, 0);
            $noise_color = imagecolorallocate($image, 100, 100, 180);
            $background_color = imagecolorallocate($image, 214, 234, 248);
            $text_color = imagecolorallocate($image, 20, 40, 100);
            

            ImageFill($image, 0, 0, $background_color);

              $noiceDots=0;


               if($noiceLines>0){
        $noiceColor=$this->hexToRGB($noiceColor);   
        $noiceColor = imagecolorallocate($im, $noiceColor['r'],$noiceColor['g'],$noiceColor['b']);
        for( $i=0; $i<$noiceLines; $i++ ) {             
            imageline($im, mt_rand(0,$imgWidth), mt_rand(0,$imgHeight),
            mt_rand(0,$imgWidth), mt_rand(0,$imgHeight), $noiceColor);
        }}  


            
            for ($i = 0; $i < ($width * $height) / 250; $i++) {
                imageline($image, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $noise_color);
            }
            $font = dirname(__FILE__).'/FFF_Tusj.ttf';/* font */
           
            // $font = dirname(__FILE__) . '/../../font/Lato-Bold.ttf';
            imagettftext($image, 25, 10, 10, 45, $black, $font, $security_code);
          

        ob_start();
        imagepng($image);
        $img64 = base64_encode(ob_get_clean());
        return '<img src="data:image/png;base64,'.$img64.'" />';
    }
    
   
    static public function RGB($rgb)
    {
        if(is_string($rgb))
        {
            $rgb = str_replace('#','',$rgb); // #123 => 123
            
            if(strlen($rgb)===3) // 123 => 112233
                $rgb = preg_replace('/^(.)(.)(.)$/','\\1\\1\\2\\2\\3\\3',$rgb);
            $r = hexdec(substr($rgb,0,2));
            $g = hexdec(substr($rgb,2,2));
            $b = hexdec(substr($rgb,4,2));
        }
        else
        {
            list($r, $g, $b) = $rgb;
            if($g==NULL || $b==NULL)
            {
                $r = $g = $b = $rgb;
            }
        }
        return array($r,$g,$b);
    }
}
?>


 


