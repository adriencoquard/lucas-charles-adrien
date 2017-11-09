<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f675f175f105ae785d44004ab2a89dadcd8c8400ab1dce55efa7c90cfc52e9b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0459431f7e8926d2329f7c03a554f114b3a0c14f8e5b77349481b0c8bba71614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0459431f7e8926d2329f7c03a554f114b3a0c14f8e5b77349481b0c8bba71614->enter($__internal_0459431f7e8926d2329f7c03a554f114b3a0c14f8e5b77349481b0c8bba71614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1d1cbe0287076769fa68fba100ba8bd4d5060050478056358d2c4644e9f2a2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1cbe0287076769fa68fba100ba8bd4d5060050478056358d2c4644e9f2a2ae->enter($__internal_1d1cbe0287076769fa68fba100ba8bd4d5060050478056358d2c4644e9f2a2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0459431f7e8926d2329f7c03a554f114b3a0c14f8e5b77349481b0c8bba71614->leave($__internal_0459431f7e8926d2329f7c03a554f114b3a0c14f8e5b77349481b0c8bba71614_prof);

        
        $__internal_1d1cbe0287076769fa68fba100ba8bd4d5060050478056358d2c4644e9f2a2ae->leave($__internal_1d1cbe0287076769fa68fba100ba8bd4d5060050478056358d2c4644e9f2a2ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd94f8e0912d7ad168cf5bc2cb2227b836dc266e6370707e6ad003920d16e8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd94f8e0912d7ad168cf5bc2cb2227b836dc266e6370707e6ad003920d16e8fd->enter($__internal_bd94f8e0912d7ad168cf5bc2cb2227b836dc266e6370707e6ad003920d16e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f36a3960e28a5a9b7872424b3648a28073a3c3e41b9bb1b81d2ea56b03b0c7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36a3960e28a5a9b7872424b3648a28073a3c3e41b9bb1b81d2ea56b03b0c7cc->enter($__internal_f36a3960e28a5a9b7872424b3648a28073a3c3e41b9bb1b81d2ea56b03b0c7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f36a3960e28a5a9b7872424b3648a28073a3c3e41b9bb1b81d2ea56b03b0c7cc->leave($__internal_f36a3960e28a5a9b7872424b3648a28073a3c3e41b9bb1b81d2ea56b03b0c7cc_prof);

        
        $__internal_bd94f8e0912d7ad168cf5bc2cb2227b836dc266e6370707e6ad003920d16e8fd->leave($__internal_bd94f8e0912d7ad168cf5bc2cb2227b836dc266e6370707e6ad003920d16e8fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
