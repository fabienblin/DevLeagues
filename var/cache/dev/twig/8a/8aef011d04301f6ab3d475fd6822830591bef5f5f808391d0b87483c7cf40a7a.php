<?php

/* AvanzuAdminThemeBundle:Sidebar:search-form.html.twig */
class __TwigTemplate_f5a4d6eb3cc68ea46b41666483cdcd87e8d9e7ef62d45848030ba6ad47756022 extends Twig_Template
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
        $__internal_d2be3852d432748601f9d19fb58c3d508e9bde49ad03f8be06665c782b11c282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2be3852d432748601f9d19fb58c3d508e9bde49ad03f8be06665c782b11c282->enter($__internal_d2be3852d432748601f9d19fb58c3d508e9bde49ad03f8be06665c782b11c282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig"));

        $__internal_250d5b264df395245fe2743c4ddbde2363863e5a49a3ea3879d52257cfa63bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250d5b264df395245fe2743c4ddbde2363863e5a49a3ea3879d52257cfa63bc1->enter($__internal_250d5b264df395245fe2743c4ddbde2363863e5a49a3ea3879d52257cfa63bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig"));

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
        
        $__internal_d2be3852d432748601f9d19fb58c3d508e9bde49ad03f8be06665c782b11c282->leave($__internal_d2be3852d432748601f9d19fb58c3d508e9bde49ad03f8be06665c782b11c282_prof);

        
        $__internal_250d5b264df395245fe2743c4ddbde2363863e5a49a3ea3879d52257cfa63bc1->leave($__internal_250d5b264df395245fe2743c4ddbde2363863e5a49a3ea3879d52257cfa63bc1_prof);

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
