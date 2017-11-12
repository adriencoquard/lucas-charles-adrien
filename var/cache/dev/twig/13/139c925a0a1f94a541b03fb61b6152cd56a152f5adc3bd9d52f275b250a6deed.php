<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2b427dc9117c234664002247154537ef678e8ea41f34f8df4b8d0654c37ab964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea1b4145011c1c1b1eb797e42a67d7afb878293350cd648a40b9f83cd3b35ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1b4145011c1c1b1eb797e42a67d7afb878293350cd648a40b9f83cd3b35ccf->enter($__internal_ea1b4145011c1c1b1eb797e42a67d7afb878293350cd648a40b9f83cd3b35ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_665665dd1d3513f51818007d4f7f8ab4c397c35383202cb12a32ed28c62a763f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665665dd1d3513f51818007d4f7f8ab4c397c35383202cb12a32ed28c62a763f->enter($__internal_665665dd1d3513f51818007d4f7f8ab4c397c35383202cb12a32ed28c62a763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ea1b4145011c1c1b1eb797e42a67d7afb878293350cd648a40b9f83cd3b35ccf->leave($__internal_ea1b4145011c1c1b1eb797e42a67d7afb878293350cd648a40b9f83cd3b35ccf_prof);

        
        $__internal_665665dd1d3513f51818007d4f7f8ab4c397c35383202cb12a32ed28c62a763f->leave($__internal_665665dd1d3513f51818007d4f7f8ab4c397c35383202cb12a32ed28c62a763f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
