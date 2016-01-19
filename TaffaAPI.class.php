<?php
// Business hours
// Mon-Thu
define('TAFAPI_MON_THU_OPEN_H', 10);
define('TAFAPI_MON_THU_OPEN_MIN', 30);
define('TAFAPI_MON_THU_CLOSE_H', 16);
define('TAFAPI_MON_THU_CLOSE_MIN', 0);
// Fri
define('TAFAPI_FRI_OPEN_H', 10);
define('TAFAPI_FRI_OPEN_MIN', 30);
define('TAFAPI_FRI_CLOSE_H', 15);
define('TAFAPI_FRI_CLOSE_MIN', 0);
// Sat-Sun
define('TAFAPI_SAT_SUN_OPEN_H', 0);
define('TAFAPI_SAT_SUN_OPEN_MIN', 0);
define('TAFAPI_SAT_SUN_CLOSE_H', 0);
define('TAFAPI_SAT_SUN_CLOSE_MIN', 0);

/**
 * taffaAPI is a class for easy access to the 
 * taffa API located at http://api.teknolog.fi/taffa/
 *
 * @author vonlatvala
 */
class taffaAPI
{
    public $langArr = Array('en' => 'en', 'fi' => 'fi', 'sv' => 'sv');
    private $curLang = 'sv';
    private $apiBaseURL = "http://api.teknolog.fi/taffa/";
    
    /**
     * Returns a ready-to-use TAFFA API Object
     * @param String $lang
     * @param String $opt
     */
    public function __construct($lang = null)
    {
        $this->setLang($lang);
    }
    
    /**
     * Sets the language
     * @param String $lang
     * @return boolean true on success, false on failure
     */
    public function setLang($lang = null)
    {
        if(array_search($lang, $this->langArr, false))
        {
            $this->curLang = $lang;
            return true;
        }
        else
        {
            return false;
        }
    }
    
    /**
     * Gets todays food.
     * @return string a HTML string of todays food
     */
    public function getToday()
    {
        return $this->get('html/0');
    }
    
    /**
     * Gets all foods from today +5 days
     * @return string a HTML string of the foods comming in the next five days.
     */
    public function getWeek()
    {
        return $this->get('html/week');
    }
    
    /**
     * Gets yesterdays food.
     * @return string a HTML string of yesterdays food
     * @todo Implement.
     */
    /*public function getYesterday()
    {
        // Not sure if the API supports it, if not, have to make it get by date
        return $this->get('html/-1');
    }*/
    
    /**
     * Gets the food that is served CURRENTLY at TF.
     * @return string a HTML string of current food
     */
    public function getAtTheMoment()
    {
        $i18n = Array
            (
                'fi' => 'Toistaiseksi ravintola ei tarjoile ruokaa!',
                'sv' => 'För tillfället serverar inte restaurangen mat!',
                'en' => 'The restaurant is not serving food at the moment!'
            );
        if (
                ((int)date('G') < TAFAPI_MON_THU_OPEN_H || (int)date('G') === TAFAPI_MON_THU_OPEN_H && (int)date('i') < TAFAPI_MON-THU_OPEN_MIN) // Pre 1030
                || (int)date('G') >= TAFAPI_MON_THU_CLOSE_H && (int)date('N') < 5 // Post 16 on mon-thu
                || (int)date('G') >= TAFAPI_FRI_CLOSE_H && (int)date('N') == 5 // Post 15 on fri
                || (int)date('N') >  5 // sat-sun
            )
        {
            return $i18n[$this->curLang];
        }
        return $this->getToday();
    }
    
    /**
     * Get the menu for the NEXT AVAILABLE serving, including today
     * @return string a HTML string of todays food, or tomorrows, depending
     * on if the restaurant has closed today.
     */
    public function getNextMenu()
    {
        if(
            (int)date('G') >= TAFAPI_MON_THU_CLOSE_H && (int)date('N') < 5 // Post 16 on mon-thu
            || (int)date('G') >= TAFAPI_FRI_CLOSE_H && (int)date('N') == 5 // Post 15 on fri
        )
            return $this->getTomorrow();
        else
            return $this->getToday ();
    }
    
    /**
     * Gets tomorrows food.
     * @return string a HTML string of tomorrows food
     */
    public function getTomorrow()
    {
        return $this->get('html/1');
    }
    
    /**
     * Gets day n:s food. n being an integer from 1-7 => 1 is Monday and 7 is
     * sunday.
     * @return string a HTML string of day n:s food
     */
    public function getDayN($reqN = null)
    {
        if(is_null($reqN))
            $reqN = date('N');
        /*
         * If we request a day N which is less than the current N (mon = 1,
         * tue = 2, wed = 3 ... sun = 7), we will request next weeks' meals
         */
        $n = $reqN;
        if($reqN < date('N'))
        {
            $diff = 7 - $reqN;
            $n = $diff + 7;
        }
        else
        {
            $diff = $reqN - date('N');
            $n = $diff;
        }
        return $this->get('html/'.$n);
    }
    
    /**
     * Gets the HTTP request code for a URL
     * @return int
     */
    private function getHttpRequestCode($url)
    {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }
    
    /**
     * Gets the requested URL appended to taffa's API, language is set
     * @return string
     */
    private function get($url)
    {
        $i18n = Array
            (
                'fi' => 'Tietoa ei saatavilla!',
                'sv' => 'Information ej tillgänglig!',
                'en' => 'Information unavailable!'
            );
        $urlToGet = $this->apiBaseURL . $this->curLang . "/" . $url;
        $httpResponseCode = $this->getHttpRequestCode($urlToGet);
        if(!in_array($httpResponseCode, Array(200, 301)))
        {
            return $i18n[$this->curLang];
        }
        $res = file_get_contents($urlToGet);
        return $res;
    }
    
    public function __toString()
    {
        
    }
    
    public function __destruct()
    {
        
    }
}
