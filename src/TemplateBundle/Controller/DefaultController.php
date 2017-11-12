<?php

namespace TemplateBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Assetic\AssetManager;
use Assetic\AssetWriter;
use Assetic\Factory\AssetFactory;
use Assetic\Factory\LazyAssetManager;
use Assetic\Filter\CssRewriteFilter;
use Assetic\FilterManager;

class DefaultController extends Controller
{
    /**
     * @Route("/front/stylesheets", name="front_template_stylesheets")
     * @Route("/admin/stylesheets", name="admin_template_stylesheets")
     */
    public function stylesheetsAction()
    {


        $entity = $this->getDoctrine()->getentity();
        $template = new template($entity,__DIR__);
        $kernel = $this->container->get( 'kernel' )->getEnvironment();
        $request = $this->container->get('request_stack')->getCurrentRequest();


        $AssetManager = new \TemplateBundle\Service\AssetManager($kernel,$template, $request);
        $stylesheets = $AssetManager->getStylesheets();
        $factory = new AssetFactory($stylesheets[0]);
        
        $factory->setAssetManager(new AssetManager());
        $lazyAm = new LazyAssetManager($factory);
        $writer = new AssetWriter($this->container->getParameter('kernel.root_dir')); 
        $writer->writeManagerAssets($lazyAm);
        
        $response = new Response;
        $response->SetContent($lazyAm->get('main')->dump());
        $response->headers->set('Content-Type', 'text/css');
        return $response;
    }

    /**
     * @Route("/front/javascripts", name="front_template_javascripts")
     * @Route("/admin/javascripts", name="admin_template_javascripts")
     */
    public function javascriptsAction()
    {
        // @todo Make javascripts action
        //       Load all javascripts files and return them in a response
    }


        /**
         * @Route("/{path}", requirements={"path"=".+"})
         */
        public function filenameAction($path)
        {
            $exploded_path = explode(".", $path);
            $extension = end($exploded_path);

            if ($extension)
            {
                $path = $this->get('template.manager')->getAbsoluteTemplatePath() . "/" . $path;

                if (!file_exists($path))
                    throw new NotFoundHttpException("Resource not found!");

                return new BinaryFileResponse($path);
            }

            return new Response();
        }
}
