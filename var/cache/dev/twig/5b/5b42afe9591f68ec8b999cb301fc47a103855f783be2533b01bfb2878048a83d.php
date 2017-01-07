<?php

/* @AvanzuAdminTheme/Sidebar/search-form.html.twig */
class __TwigTemplate_f43a93f47dfd17c9847702c3e0dd872fdfc2be119fe5cda0f2cfd41a21c4941d extends Twig_Template
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
        $__internal_1aa55dd442e8b334f0647bf7cc85f99e110a46e857f7103d87d5ff2b99da5b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa55dd442e8b334f0647bf7cc85f99e110a46e857f7103d87d5ff2b99da5b97->enter($__internal_1aa55dd442e8b334f0647bf7cc85f99e110a46e857f7103d87d5ff2b99da5b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

        $__internal_728c08b733ca15228b762a717d3b5e40f5ee874180feb352197cdb9753b2ea3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728c08b733ca15228b762a717d3b5e40f5ee874180feb352197cdb9753b2ea3a->enter($__internal_728c08b733ca15228b762a717d3b5e40f5ee874180feb352197cdb9753b2ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

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
        
        $__internal_1aa55dd442e8b334f0647bf7cc85f99e110a46e857f7103d87d5ff2b99da5b97->leave($__internal_1aa55dd442e8b334f0647bf7cc85f99e110a46e857f7103d87d5ff2b99da5b97_prof);

        
        $__internal_728c08b733ca15228b762a717d3b5e40f5ee874180feb352197cdb9753b2ea3a->leave($__internal_728c08b733ca15228b762a717d3b5e40f5ee874180feb352197cdb9753b2ea3a_prof);

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
<!-- /.search form -->", "@AvanzuAdminTheme/Sidebar/search-form.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Sidebar/search-form.html.twig");
    }
}
