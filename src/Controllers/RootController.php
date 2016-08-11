<?php
namespace WebDevelopmentQuizz\Controllers;


use WebDevelopmentQuizz\Model\Entities\MyFirstObject;
use WebDevelopmentQuizz\Model\Entities\MySeccondObject;
use Mouf\Mvc\Splash\Annotations\Get;
use Mouf\Mvc\Splash\Annotations\Post;
use Mouf\Mvc\Splash\Annotations\Put;
use Mouf\Mvc\Splash\Annotations\Delete;
use Mouf\Mvc\Splash\Annotations\URL;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Html\HtmlElement\HtmlBlock;
use \Twig_Environment;
use Mouf\Html\Renderer\Twig\TwigTemplate;
use Mouf\Mvc\Splash\HtmlResponse;

/**
 * TODO: write controller comment
 */
class RootController {

    /**
     * The template used by this controller.
     * @var TemplateInterface
     */
    private $template;

    /**
     * The main content block of the page.
     * @var HtmlBlock
     */
    private $content;

    /**
     * The Twig environment (used to render Twig templates).
     * @var Twig_Environment
     */
    private $twig;


    /**
     * Controller's constructor.
     * @param TemplateInterface $template The template used by this controller
     * @param HtmlBlock $content The main content block of the page
     * @param Twig_Environment $twig The Twig environment (used to render Twig templates)
     */
    public function __construct(TemplateInterface $template, HtmlBlock $content, Twig_Environment $twig) {
        $this->template = $template;
        $this->content = $content;
        $this->twig = $twig;
    }

    /**
     * @URL("/")

     */
    public function index() {
        // TODO: write content of action here

        // Let's add the twig file to the template.
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/root/index.twig', array("message"=>"world")));

        return new HtmlResponse($this->template);
    }

    /**
     * @URL("/first-test/")

     */
    public function firstTest() {
        
        $fisrtObject = new MyFirstObject('MyFirstObject');
        $seccondObject = new MySeccondObject('MySeccondObject');
        
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/root/first-test.twig', 
            array(
                "message"=>"Great You have pass the test.",
                "SeecondObject" => $seccondObject
            )
        ));

        return new HtmlResponse($this->template);
    }
}
