<?php
namespace test;
require __DIR__ . '/vendor/autoload.php';
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DomCrawler\Crawler;

class Crawlers
{
    public function test()
    {
       // $client = new Client();

        $goutteClient = new Client();
        /*$guzzleClient = new GuzzleClient(array(
            'timeout' => 60,
        ));*/
       // $goutteClient->setClient($guzzleClient);
        $crawler = $goutteClient->request('GET', 'https://www.atmee.com/');

        $crawler->filter('')->each(function ( Crawler $node) {
            print $node->text()."\n";
        });

       //  print $crawler->filter('.price')->text();
        /* $datas = array();
         foreach ($crawler as $data){
             array_push($datas,$data);

         }*/
        return $crawler;
    }
}

$data = new Crawlers();

$data->test();
