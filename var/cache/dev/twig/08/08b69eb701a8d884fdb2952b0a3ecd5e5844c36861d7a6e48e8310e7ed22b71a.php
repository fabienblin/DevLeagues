<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_5a2c0f2a627cf305e02c545371acf249d7898bc2e67692cb93aefb89e3ddc7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c68fe22affffff9206befeb8effe13c789a803889704a1c213ae2ab702133752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68fe22affffff9206befeb8effe13c789a803889704a1c213ae2ab702133752->enter($__internal_c68fe22affffff9206befeb8effe13c789a803889704a1c213ae2ab702133752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_98d378df86458bfe02dbd3b1d8afe68e1c1dd4806c4e6de47153b0ee42786ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d378df86458bfe02dbd3b1d8afe68e1c1dd4806c4e6de47153b0ee42786ff9->enter($__internal_98d378df86458bfe02dbd3b1d8afe68e1c1dd4806c4e6de47153b0ee42786ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68fe22affffff9206befeb8effe13c789a803889704a1c213ae2ab702133752->leave($__internal_c68fe22affffff9206befeb8effe13c789a803889704a1c213ae2ab702133752_prof);

        
        $__internal_98d378df86458bfe02dbd3b1d8afe68e1c1dd4806c4e6de47153b0ee42786ff9->leave($__internal_98d378df86458bfe02dbd3b1d8afe68e1c1dd4806c4e6de47153b0ee42786ff9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1d3e990288c21d87f271aebc0365556e834ff776eb1ddd372e2c4c6ec839b0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3e990288c21d87f271aebc0365556e834ff776eb1ddd372e2c4c6ec839b0b3->enter($__internal_1d3e990288c21d87f271aebc0365556e834ff776eb1ddd372e2c4c6ec839b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a10eff2881d0793d69d7895bdc6a715c07c4987ac36f93fa898856f02db0534c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10eff2881d0793d69d7895bdc6a715c07c4987ac36f93fa898856f02db0534c->enter($__internal_a10eff2881d0793d69d7895bdc6a715c07c4987ac36f93fa898856f02db0534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a10eff2881d0793d69d7895bdc6a715c07c4987ac36f93fa898856f02db0534c->leave($__internal_a10eff2881d0793d69d7895bdc6a715c07c4987ac36f93fa898856f02db0534c_prof);

        
        $__internal_1d3e990288c21d87f271aebc0365556e834ff776eb1ddd372e2c4c6ec839b0b3->leave($__internal_1d3e990288c21d87f271aebc0365556e834ff776eb1ddd372e2c4c6ec839b0b3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47e4038ad127dcbe935b3b9e2297f80c29c2832f3a9f6b6a46312c8bc479e98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e4038ad127dcbe935b3b9e2297f80c29c2832f3a9f6b6a46312c8bc479e98a->enter($__internal_47e4038ad127dcbe935b3b9e2297f80c29c2832f3a9f6b6a46312c8bc479e98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1f5df8c3842d54b0352ec931a70508656584a02e031dfdc78e8adfdd8b2253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f5df8c3842d54b0352ec931a70508656584a02e031dfdc78e8adfdd8b2253b->enter($__internal_c1f5df8c3842d54b0352ec931a70508656584a02e031dfdc78e8adfdd8b2253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c1f5df8c3842d54b0352ec931a70508656584a02e031dfdc78e8adfdd8b2253b->leave($__internal_c1f5df8c3842d54b0352ec931a70508656584a02e031dfdc78e8adfdd8b2253b_prof);

        
        $__internal_47e4038ad127dcbe935b3b9e2297f80c29c2832f3a9f6b6a46312c8bc479e98a->leave($__internal_47e4038ad127dcbe935b3b9e2297f80c29c2832f3a9f6b6a46312c8bc479e98a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
