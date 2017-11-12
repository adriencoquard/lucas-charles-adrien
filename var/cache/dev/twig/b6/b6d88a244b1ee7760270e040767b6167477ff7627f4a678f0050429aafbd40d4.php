<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6d98b40a91c57d785dd2344270b9964a8cee1cc98d06c0796e00d709bd28047d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455af7f354c0919b5edaddedf4e8165f0d71daaeec93d4721e3c854e3101ff10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455af7f354c0919b5edaddedf4e8165f0d71daaeec93d4721e3c854e3101ff10->enter($__internal_455af7f354c0919b5edaddedf4e8165f0d71daaeec93d4721e3c854e3101ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_225bd12d4751bab6b904add4e8360f84c0310adc93d0f83af75cb533e68da7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225bd12d4751bab6b904add4e8360f84c0310adc93d0f83af75cb533e68da7b8->enter($__internal_225bd12d4751bab6b904add4e8360f84c0310adc93d0f83af75cb533e68da7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_455af7f354c0919b5edaddedf4e8165f0d71daaeec93d4721e3c854e3101ff10->leave($__internal_455af7f354c0919b5edaddedf4e8165f0d71daaeec93d4721e3c854e3101ff10_prof);

        
        $__internal_225bd12d4751bab6b904add4e8360f84c0310adc93d0f83af75cb533e68da7b8->leave($__internal_225bd12d4751bab6b904add4e8360f84c0310adc93d0f83af75cb533e68da7b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_305166e9e32727622ed3424c9581a789d98e1d4003fd31577a5f980d25b9bb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305166e9e32727622ed3424c9581a789d98e1d4003fd31577a5f980d25b9bb52->enter($__internal_305166e9e32727622ed3424c9581a789d98e1d4003fd31577a5f980d25b9bb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_886dd5a360cd7c376ffee044df0508717bf5d54cf43316b48d4b7c8bd4f9b17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886dd5a360cd7c376ffee044df0508717bf5d54cf43316b48d4b7c8bd4f9b17d->enter($__internal_886dd5a360cd7c376ffee044df0508717bf5d54cf43316b48d4b7c8bd4f9b17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_886dd5a360cd7c376ffee044df0508717bf5d54cf43316b48d4b7c8bd4f9b17d->leave($__internal_886dd5a360cd7c376ffee044df0508717bf5d54cf43316b48d4b7c8bd4f9b17d_prof);

        
        $__internal_305166e9e32727622ed3424c9581a789d98e1d4003fd31577a5f980d25b9bb52->leave($__internal_305166e9e32727622ed3424c9581a789d98e1d4003fd31577a5f980d25b9bb52_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_34822bcaca077c7b3f9fc7ff26429796511b0b5867a910a07921a35b90648cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34822bcaca077c7b3f9fc7ff26429796511b0b5867a910a07921a35b90648cb8->enter($__internal_34822bcaca077c7b3f9fc7ff26429796511b0b5867a910a07921a35b90648cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c983d941382e893bcfcb9adf8722e3f0006272f9871274be7edd659f6b6dc9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c983d941382e893bcfcb9adf8722e3f0006272f9871274be7edd659f6b6dc9c7->enter($__internal_c983d941382e893bcfcb9adf8722e3f0006272f9871274be7edd659f6b6dc9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c983d941382e893bcfcb9adf8722e3f0006272f9871274be7edd659f6b6dc9c7->leave($__internal_c983d941382e893bcfcb9adf8722e3f0006272f9871274be7edd659f6b6dc9c7_prof);

        
        $__internal_34822bcaca077c7b3f9fc7ff26429796511b0b5867a910a07921a35b90648cb8->leave($__internal_34822bcaca077c7b3f9fc7ff26429796511b0b5867a910a07921a35b90648cb8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4d7f67d35bd3cc907dbd9c1b0275598a4eb120283f1d65439f1e4372c3cb157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d7f67d35bd3cc907dbd9c1b0275598a4eb120283f1d65439f1e4372c3cb157->enter($__internal_b4d7f67d35bd3cc907dbd9c1b0275598a4eb120283f1d65439f1e4372c3cb157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2507672e154db352698ab238ec18e8c8de2a36dfe7dee10373a2f14892b53c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2507672e154db352698ab238ec18e8c8de2a36dfe7dee10373a2f14892b53c6e->enter($__internal_2507672e154db352698ab238ec18e8c8de2a36dfe7dee10373a2f14892b53c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2507672e154db352698ab238ec18e8c8de2a36dfe7dee10373a2f14892b53c6e->leave($__internal_2507672e154db352698ab238ec18e8c8de2a36dfe7dee10373a2f14892b53c6e_prof);

        
        $__internal_b4d7f67d35bd3cc907dbd9c1b0275598a4eb120283f1d65439f1e4372c3cb157->leave($__internal_b4d7f67d35bd3cc907dbd9c1b0275598a4eb120283f1d65439f1e4372c3cb157_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
