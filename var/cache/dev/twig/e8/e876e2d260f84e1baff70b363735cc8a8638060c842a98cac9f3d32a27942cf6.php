<?php

/* ::front.html.twig */
class __TwigTemplate_eb76bdffc04b93aa55ffdff27bf212c268a1a11432875ad77d2a6838cc3d3832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea59f8f6f7eaf43ef72c01114845e6708bf11e44fc5074bcdedf9595342e84a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea59f8f6f7eaf43ef72c01114845e6708bf11e44fc5074bcdedf9595342e84a2->enter($__internal_ea59f8f6f7eaf43ef72c01114845e6708bf11e44fc5074bcdedf9595342e84a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        $__internal_84e5fe338d8ce0528b96ec4e043e4c96dc02235de29a47f4880b965a6e5b24ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e5fe338d8ce0528b96ec4e043e4c96dc02235de29a47f4880b965a6e5b24ab->enter($__internal_84e5fe338d8ce0528b96ec4e043e4c96dc02235de29a47f4880b965a6e5b24ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        // line 1
        $context["__PAGE__"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_template_stylesheets");
        echo "\" />

        ";
        // line 11
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "header", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 11, $this->getSourceContext()); })()));
        echo "

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body class=\"page_";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        <!-- BEGIN PAGE HEADER -->
        ";
        // line 17
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayHeader", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 17, $this->getSourceContext()); })()));
        echo "
        <!-- END PAGE HEADER -->

        <!-- BEGIN PAGE CONTENT -->
        <section class=\"container\">
            <!-- BEGIN PAGE CONTENT TOP -->
            ";
        // line 23
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentTop", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 23, $this->getSourceContext()); })()));
        echo "
            <!-- END PAGE CONTENT TOP -->

            <section class=\"row\">
                <!-- BEGIN PAGE CONTENT MAIN -->
                <section class=\"col-sm-8 col-md-9 col-lg-9 col-xs-12\">
                    ";
        // line 29
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentMain", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 29, $this->getSourceContext()); })()));
        echo "
                </section>
                <!-- END PAGE CONTENT MAIN -->

                <!-- BEGIN PAGE CONTENT SIDEBAR -->
                <section class=\"col-sm-4 col-md-3 col-lg-3 col-xs-12\">
                    ";
        // line 35
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentSidebar", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 35, $this->getSourceContext()); })()));
        echo "
                </section>
                <!-- END PAGE CONTENT SIDEBAR -->
            </section>

            <!-- BEGIN PAGE CONTENT BOTTOM -->
            ";
        // line 41
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayContentBottom", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 41, $this->getSourceContext()); })()));
        echo "
            <!-- END PAGE CONTENT BOTTOM -->
        </section>
        <!-- END PAGE CONTENT -->

        <footer>
            ";
        // line 47
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "displayFooter", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 47, $this->getSourceContext()); })()));
        echo "
        </footer>
    </body>

    <script type=\"text/javascript\" src=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("front_template_javascripts");
        echo "\"></script>

    <!-- BEGIN CUSTOM JAVASCRIPTS -->
    ";
        // line 54
        echo $this->env->getExtension('HookBundle\Twig\HookExtension')->hookFunction($this->env, "javascripts", (isset($context["__PAGE__"]) || array_key_exists("__PAGE__", $context) ? $context["__PAGE__"] : (function () { throw new Twig_Error_Runtime('Variable "__PAGE__" does not exist.', 54, $this->getSourceContext()); })()));
        echo "
    <!-- END CUSTOM JAVASCRIPTS -->
</html>
";
        
        $__internal_ea59f8f6f7eaf43ef72c01114845e6708bf11e44fc5074bcdedf9595342e84a2->leave($__internal_ea59f8f6f7eaf43ef72c01114845e6708bf11e44fc5074bcdedf9595342e84a2_prof);

        
        $__internal_84e5fe338d8ce0528b96ec4e043e4c96dc02235de29a47f4880b965a6e5b24ab->leave($__internal_84e5fe338d8ce0528b96ec4e043e4c96dc02235de29a47f4880b965a6e5b24ab_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b234394e6b140da91c35e6be7338f6932ca12c0ed840d2a8fee526e172314297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b234394e6b140da91c35e6be7338f6932ca12c0ed840d2a8fee526e172314297->enter($__internal_b234394e6b140da91c35e6be7338f6932ca12c0ed840d2a8fee526e172314297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6803a764e5582ac37221a0cbfb8bd5db11c6dbf64943e83e6a05012c595c3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6803a764e5582ac37221a0cbfb8bd5db11c6dbf64943e83e6a05012c595c3e1->enter($__internal_e6803a764e5582ac37221a0cbfb8bd5db11c6dbf64943e83e6a05012c595c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e6803a764e5582ac37221a0cbfb8bd5db11c6dbf64943e83e6a05012c595c3e1->leave($__internal_e6803a764e5582ac37221a0cbfb8bd5db11c6dbf64943e83e6a05012c595c3e1_prof);

        
        $__internal_b234394e6b140da91c35e6be7338f6932ca12c0ed840d2a8fee526e172314297->leave($__internal_b234394e6b140da91c35e6be7338f6932ca12c0ed840d2a8fee526e172314297_prof);

    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 13,  118 => 54,  112 => 51,  105 => 47,  96 => 41,  87 => 35,  78 => 29,  69 => 23,  60 => 17,  55 => 15,  50 => 13,  45 => 11,  40 => 9,  32 => 4,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set __PAGE__ = app.request.attributes.get('_route') %}

<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link rel=\"stylesheet\" href=\"{{ path('front_template_stylesheets') }}\" />

        {{ hook(\"header\", __PAGE__) }}

        <title>{% block title %}{% endblock %}</title>
    </head>
    <body class=\"page_{{ __PAGE__ }}\">
        <!-- BEGIN PAGE HEADER -->
        {{ hook(\"displayHeader\", __PAGE__) }}
        <!-- END PAGE HEADER -->

        <!-- BEGIN PAGE CONTENT -->
        <section class=\"container\">
            <!-- BEGIN PAGE CONTENT TOP -->
            {{ hook(\"displayContentTop\", __PAGE__) }}
            <!-- END PAGE CONTENT TOP -->

            <section class=\"row\">
                <!-- BEGIN PAGE CONTENT MAIN -->
                <section class=\"col-sm-8 col-md-9 col-lg-9 col-xs-12\">
                    {{ hook(\"displayContentMain\", __PAGE__) }}
                </section>
                <!-- END PAGE CONTENT MAIN -->

                <!-- BEGIN PAGE CONTENT SIDEBAR -->
                <section class=\"col-sm-4 col-md-3 col-lg-3 col-xs-12\">
                    {{ hook(\"displayContentSidebar\", __PAGE__) }}
                </section>
                <!-- END PAGE CONTENT SIDEBAR -->
            </section>

            <!-- BEGIN PAGE CONTENT BOTTOM -->
            {{ hook(\"displayContentBottom\", __PAGE__) }}
            <!-- END PAGE CONTENT BOTTOM -->
        </section>
        <!-- END PAGE CONTENT -->

        <footer>
            {{ hook(\"displayFooter\", __PAGE__) }}
        </footer>
    </body>

    <script type=\"text/javascript\" src=\"{{ path('front_template_javascripts')}}\"></script>

    <!-- BEGIN CUSTOM JAVASCRIPTS -->
    {{ hook(\"javascripts\", __PAGE__) }}
    <!-- END CUSTOM JAVASCRIPTS -->
</html>
", "::front.html.twig", "/var/www/html/app/Resources/views/front.html.twig");
    }
}
