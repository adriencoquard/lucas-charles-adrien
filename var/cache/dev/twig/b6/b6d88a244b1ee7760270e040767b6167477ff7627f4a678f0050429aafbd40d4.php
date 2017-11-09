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
        $__internal_9cd52efb707fb00c3bf798d317850d386de0a99ca5b08c6497aec55ea6610597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd52efb707fb00c3bf798d317850d386de0a99ca5b08c6497aec55ea6610597->enter($__internal_9cd52efb707fb00c3bf798d317850d386de0a99ca5b08c6497aec55ea6610597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_35eab50d7d5c963211999be98323f6e7acd7543705a54a7e9b0c978c16c828ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eab50d7d5c963211999be98323f6e7acd7543705a54a7e9b0c978c16c828ca->enter($__internal_35eab50d7d5c963211999be98323f6e7acd7543705a54a7e9b0c978c16c828ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9cd52efb707fb00c3bf798d317850d386de0a99ca5b08c6497aec55ea6610597->leave($__internal_9cd52efb707fb00c3bf798d317850d386de0a99ca5b08c6497aec55ea6610597_prof);

        
        $__internal_35eab50d7d5c963211999be98323f6e7acd7543705a54a7e9b0c978c16c828ca->leave($__internal_35eab50d7d5c963211999be98323f6e7acd7543705a54a7e9b0c978c16c828ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_247b2f861e66e896f574dcac3d73024f1409c64f7a00053d94ee1380c27bc3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247b2f861e66e896f574dcac3d73024f1409c64f7a00053d94ee1380c27bc3b9->enter($__internal_247b2f861e66e896f574dcac3d73024f1409c64f7a00053d94ee1380c27bc3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72615c84c3dab0cd8c31826371e67a9de31947598e99575099cadc32868dc8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72615c84c3dab0cd8c31826371e67a9de31947598e99575099cadc32868dc8e6->enter($__internal_72615c84c3dab0cd8c31826371e67a9de31947598e99575099cadc32868dc8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_72615c84c3dab0cd8c31826371e67a9de31947598e99575099cadc32868dc8e6->leave($__internal_72615c84c3dab0cd8c31826371e67a9de31947598e99575099cadc32868dc8e6_prof);

        
        $__internal_247b2f861e66e896f574dcac3d73024f1409c64f7a00053d94ee1380c27bc3b9->leave($__internal_247b2f861e66e896f574dcac3d73024f1409c64f7a00053d94ee1380c27bc3b9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cdb0ff25f659b9517460fa6e49b72575af7bdc44945f61ed5f31e5ce4316f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdb0ff25f659b9517460fa6e49b72575af7bdc44945f61ed5f31e5ce4316f57->enter($__internal_2cdb0ff25f659b9517460fa6e49b72575af7bdc44945f61ed5f31e5ce4316f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cbf2a8c9172b179a3b5de0c6f7751c8842de22c40d9946ceeb2782093464ab61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf2a8c9172b179a3b5de0c6f7751c8842de22c40d9946ceeb2782093464ab61->enter($__internal_cbf2a8c9172b179a3b5de0c6f7751c8842de22c40d9946ceeb2782093464ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cbf2a8c9172b179a3b5de0c6f7751c8842de22c40d9946ceeb2782093464ab61->leave($__internal_cbf2a8c9172b179a3b5de0c6f7751c8842de22c40d9946ceeb2782093464ab61_prof);

        
        $__internal_2cdb0ff25f659b9517460fa6e49b72575af7bdc44945f61ed5f31e5ce4316f57->leave($__internal_2cdb0ff25f659b9517460fa6e49b72575af7bdc44945f61ed5f31e5ce4316f57_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e38c3a49255f3831b4ec0966336139f05161696e49f441a090f322b1b469003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e38c3a49255f3831b4ec0966336139f05161696e49f441a090f322b1b469003->enter($__internal_1e38c3a49255f3831b4ec0966336139f05161696e49f441a090f322b1b469003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_166002e382620c181614d5aadf266c2820cb45f7e5eb42c26fa0e335c214727b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166002e382620c181614d5aadf266c2820cb45f7e5eb42c26fa0e335c214727b->enter($__internal_166002e382620c181614d5aadf266c2820cb45f7e5eb42c26fa0e335c214727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_166002e382620c181614d5aadf266c2820cb45f7e5eb42c26fa0e335c214727b->leave($__internal_166002e382620c181614d5aadf266c2820cb45f7e5eb42c26fa0e335c214727b_prof);

        
        $__internal_1e38c3a49255f3831b4ec0966336139f05161696e49f441a090f322b1b469003->leave($__internal_1e38c3a49255f3831b4ec0966336139f05161696e49f441a090f322b1b469003_prof);

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
