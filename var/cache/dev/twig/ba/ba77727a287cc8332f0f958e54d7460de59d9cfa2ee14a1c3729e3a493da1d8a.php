<?php

/* AvanzuAdminThemeBundle:Sidebar:search-form.html.twig */
class __TwigTemplate_fd9c662a84ceb626f2b6347dc856c27ac51fa34be85a27791bbdd0e39d604513 extends Twig_Template
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
        $__internal_d803e6231045da2ff6dcf5358478a008a15a3ca056bcf031b39e7df75e5984e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d803e6231045da2ff6dcf5358478a008a15a3ca056bcf031b39e7df75e5984e4->enter($__internal_d803e6231045da2ff6dcf5358478a008a15a3ca056bcf031b39e7df75e5984e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig"));

        $__internal_057b2848195f9b1aa63ba794c5daee3f2b5ca26cf7e244c1f634d86e5cc915f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057b2848195f9b1aa63ba794c5daee3f2b5ca26cf7e244c1f634d86e5cc915f7->enter($__internal_057b2848195f9b1aa63ba794c5daee3f2b5ca26cf7e244c1f634d86e5cc915f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig"));

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
        
        $__internal_d803e6231045da2ff6dcf5358478a008a15a3ca056bcf031b39e7df75e5984e4->leave($__internal_d803e6231045da2ff6dcf5358478a008a15a3ca056bcf031b39e7df75e5984e4_prof);

        
        $__internal_057b2848195f9b1aa63ba794c5daee3f2b5ca26cf7e244c1f634d86e5cc915f7->leave($__internal_057b2848195f9b1aa63ba794c5daee3f2b5ca26cf7e244c1f634d86e5cc915f7_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig";
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
<!-- /.search form -->", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/Sidebar/search-form.html.twig");
    }
}
