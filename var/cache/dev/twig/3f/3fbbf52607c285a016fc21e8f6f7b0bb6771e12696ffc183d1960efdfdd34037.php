<?php

/* @AvanzuAdminTheme/Sidebar/menu.html.twig */
class __TwigTemplate_e31dec7f81c3f16998e1b7e315930c6e9fdbe68ab47b3cf98af1112e4f188e3b extends Twig_Template
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
        $__internal_c742780c299806f8392d518886730cb5f4307a3ce42029a2d4dca376e1fcaf20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c742780c299806f8392d518886730cb5f4307a3ce42029a2d4dca376e1fcaf20->enter($__internal_c742780c299806f8392d518886730cb5f4307a3ce42029a2d4dca376e1fcaf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/menu.html.twig"));

        $__internal_55cb3dd92678785f9c460e6c06502f7930e4437bd1b6d9f8bec7ab536b0ccfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cb3dd92678785f9c460e6c06502f7930e4437bd1b6d9f8bec7ab536b0ccfb6->enter($__internal_55cb3dd92678785f9c460e6c06502f7930e4437bd1b6d9f8bec7ab536b0ccfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/menu.html.twig"));

        // line 1
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/Sidebar/menu.html.twig", 2);
        // line 3
        echo "<ul class=\"sidebar-menu\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            echo $context["macro"]->getmenu_item($context["item"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_c742780c299806f8392d518886730cb5f4307a3ce42029a2d4dca376e1fcaf20->leave($__internal_c742780c299806f8392d518886730cb5f4307a3ce42029a2d4dca376e1fcaf20_prof);

        
        $__internal_55cb3dd92678785f9c460e6c06502f7930e4437bd1b6d9f8bec7ab536b0ccfb6->leave($__internal_55cb3dd92678785f9c460e6c06502f7930e4437bd1b6d9f8bec7ab536b0ccfb6_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Sidebar/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  37 => 5,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- sidebar menu: : style can be found in sidebar.less -->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<ul class=\"sidebar-menu\">
    {% for item in menu %}
        {{ macro.menu_item(item) }}
    {% endfor %}
</ul>", "@AvanzuAdminTheme/Sidebar/menu.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Sidebar/menu.html.twig");
    }
}
