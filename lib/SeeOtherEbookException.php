<?
class SeeOtherEbookException extends \Exception{
	public $Url;

	public function __construct($url = ''){
		$this->Url = $url;
		parent::__construct('This ebook is at a different URL: ' . $url);
	}
}
?>
