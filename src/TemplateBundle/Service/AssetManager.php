<?php

namespace TemplateBundle\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Finder\Finder;
use AppKernel;

class AssetManager
{
    private $local_stylesheets = "@TemplateBundle/Resources/public/css";
    private $local_javascripts = "@TemplateBundle/Resources/public/js";

    private $kernel;
    private $template_manager;
    private $route_name;

    public function __construct(AppKernel $kernel, TemplateManager $template_manager, RequestStack $request)
    {
        $this->kernel = $kernel;
        $this->template_manager = $template_manager;
        $this->route_name = $request->getCurrentRequest()->get('_route');
    }

    /**
     * Return the path to the active template stylesheets
     *
     * @return string
     */
    public function getTemplateStylesheetsPath()
    {
        if (strpos($this->route_name, "front") === 0)
            $path = $this->template_manager->getAbsoluteTemplatePath() . "/front/css";
        else if (strpos($this->route_name, "admin") === 0)
            $path = $this->template_manager->getAbsoluteTemplatePath() . "/admin/css";

        return $path;
    }

    /**
     * Return all stylesheets from the bundle
     *
     * @return array
     */
    private function getLocalStylesheets()
    {
        $f = new Finder();
        $f->files()->in($this->local_stylesheets);
        $files = array();
            
            if(!$f)
                return $files;
            foreach ($f as $file) {
                $files[] = $file->getRealPath();
            }
            return $files;
    }

    /**
     * Return all stylesheets from the active template
     *
     * @return array
     */
    private function getTemplateStylesheets()
    {
        $f = new Finder();
        $f->files()->in($this->getTemplateStylesheetsPath());
        $files = array();

            if(!$f)
                return $files;
            foreach ($f as $file) {
                $files[] = $file->getRealPath();
            }
        
        return $files;
    }

    public function getStylesheets()
    {
        return array_merge(
            $this->getLocalStylesheets(),
            $this->getTemplateStylesheets()
        );
    }

    public function getTemplateJavascriptsPath()
    {
        if (strpos($this->route_name, "front") === 0)
            $path = $this->template_manager->getAbsoluteTemplatePath() . "/front/js";
        else if (strpos($this->route_name, "admin") === 0)
            $path = $this->template_manager->getAbsoluteTemplatePath() . "/admin/js";

        return $path;
    }

    /**
     * Return all javascripts from the bundle
     *
     * @return array
     */
    public function getLocalJavascripts()
    {
         $f = new Finder();
        $f->files()->in($this->local_javascripts);
        $files = array();
        if(!$f)
            return $files;
        foreach ($f as $file) {
            $files[] = $file->getRealPath();
        }
        return $files;
    }

    /**
     * Return all javascripts from the active template
     *
     * @return array
     */
    private function getTemplateJavascripts()
    {
        $f = new Finder();
        $f->files()->in($this->getTemplateJavascriptsPath());
        $files = array();
       
            if(!$f)
                return $files;
            foreach ($f as $file) {
                $files[] = $file->getRealPath();
            }
        
            return $files;
    }

    public function getJavascripts()
    {
        return array_merge(
            $this->getLocalJavascripts(),
            $this->getTemplateJavascripts()
        );
    }
}
