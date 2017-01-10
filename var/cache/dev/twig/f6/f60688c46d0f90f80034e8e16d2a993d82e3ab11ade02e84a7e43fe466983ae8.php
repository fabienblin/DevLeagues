<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2eb7855ae35315e2a4d858066efc123b5f96f17ba58892207046797da7ebe167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_372d41ff8748c8e8b5598b7b711b15400bd9f997c0b1f1f874012ad0a5c1bbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372d41ff8748c8e8b5598b7b711b15400bd9f997c0b1f1f874012ad0a5c1bbb4->enter($__internal_372d41ff8748c8e8b5598b7b711b15400bd9f997c0b1f1f874012ad0a5c1bbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d879f52f02732efdf78d16e53b16095a9b9edd3dc6674240fff43896eaa02876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d879f52f02732efdf78d16e53b16095a9b9edd3dc6674240fff43896eaa02876->enter($__internal_d879f52f02732efdf78d16e53b16095a9b9edd3dc6674240fff43896eaa02876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_372d41ff8748c8e8b5598b7b711b15400bd9f997c0b1f1f874012ad0a5c1bbb4->leave($__internal_372d41ff8748c8e8b5598b7b711b15400bd9f997c0b1f1f874012ad0a5c1bbb4_prof);

        
        $__internal_d879f52f02732efdf78d16e53b16095a9b9edd3dc6674240fff43896eaa02876->leave($__internal_d879f52f02732efdf78d16e53b16095a9b9edd3dc6674240fff43896eaa02876_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
