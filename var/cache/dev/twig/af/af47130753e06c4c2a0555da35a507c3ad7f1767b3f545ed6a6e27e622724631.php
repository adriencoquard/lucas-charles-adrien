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
        $__internal_7655db26a3c27f0bce7c74f999cfebb5c895125cc026c11ea1009cd6852dd1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7655db26a3c27f0bce7c74f999cfebb5c895125cc026c11ea1009cd6852dd1b0->enter($__internal_7655db26a3c27f0bce7c74f999cfebb5c895125cc026c11ea1009cd6852dd1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a8e93f9f6bdbb07e73c12f5653ea1d394b11cdbfeb4fab1761168c7c4b1036db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e93f9f6bdbb07e73c12f5653ea1d394b11cdbfeb4fab1761168c7c4b1036db->enter($__internal_a8e93f9f6bdbb07e73c12f5653ea1d394b11cdbfeb4fab1761168c7c4b1036db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7655db26a3c27f0bce7c74f999cfebb5c895125cc026c11ea1009cd6852dd1b0->leave($__internal_7655db26a3c27f0bce7c74f999cfebb5c895125cc026c11ea1009cd6852dd1b0_prof);

        
        $__internal_a8e93f9f6bdbb07e73c12f5653ea1d394b11cdbfeb4fab1761168c7c4b1036db->leave($__internal_a8e93f9f6bdbb07e73c12f5653ea1d394b11cdbfeb4fab1761168c7c4b1036db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4320867cb16a01370a6bbd10d633367636bc81519f7fbaeee19eb7895c863d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4320867cb16a01370a6bbd10d633367636bc81519f7fbaeee19eb7895c863d0->enter($__internal_f4320867cb16a01370a6bbd10d633367636bc81519f7fbaeee19eb7895c863d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f6f766545cbec20b15b5e6d8970af34072ba8aaaef578e9c5749c9f8df45d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6f766545cbec20b15b5e6d8970af34072ba8aaaef578e9c5749c9f8df45d8c->enter($__internal_5f6f766545cbec20b15b5e6d8970af34072ba8aaaef578e9c5749c9f8df45d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5f6f766545cbec20b15b5e6d8970af34072ba8aaaef578e9c5749c9f8df45d8c->leave($__internal_5f6f766545cbec20b15b5e6d8970af34072ba8aaaef578e9c5749c9f8df45d8c_prof);

        
        $__internal_f4320867cb16a01370a6bbd10d633367636bc81519f7fbaeee19eb7895c863d0->leave($__internal_f4320867cb16a01370a6bbd10d633367636bc81519f7fbaeee19eb7895c863d0_prof);

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
