<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_84c906ba4226327acc1829657b63ea2a24bfcdf945e0da809374a1df9305fad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_97e380bd1fbd2f54ba47ce298906dbaf6f2eb058d3e432ec95982ed235a9ff74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e380bd1fbd2f54ba47ce298906dbaf6f2eb058d3e432ec95982ed235a9ff74->enter($__internal_97e380bd1fbd2f54ba47ce298906dbaf6f2eb058d3e432ec95982ed235a9ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_02c71f3f588103d886e52f251b5599b0220c52c80dcc1f72fb033685ad0acc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c71f3f588103d886e52f251b5599b0220c52c80dcc1f72fb033685ad0acc5f->enter($__internal_02c71f3f588103d886e52f251b5599b0220c52c80dcc1f72fb033685ad0acc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e380bd1fbd2f54ba47ce298906dbaf6f2eb058d3e432ec95982ed235a9ff74->leave($__internal_97e380bd1fbd2f54ba47ce298906dbaf6f2eb058d3e432ec95982ed235a9ff74_prof);

        
        $__internal_02c71f3f588103d886e52f251b5599b0220c52c80dcc1f72fb033685ad0acc5f->leave($__internal_02c71f3f588103d886e52f251b5599b0220c52c80dcc1f72fb033685ad0acc5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8a8f28a613026bab6c785e6bcbb2e5d41ff712cff37db4d2224c9a0d7af25ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a8f28a613026bab6c785e6bcbb2e5d41ff712cff37db4d2224c9a0d7af25ee->enter($__internal_b8a8f28a613026bab6c785e6bcbb2e5d41ff712cff37db4d2224c9a0d7af25ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a75e7e5910e7d1ffcc1b0cb5d41d79f04b714ba1582571c873dfa62ea566573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a75e7e5910e7d1ffcc1b0cb5d41d79f04b714ba1582571c873dfa62ea566573->enter($__internal_4a75e7e5910e7d1ffcc1b0cb5d41d79f04b714ba1582571c873dfa62ea566573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4a75e7e5910e7d1ffcc1b0cb5d41d79f04b714ba1582571c873dfa62ea566573->leave($__internal_4a75e7e5910e7d1ffcc1b0cb5d41d79f04b714ba1582571c873dfa62ea566573_prof);

        
        $__internal_b8a8f28a613026bab6c785e6bcbb2e5d41ff712cff37db4d2224c9a0d7af25ee->leave($__internal_b8a8f28a613026bab6c785e6bcbb2e5d41ff712cff37db4d2224c9a0d7af25ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bf0c57df5737daddb83ab8f4ecd22259eb2d58494080aa2fc56670a916ac92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf0c57df5737daddb83ab8f4ecd22259eb2d58494080aa2fc56670a916ac92c->enter($__internal_5bf0c57df5737daddb83ab8f4ecd22259eb2d58494080aa2fc56670a916ac92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f28b123a41d724a1ae53390a993aa7e1aa047cd90c6e61feeb2f83b117c64c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28b123a41d724a1ae53390a993aa7e1aa047cd90c6e61feeb2f83b117c64c8f->enter($__internal_f28b123a41d724a1ae53390a993aa7e1aa047cd90c6e61feeb2f83b117c64c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f28b123a41d724a1ae53390a993aa7e1aa047cd90c6e61feeb2f83b117c64c8f->leave($__internal_f28b123a41d724a1ae53390a993aa7e1aa047cd90c6e61feeb2f83b117c64c8f_prof);

        
        $__internal_5bf0c57df5737daddb83ab8f4ecd22259eb2d58494080aa2fc56670a916ac92c->leave($__internal_5bf0c57df5737daddb83ab8f4ecd22259eb2d58494080aa2fc56670a916ac92c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4bdbbb7fdf582607621318b72c825d681f924748335057d951e10949507f015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bdbbb7fdf582607621318b72c825d681f924748335057d951e10949507f015->enter($__internal_f4bdbbb7fdf582607621318b72c825d681f924748335057d951e10949507f015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37f28a83a1c009de1c18cba34cbbbceb418e599d04193a40fbe50e3a0ff4e4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f28a83a1c009de1c18cba34cbbbceb418e599d04193a40fbe50e3a0ff4e4d6->enter($__internal_37f28a83a1c009de1c18cba34cbbbceb418e599d04193a40fbe50e3a0ff4e4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_37f28a83a1c009de1c18cba34cbbbceb418e599d04193a40fbe50e3a0ff4e4d6->leave($__internal_37f28a83a1c009de1c18cba34cbbbceb418e599d04193a40fbe50e3a0ff4e4d6_prof);

        
        $__internal_f4bdbbb7fdf582607621318b72c825d681f924748335057d951e10949507f015->leave($__internal_f4bdbbb7fdf582607621318b72c825d681f924748335057d951e10949507f015_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
