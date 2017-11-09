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
        $__internal_84f4dc10da92e0b1e8a0c47016532ffaf30b84da26b41386137c3bb17004bf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f4dc10da92e0b1e8a0c47016532ffaf30b84da26b41386137c3bb17004bf18->enter($__internal_84f4dc10da92e0b1e8a0c47016532ffaf30b84da26b41386137c3bb17004bf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b1918874d563425bce6c632b44a21d45dcf1e5eef9eec863a5d67a470ea9eece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1918874d563425bce6c632b44a21d45dcf1e5eef9eec863a5d67a470ea9eece->enter($__internal_b1918874d563425bce6c632b44a21d45dcf1e5eef9eec863a5d67a470ea9eece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f4dc10da92e0b1e8a0c47016532ffaf30b84da26b41386137c3bb17004bf18->leave($__internal_84f4dc10da92e0b1e8a0c47016532ffaf30b84da26b41386137c3bb17004bf18_prof);

        
        $__internal_b1918874d563425bce6c632b44a21d45dcf1e5eef9eec863a5d67a470ea9eece->leave($__internal_b1918874d563425bce6c632b44a21d45dcf1e5eef9eec863a5d67a470ea9eece_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_287baab2af0c86c03f286b6e0f4b49b954539aefcf25e4ec24bb62d54d635f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287baab2af0c86c03f286b6e0f4b49b954539aefcf25e4ec24bb62d54d635f62->enter($__internal_287baab2af0c86c03f286b6e0f4b49b954539aefcf25e4ec24bb62d54d635f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29623a82f8df71a411d699147732e78e47d03831c0cf5a557cc18a04a2a69d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29623a82f8df71a411d699147732e78e47d03831c0cf5a557cc18a04a2a69d73->enter($__internal_29623a82f8df71a411d699147732e78e47d03831c0cf5a557cc18a04a2a69d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_29623a82f8df71a411d699147732e78e47d03831c0cf5a557cc18a04a2a69d73->leave($__internal_29623a82f8df71a411d699147732e78e47d03831c0cf5a557cc18a04a2a69d73_prof);

        
        $__internal_287baab2af0c86c03f286b6e0f4b49b954539aefcf25e4ec24bb62d54d635f62->leave($__internal_287baab2af0c86c03f286b6e0f4b49b954539aefcf25e4ec24bb62d54d635f62_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50dcf98d5453842184af5d009b78c3861671b8a3f9ed635972b19617c5406228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dcf98d5453842184af5d009b78c3861671b8a3f9ed635972b19617c5406228->enter($__internal_50dcf98d5453842184af5d009b78c3861671b8a3f9ed635972b19617c5406228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13face0ae5103f6368993e54635cb868c72f79d87b9be71b449a28f9f4386e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13face0ae5103f6368993e54635cb868c72f79d87b9be71b449a28f9f4386e6e->enter($__internal_13face0ae5103f6368993e54635cb868c72f79d87b9be71b449a28f9f4386e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_13face0ae5103f6368993e54635cb868c72f79d87b9be71b449a28f9f4386e6e->leave($__internal_13face0ae5103f6368993e54635cb868c72f79d87b9be71b449a28f9f4386e6e_prof);

        
        $__internal_50dcf98d5453842184af5d009b78c3861671b8a3f9ed635972b19617c5406228->leave($__internal_50dcf98d5453842184af5d009b78c3861671b8a3f9ed635972b19617c5406228_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0359c35bdbcd133c7f776748629788579e16d568a94d01fa140e9af8670079ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0359c35bdbcd133c7f776748629788579e16d568a94d01fa140e9af8670079ff->enter($__internal_0359c35bdbcd133c7f776748629788579e16d568a94d01fa140e9af8670079ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eba0b7ee7a4d203657f8f98a6c883920a712b64eed9b2ac6d408fa61cfca039c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba0b7ee7a4d203657f8f98a6c883920a712b64eed9b2ac6d408fa61cfca039c->enter($__internal_eba0b7ee7a4d203657f8f98a6c883920a712b64eed9b2ac6d408fa61cfca039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eba0b7ee7a4d203657f8f98a6c883920a712b64eed9b2ac6d408fa61cfca039c->leave($__internal_eba0b7ee7a4d203657f8f98a6c883920a712b64eed9b2ac6d408fa61cfca039c_prof);

        
        $__internal_0359c35bdbcd133c7f776748629788579e16d568a94d01fa140e9af8670079ff->leave($__internal_0359c35bdbcd133c7f776748629788579e16d568a94d01fa140e9af8670079ff_prof);

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
