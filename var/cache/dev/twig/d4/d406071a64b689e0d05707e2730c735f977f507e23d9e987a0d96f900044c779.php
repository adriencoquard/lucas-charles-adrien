<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d35cdf5bcfdd598065bb6225db5ff46516feb07b0fe454769658c538e0953587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b404194b701c5600c938a41d1d8a2f61ee64150a101c43ebac36db4aceae22da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b404194b701c5600c938a41d1d8a2f61ee64150a101c43ebac36db4aceae22da->enter($__internal_b404194b701c5600c938a41d1d8a2f61ee64150a101c43ebac36db4aceae22da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5418bf486db6f977614a33f5a02b748733a729a9ab48ee807c98c7d142d1eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5418bf486db6f977614a33f5a02b748733a729a9ab48ee807c98c7d142d1eae0->enter($__internal_5418bf486db6f977614a33f5a02b748733a729a9ab48ee807c98c7d142d1eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b404194b701c5600c938a41d1d8a2f61ee64150a101c43ebac36db4aceae22da->leave($__internal_b404194b701c5600c938a41d1d8a2f61ee64150a101c43ebac36db4aceae22da_prof);

        
        $__internal_5418bf486db6f977614a33f5a02b748733a729a9ab48ee807c98c7d142d1eae0->leave($__internal_5418bf486db6f977614a33f5a02b748733a729a9ab48ee807c98c7d142d1eae0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb9f06841cc879901b38e5c42254bd614e76d3f3ecbd6486503e82baeb55d5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9f06841cc879901b38e5c42254bd614e76d3f3ecbd6486503e82baeb55d5e8->enter($__internal_bb9f06841cc879901b38e5c42254bd614e76d3f3ecbd6486503e82baeb55d5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf56a1998e3e9b194197b73b0d040100549c0bfcebf2a19652f8a9390269f290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf56a1998e3e9b194197b73b0d040100549c0bfcebf2a19652f8a9390269f290->enter($__internal_cf56a1998e3e9b194197b73b0d040100549c0bfcebf2a19652f8a9390269f290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cf56a1998e3e9b194197b73b0d040100549c0bfcebf2a19652f8a9390269f290->leave($__internal_cf56a1998e3e9b194197b73b0d040100549c0bfcebf2a19652f8a9390269f290_prof);

        
        $__internal_bb9f06841cc879901b38e5c42254bd614e76d3f3ecbd6486503e82baeb55d5e8->leave($__internal_bb9f06841cc879901b38e5c42254bd614e76d3f3ecbd6486503e82baeb55d5e8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ede2d214303ae5bf0113fb0937d066bb0203ee207a6d078c36629dcc7e1eb974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede2d214303ae5bf0113fb0937d066bb0203ee207a6d078c36629dcc7e1eb974->enter($__internal_ede2d214303ae5bf0113fb0937d066bb0203ee207a6d078c36629dcc7e1eb974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6cfcd09d24cd5700b061b966abddc9ec4620d189ac97cc31f36bbfebb03a64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cfcd09d24cd5700b061b966abddc9ec4620d189ac97cc31f36bbfebb03a64c->enter($__internal_c6cfcd09d24cd5700b061b966abddc9ec4620d189ac97cc31f36bbfebb03a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c6cfcd09d24cd5700b061b966abddc9ec4620d189ac97cc31f36bbfebb03a64c->leave($__internal_c6cfcd09d24cd5700b061b966abddc9ec4620d189ac97cc31f36bbfebb03a64c_prof);

        
        $__internal_ede2d214303ae5bf0113fb0937d066bb0203ee207a6d078c36629dcc7e1eb974->leave($__internal_ede2d214303ae5bf0113fb0937d066bb0203ee207a6d078c36629dcc7e1eb974_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c260b5935fbeefeb9cbe17f3cb849dd78d2c61d429fc2114e1fd0e6a2a8d8f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c260b5935fbeefeb9cbe17f3cb849dd78d2c61d429fc2114e1fd0e6a2a8d8f44->enter($__internal_c260b5935fbeefeb9cbe17f3cb849dd78d2c61d429fc2114e1fd0e6a2a8d8f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68eb3604ff9e67c5bbef4f7fa67ccf89191bbb1a456592e1b9abbcb184bbb128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68eb3604ff9e67c5bbef4f7fa67ccf89191bbb1a456592e1b9abbcb184bbb128->enter($__internal_68eb3604ff9e67c5bbef4f7fa67ccf89191bbb1a456592e1b9abbcb184bbb128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_68eb3604ff9e67c5bbef4f7fa67ccf89191bbb1a456592e1b9abbcb184bbb128->leave($__internal_68eb3604ff9e67c5bbef4f7fa67ccf89191bbb1a456592e1b9abbcb184bbb128_prof);

        
        $__internal_c260b5935fbeefeb9cbe17f3cb849dd78d2c61d429fc2114e1fd0e6a2a8d8f44->leave($__internal_c260b5935fbeefeb9cbe17f3cb849dd78d2c61d429fc2114e1fd0e6a2a8d8f44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
