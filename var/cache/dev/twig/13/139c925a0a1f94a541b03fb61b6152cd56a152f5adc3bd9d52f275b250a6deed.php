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
        $__internal_06d06df747995d14cab0b1212f45828d25b6a6e00bbcb2bffb5f56b4cb8f3e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d06df747995d14cab0b1212f45828d25b6a6e00bbcb2bffb5f56b4cb8f3e0b->enter($__internal_06d06df747995d14cab0b1212f45828d25b6a6e00bbcb2bffb5f56b4cb8f3e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_96f1bd8322f872facbadb043edf3c491e1c73efff3d2b8393fb52f9f324ba000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f1bd8322f872facbadb043edf3c491e1c73efff3d2b8393fb52f9f324ba000->enter($__internal_96f1bd8322f872facbadb043edf3c491e1c73efff3d2b8393fb52f9f324ba000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_06d06df747995d14cab0b1212f45828d25b6a6e00bbcb2bffb5f56b4cb8f3e0b->leave($__internal_06d06df747995d14cab0b1212f45828d25b6a6e00bbcb2bffb5f56b4cb8f3e0b_prof);

        
        $__internal_96f1bd8322f872facbadb043edf3c491e1c73efff3d2b8393fb52f9f324ba000->leave($__internal_96f1bd8322f872facbadb043edf3c491e1c73efff3d2b8393fb52f9f324ba000_prof);

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
