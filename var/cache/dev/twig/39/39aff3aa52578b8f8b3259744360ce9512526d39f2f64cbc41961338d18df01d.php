<?php

/* @AvanzuAdminTheme/Sidebar/search-form.html.twig */
class __TwigTemplate_5af158e709baafa14d1c5b63bcc606acc9bb73d8dc45e52831acefca475e118e extends Twig_Template
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
        $__internal_8d7ef4b032a800d4d026010e8cf73420045ba2515afd665df3a899e83dcbd26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7ef4b032a800d4d026010e8cf73420045ba2515afd665df3a899e83dcbd26b->enter($__internal_8d7ef4b032a800d4d026010e8cf73420045ba2515afd665df3a899e83dcbd26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

        $__internal_affd83709e671bf29aaf3d1da8132eafd45a69f1a9241bcd32b167c33f5e6575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affd83709e671bf29aaf3d1da8132eafd45a69f1a9241bcd32b167c33f5e6575->enter($__internal_affd83709e671bf29aaf3d1da8132eafd45a69f1a9241bcd32b167c33f5e6575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/search-form.html.twig"));

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
        
        $__internal_8d7ef4b032a800d4d026010e8cf73420045ba2515afd665df3a899e83dcbd26b->leave($__internal_8d7ef4b032a800d4d026010e8cf73420045ba2515afd665df3a899e83dcbd26b_prof);

        
        $__internal_affd83709e671bf29aaf3d1da8132eafd45a69f1a9241bcd32b167c33f5e6575->leave($__internal_affd83709e671bf29aaf3d1da8132eafd45a69f1a9241bcd32b167c33f5e6575_prof);

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
