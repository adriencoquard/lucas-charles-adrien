<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7e23ca33d3a04390f588018351aa5d0ad68eea69cf2a137edd8852505fa400a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7438553619d1559f00881b388b23bfc5f66aa12177a0d7cf3e54cd65e8d0b265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7438553619d1559f00881b388b23bfc5f66aa12177a0d7cf3e54cd65e8d0b265->enter($__internal_7438553619d1559f00881b388b23bfc5f66aa12177a0d7cf3e54cd65e8d0b265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8d219210e8533388d304c2726d4702fbc6c33173f5864d7ce41023885e485ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d219210e8533388d304c2726d4702fbc6c33173f5864d7ce41023885e485ac5->enter($__internal_8d219210e8533388d304c2726d4702fbc6c33173f5864d7ce41023885e485ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7438553619d1559f00881b388b23bfc5f66aa12177a0d7cf3e54cd65e8d0b265->leave($__internal_7438553619d1559f00881b388b23bfc5f66aa12177a0d7cf3e54cd65e8d0b265_prof);

        
        $__internal_8d219210e8533388d304c2726d4702fbc6c33173f5864d7ce41023885e485ac5->leave($__internal_8d219210e8533388d304c2726d4702fbc6c33173f5864d7ce41023885e485ac5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_979fb76d1b33e613b9f0848a646e17ba93f0a583ae537d0532521ffbd39fb50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979fb76d1b33e613b9f0848a646e17ba93f0a583ae537d0532521ffbd39fb50c->enter($__internal_979fb76d1b33e613b9f0848a646e17ba93f0a583ae537d0532521ffbd39fb50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0fc82a20619cde6fa8540a3ffe246066b18442db2d6226f6412c91bc60953d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc82a20619cde6fa8540a3ffe246066b18442db2d6226f6412c91bc60953d17->enter($__internal_0fc82a20619cde6fa8540a3ffe246066b18442db2d6226f6412c91bc60953d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fc82a20619cde6fa8540a3ffe246066b18442db2d6226f6412c91bc60953d17->leave($__internal_0fc82a20619cde6fa8540a3ffe246066b18442db2d6226f6412c91bc60953d17_prof);

        
        $__internal_979fb76d1b33e613b9f0848a646e17ba93f0a583ae537d0532521ffbd39fb50c->leave($__internal_979fb76d1b33e613b9f0848a646e17ba93f0a583ae537d0532521ffbd39fb50c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4072e1961ad551026aa710f6a4dd65a5eb58c8dcbf70451698c4b0e46aa2274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4072e1961ad551026aa710f6a4dd65a5eb58c8dcbf70451698c4b0e46aa2274e->enter($__internal_4072e1961ad551026aa710f6a4dd65a5eb58c8dcbf70451698c4b0e46aa2274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bbdfef9e3a086d6308e1749bcb6024209cc73c8d91c1f2d582232ee1ae4ae417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdfef9e3a086d6308e1749bcb6024209cc73c8d91c1f2d582232ee1ae4ae417->enter($__internal_bbdfef9e3a086d6308e1749bcb6024209cc73c8d91c1f2d582232ee1ae4ae417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbdfef9e3a086d6308e1749bcb6024209cc73c8d91c1f2d582232ee1ae4ae417->leave($__internal_bbdfef9e3a086d6308e1749bcb6024209cc73c8d91c1f2d582232ee1ae4ae417_prof);

        
        $__internal_4072e1961ad551026aa710f6a4dd65a5eb58c8dcbf70451698c4b0e46aa2274e->leave($__internal_4072e1961ad551026aa710f6a4dd65a5eb58c8dcbf70451698c4b0e46aa2274e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73dbe63b6b2098052eb648f03d4c93151081b4c127d38698184995b2a2398130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dbe63b6b2098052eb648f03d4c93151081b4c127d38698184995b2a2398130->enter($__internal_73dbe63b6b2098052eb648f03d4c93151081b4c127d38698184995b2a2398130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8591da0c980744030b161bfcfd6f7a49ffd8b821175a80557f529bd0628a477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8591da0c980744030b161bfcfd6f7a49ffd8b821175a80557f529bd0628a477->enter($__internal_f8591da0c980744030b161bfcfd6f7a49ffd8b821175a80557f529bd0628a477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f8591da0c980744030b161bfcfd6f7a49ffd8b821175a80557f529bd0628a477->leave($__internal_f8591da0c980744030b161bfcfd6f7a49ffd8b821175a80557f529bd0628a477_prof);

        
        $__internal_73dbe63b6b2098052eb648f03d4c93151081b4c127d38698184995b2a2398130->leave($__internal_73dbe63b6b2098052eb648f03d4c93151081b4c127d38698184995b2a2398130_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
