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
        $__internal_cd4ed7e810855a2bfcedce61b03b88f4675a83c019900bd85e074ca72ed29fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4ed7e810855a2bfcedce61b03b88f4675a83c019900bd85e074ca72ed29fbb->enter($__internal_cd4ed7e810855a2bfcedce61b03b88f4675a83c019900bd85e074ca72ed29fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4bef58d8d3567c3c2399d25a1b22ce37a393b983f36701dbd7dc45ebc8fcf296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bef58d8d3567c3c2399d25a1b22ce37a393b983f36701dbd7dc45ebc8fcf296->enter($__internal_4bef58d8d3567c3c2399d25a1b22ce37a393b983f36701dbd7dc45ebc8fcf296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4ed7e810855a2bfcedce61b03b88f4675a83c019900bd85e074ca72ed29fbb->leave($__internal_cd4ed7e810855a2bfcedce61b03b88f4675a83c019900bd85e074ca72ed29fbb_prof);

        
        $__internal_4bef58d8d3567c3c2399d25a1b22ce37a393b983f36701dbd7dc45ebc8fcf296->leave($__internal_4bef58d8d3567c3c2399d25a1b22ce37a393b983f36701dbd7dc45ebc8fcf296_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_27fa0f5d72d810e5739ef856a8ad873ce36cce2e26dfd8fab6d86ec1c47e35b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fa0f5d72d810e5739ef856a8ad873ce36cce2e26dfd8fab6d86ec1c47e35b7->enter($__internal_27fa0f5d72d810e5739ef856a8ad873ce36cce2e26dfd8fab6d86ec1c47e35b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6da779a2b7e3a97f6c04944b7d81916c6e667c371cb9a0796cc8ee4b5b46130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6da779a2b7e3a97f6c04944b7d81916c6e667c371cb9a0796cc8ee4b5b46130->enter($__internal_b6da779a2b7e3a97f6c04944b7d81916c6e667c371cb9a0796cc8ee4b5b46130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6da779a2b7e3a97f6c04944b7d81916c6e667c371cb9a0796cc8ee4b5b46130->leave($__internal_b6da779a2b7e3a97f6c04944b7d81916c6e667c371cb9a0796cc8ee4b5b46130_prof);

        
        $__internal_27fa0f5d72d810e5739ef856a8ad873ce36cce2e26dfd8fab6d86ec1c47e35b7->leave($__internal_27fa0f5d72d810e5739ef856a8ad873ce36cce2e26dfd8fab6d86ec1c47e35b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c98775234dd94b24d1ee81e7a6c443881028e141d1c07c9b429ec3b03ce5e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c98775234dd94b24d1ee81e7a6c443881028e141d1c07c9b429ec3b03ce5e85->enter($__internal_4c98775234dd94b24d1ee81e7a6c443881028e141d1c07c9b429ec3b03ce5e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d942fe1913440b8d9705f0a9522526acefde43fe6eecf97552fa5c3f75179094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d942fe1913440b8d9705f0a9522526acefde43fe6eecf97552fa5c3f75179094->enter($__internal_d942fe1913440b8d9705f0a9522526acefde43fe6eecf97552fa5c3f75179094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d942fe1913440b8d9705f0a9522526acefde43fe6eecf97552fa5c3f75179094->leave($__internal_d942fe1913440b8d9705f0a9522526acefde43fe6eecf97552fa5c3f75179094_prof);

        
        $__internal_4c98775234dd94b24d1ee81e7a6c443881028e141d1c07c9b429ec3b03ce5e85->leave($__internal_4c98775234dd94b24d1ee81e7a6c443881028e141d1c07c9b429ec3b03ce5e85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b16c6410dbdecca88b112be824fa3b2fe7469e9e08c5d53655537a8407d6c626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16c6410dbdecca88b112be824fa3b2fe7469e9e08c5d53655537a8407d6c626->enter($__internal_b16c6410dbdecca88b112be824fa3b2fe7469e9e08c5d53655537a8407d6c626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27dfce4ce1e0d10d5306d38bdf1490a3ecc358c71dee348afce76a0c40d1cb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dfce4ce1e0d10d5306d38bdf1490a3ecc358c71dee348afce76a0c40d1cb4f->enter($__internal_27dfce4ce1e0d10d5306d38bdf1490a3ecc358c71dee348afce76a0c40d1cb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_27dfce4ce1e0d10d5306d38bdf1490a3ecc358c71dee348afce76a0c40d1cb4f->leave($__internal_27dfce4ce1e0d10d5306d38bdf1490a3ecc358c71dee348afce76a0c40d1cb4f_prof);

        
        $__internal_b16c6410dbdecca88b112be824fa3b2fe7469e9e08c5d53655537a8407d6c626->leave($__internal_b16c6410dbdecca88b112be824fa3b2fe7469e9e08c5d53655537a8407d6c626_prof);

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
