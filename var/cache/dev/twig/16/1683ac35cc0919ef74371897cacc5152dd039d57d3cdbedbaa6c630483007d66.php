<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fe937ab42c99a8aaf06cdb418f42724d1cd9fe1940441749b8dd8c7b015976df extends Twig_Template
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
        $__internal_2cc1d5711538f09c6646a30f83def02d5f62cc874d30bd2ab1920226b4ce88a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc1d5711538f09c6646a30f83def02d5f62cc874d30bd2ab1920226b4ce88a0->enter($__internal_2cc1d5711538f09c6646a30f83def02d5f62cc874d30bd2ab1920226b4ce88a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7104a084d315811ded7d6addb2841b5d961d12f62dc35a7b140d539b55f35cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7104a084d315811ded7d6addb2841b5d961d12f62dc35a7b140d539b55f35cff->enter($__internal_7104a084d315811ded7d6addb2841b5d961d12f62dc35a7b140d539b55f35cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2cc1d5711538f09c6646a30f83def02d5f62cc874d30bd2ab1920226b4ce88a0->leave($__internal_2cc1d5711538f09c6646a30f83def02d5f62cc874d30bd2ab1920226b4ce88a0_prof);

        
        $__internal_7104a084d315811ded7d6addb2841b5d961d12f62dc35a7b140d539b55f35cff->leave($__internal_7104a084d315811ded7d6addb2841b5d961d12f62dc35a7b140d539b55f35cff_prof);

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
