<?php

/* @AvanzuAdminTheme/Sidebar/search-form.html.twig */
class __TwigTemplate_58602b1f5c5faf97ba372a240ca1c41862f607dabc13654614f0238ddfd44ff3 extends Twig_Template
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
        $__internal_d5cfa55a3182697bfa1901d42999cf9353ae439b85b96a3cbdab39e346f6db2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cfa55a3182697bfa1901d42999cf9353ae439b85b96a3cbdab39e346f6db2a->enter($__internal_d5cfa55a3182697bfa1901d42999cf9353ae439b85b96a3cbdab39e346f6db2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

        $__internal_711886095525c28f7b317c55d609708d935a3322346bf0cfe7640e3df67bc379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711886095525c28f7b317c55d609708d935a3322346bf0cfe7640e3df67bc379->enter($__internal_711886095525c28f7b317c55d609708d935a3322346bf0cfe7640e3df67bc379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

        // line 1
        echo "<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->";
        
        $__internal_d5cfa55a3182697bfa1901d42999cf9353ae439b85b96a3cbdab39e346f6db2a->leave($__internal_d5cfa55a3182697bfa1901d42999cf9353ae439b85b96a3cbdab39e346f6db2a_prof);

        
        $__internal_711886095525c28f7b317c55d609708d935a3322346bf0cfe7640e3df67bc379->leave($__internal_711886095525c28f7b317c55d609708d935a3322346bf0cfe7640e3df67bc379_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Sidebar/search-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->", "@AvanzuAdminTheme/Sidebar/search-form.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Sidebar/search-form.html.twig");
    }
}
