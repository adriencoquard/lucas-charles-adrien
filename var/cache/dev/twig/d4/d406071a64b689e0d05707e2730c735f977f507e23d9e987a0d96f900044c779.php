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
        $__internal_3d04db988f21d87312064b0da4c95589d3905c1a7ca39fd92601605cb97d3e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d04db988f21d87312064b0da4c95589d3905c1a7ca39fd92601605cb97d3e48->enter($__internal_3d04db988f21d87312064b0da4c95589d3905c1a7ca39fd92601605cb97d3e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1eda770e3fac04be60cd0efdc7d383e15a36617f99dcbe7db485d3f8a664e245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eda770e3fac04be60cd0efdc7d383e15a36617f99dcbe7db485d3f8a664e245->enter($__internal_1eda770e3fac04be60cd0efdc7d383e15a36617f99dcbe7db485d3f8a664e245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d04db988f21d87312064b0da4c95589d3905c1a7ca39fd92601605cb97d3e48->leave($__internal_3d04db988f21d87312064b0da4c95589d3905c1a7ca39fd92601605cb97d3e48_prof);

        
        $__internal_1eda770e3fac04be60cd0efdc7d383e15a36617f99dcbe7db485d3f8a664e245->leave($__internal_1eda770e3fac04be60cd0efdc7d383e15a36617f99dcbe7db485d3f8a664e245_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_349d6c2dc93d66709f1de1a5f4426a6eaca84aefc6b948bafd6808a11d61b298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349d6c2dc93d66709f1de1a5f4426a6eaca84aefc6b948bafd6808a11d61b298->enter($__internal_349d6c2dc93d66709f1de1a5f4426a6eaca84aefc6b948bafd6808a11d61b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_680cbe3eeb38b027d68af2d0dca625a28fcded753a6d62f09397f099af78ffca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680cbe3eeb38b027d68af2d0dca625a28fcded753a6d62f09397f099af78ffca->enter($__internal_680cbe3eeb38b027d68af2d0dca625a28fcded753a6d62f09397f099af78ffca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_680cbe3eeb38b027d68af2d0dca625a28fcded753a6d62f09397f099af78ffca->leave($__internal_680cbe3eeb38b027d68af2d0dca625a28fcded753a6d62f09397f099af78ffca_prof);

        
        $__internal_349d6c2dc93d66709f1de1a5f4426a6eaca84aefc6b948bafd6808a11d61b298->leave($__internal_349d6c2dc93d66709f1de1a5f4426a6eaca84aefc6b948bafd6808a11d61b298_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff9a7be6a34b1c6861a70846c0da0a85c68691a0b5e3ab990591d45fdbe14287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9a7be6a34b1c6861a70846c0da0a85c68691a0b5e3ab990591d45fdbe14287->enter($__internal_ff9a7be6a34b1c6861a70846c0da0a85c68691a0b5e3ab990591d45fdbe14287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d9d83b4ce08555c12be35af2ede80504e94e15fe74449db4b6d6bd9860479a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9d83b4ce08555c12be35af2ede80504e94e15fe74449db4b6d6bd9860479a3->enter($__internal_3d9d83b4ce08555c12be35af2ede80504e94e15fe74449db4b6d6bd9860479a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3d9d83b4ce08555c12be35af2ede80504e94e15fe74449db4b6d6bd9860479a3->leave($__internal_3d9d83b4ce08555c12be35af2ede80504e94e15fe74449db4b6d6bd9860479a3_prof);

        
        $__internal_ff9a7be6a34b1c6861a70846c0da0a85c68691a0b5e3ab990591d45fdbe14287->leave($__internal_ff9a7be6a34b1c6861a70846c0da0a85c68691a0b5e3ab990591d45fdbe14287_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7c640b63a57e9ad622f43e651d88b0c7915ecb7af9b29f5a0f7b289398865d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7c640b63a57e9ad622f43e651d88b0c7915ecb7af9b29f5a0f7b289398865d->enter($__internal_3e7c640b63a57e9ad622f43e651d88b0c7915ecb7af9b29f5a0f7b289398865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd011ce64e70c4282db60bfc95fe7f2348f2ba3fe80263780b15ae45ade7f567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd011ce64e70c4282db60bfc95fe7f2348f2ba3fe80263780b15ae45ade7f567->enter($__internal_cd011ce64e70c4282db60bfc95fe7f2348f2ba3fe80263780b15ae45ade7f567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cd011ce64e70c4282db60bfc95fe7f2348f2ba3fe80263780b15ae45ade7f567->leave($__internal_cd011ce64e70c4282db60bfc95fe7f2348f2ba3fe80263780b15ae45ade7f567_prof);

        
        $__internal_3e7c640b63a57e9ad622f43e651d88b0c7915ecb7af9b29f5a0f7b289398865d->leave($__internal_3e7c640b63a57e9ad622f43e651d88b0c7915ecb7af9b29f5a0f7b289398865d_prof);

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
