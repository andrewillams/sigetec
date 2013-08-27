<?php
	
class GMensagens
{
	static function getNecessitoTraducao($event)
	{
		$text="";
		$text.= "Linguagem: {$event->language} <br>";
		$text.= "Categoria: {$event->category} <br>";
		$text.= "Mensagem:  {$event->message}  <br>";

		mail('ti@amaremansa.com','SIGeTec - GMM: Necessito de Tradução',$text);
	}
}