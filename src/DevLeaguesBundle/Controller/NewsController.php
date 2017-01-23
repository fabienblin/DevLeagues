<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DevLeaguesBundle\Entity\News;

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news")
     */
    public function showReducedAction()
    {
		$news = new News();
		$news->setName('Breaking News');
		$news->setDate(new \DateTime());
		$news->setContent("Santa's prison break from area 51");

        return $this->render('DevLeaguesBundle:News:show_reduced.html.twig', array(
            'newss' => array($news,),
        ));
    }

	/**
     * @Route("/news/{newsId}", name="show_news")
     */
    public function showAction()
    {
		$news = new News();
		$news->setName('Breaking News');
		//$news->setDate(new \DateTime());
		$news->setContent("Santa's prison break from area 51");

        return $this->render('DevLeaguesBundle:News:show.html.twig', array(
            'news' => $news,
        ));
    }
}
