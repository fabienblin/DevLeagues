<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dfc8f14a0af797f9a6c76b97fc3caddd20c5164dc17577317b448c850f2e7605 extends Twig_Template
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
        $__internal_9d0c8869e2a80d94f107602bfefd977cf5eb7f17ca3526523aa61ddb3eb89a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0c8869e2a80d94f107602bfefd977cf5eb7f17ca3526523aa61ddb3eb89a2b->enter($__internal_9d0c8869e2a80d94f107602bfefd977cf5eb7f17ca3526523aa61ddb3eb89a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_65d2b4a5e52732d166731b327a1ce4a44cdc0f8a1b7e792dee209f0c7e122846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d2b4a5e52732d166731b327a1ce4a44cdc0f8a1b7e792dee209f0c7e122846->enter($__internal_65d2b4a5e52732d166731b327a1ce4a44cdc0f8a1b7e792dee209f0c7e122846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0c8869e2a80d94f107602bfefd977cf5eb7f17ca3526523aa61ddb3eb89a2b->leave($__internal_9d0c8869e2a80d94f107602bfefd977cf5eb7f17ca3526523aa61ddb3eb89a2b_prof);

        
        $__internal_65d2b4a5e52732d166731b327a1ce4a44cdc0f8a1b7e792dee209f0c7e122846->leave($__internal_65d2b4a5e52732d166731b327a1ce4a44cdc0f8a1b7e792dee209f0c7e122846_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9487a1244f22bfc426d93f48afa9e6b9f06dd8103ee9e559fa554c133b6314b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9487a1244f22bfc426d93f48afa9e6b9f06dd8103ee9e559fa554c133b6314b->enter($__internal_d9487a1244f22bfc426d93f48afa9e6b9f06dd8103ee9e559fa554c133b6314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f75abb711c9e1100c2e3dd2000ca17e3070bc8faf38284f3b478ccf6de2e3141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75abb711c9e1100c2e3dd2000ca17e3070bc8faf38284f3b478ccf6de2e3141->enter($__internal_f75abb711c9e1100c2e3dd2000ca17e3070bc8faf38284f3b478ccf6de2e3141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f75abb711c9e1100c2e3dd2000ca17e3070bc8faf38284f3b478ccf6de2e3141->leave($__internal_f75abb711c9e1100c2e3dd2000ca17e3070bc8faf38284f3b478ccf6de2e3141_prof);

        
        $__internal_d9487a1244f22bfc426d93f48afa9e6b9f06dd8103ee9e559fa554c133b6314b->leave($__internal_d9487a1244f22bfc426d93f48afa9e6b9f06dd8103ee9e559fa554c133b6314b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9771f73c8c3ed04fafdfbdbee3584c2635f788b0eb6a1988926bc4420d449365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9771f73c8c3ed04fafdfbdbee3584c2635f788b0eb6a1988926bc4420d449365->enter($__internal_9771f73c8c3ed04fafdfbdbee3584c2635f788b0eb6a1988926bc4420d449365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21629600724ffd410a1071a1b33cc9a38468139b3f90a66a9af16786ac41af7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21629600724ffd410a1071a1b33cc9a38468139b3f90a66a9af16786ac41af7c->enter($__internal_21629600724ffd410a1071a1b33cc9a38468139b3f90a66a9af16786ac41af7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21629600724ffd410a1071a1b33cc9a38468139b3f90a66a9af16786ac41af7c->leave($__internal_21629600724ffd410a1071a1b33cc9a38468139b3f90a66a9af16786ac41af7c_prof);

        
        $__internal_9771f73c8c3ed04fafdfbdbee3584c2635f788b0eb6a1988926bc4420d449365->leave($__internal_9771f73c8c3ed04fafdfbdbee3584c2635f788b0eb6a1988926bc4420d449365_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a537a4492496123c0f45e5ddf25acdca263bb44441d9e15ad34e60177f858fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a537a4492496123c0f45e5ddf25acdca263bb44441d9e15ad34e60177f858fdc->enter($__internal_a537a4492496123c0f45e5ddf25acdca263bb44441d9e15ad34e60177f858fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_305b68162ab6644ab2c6c3d07e5089fd4c767d8a918a569697cbc5b43b934962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305b68162ab6644ab2c6c3d07e5089fd4c767d8a918a569697cbc5b43b934962->enter($__internal_305b68162ab6644ab2c6c3d07e5089fd4c767d8a918a569697cbc5b43b934962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_305b68162ab6644ab2c6c3d07e5089fd4c767d8a918a569697cbc5b43b934962->leave($__internal_305b68162ab6644ab2c6c3d07e5089fd4c767d8a918a569697cbc5b43b934962_prof);

        
        $__internal_a537a4492496123c0f45e5ddf25acdca263bb44441d9e15ad34e60177f858fdc->leave($__internal_a537a4492496123c0f45e5ddf25acdca263bb44441d9e15ad34e60177f858fdc_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
