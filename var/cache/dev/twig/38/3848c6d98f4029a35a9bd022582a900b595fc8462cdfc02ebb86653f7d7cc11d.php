<?php

/* @AvanzuAdminTheme/Sidebar/menu.html.twig */
class __TwigTemplate_a103df6b2cf2a7393c47ccec3ecde7ceebfbf464d5f7ae836e246e8144b8d4be extends Twig_Template
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
        $__internal_8548b55c7806ecd77fd8e80247b3322d10979394f3ca40a8f59d33bbdb935e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8548b55c7806ecd77fd8e80247b3322d10979394f3ca40a8f59d33bbdb935e05->enter($__internal_8548b55c7806ecd77fd8e80247b3322d10979394f3ca40a8f59d33bbdb935e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/menu.html.twig"));

        $__internal_70363dcfe2d8843350d7e8fcbc656e7b9a648c035eeff83cfe2d345c5da65d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70363dcfe2d8843350d7e8fcbc656e7b9a648c035eeff83cfe2d345c5da65d70->enter($__internal_70363dcfe2d8843350d7e8fcbc656e7b9a648c035eeff83cfe2d345c5da65d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/menu.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
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
        
        $__internal_8548b55c7806ecd77fd8e80247b3322d10979394f3ca40a8f59d33bbdb935e05->leave($__internal_8548b55c7806ecd77fd8e80247b3322d10979394f3ca40a8f59d33bbdb935e05_prof);

        
        $__internal_70363dcfe2d8843350d7e8fcbc656e7b9a648c035eeff83cfe2d345c5da65d70->leave($__internal_70363dcfe2d8843350d7e8fcbc656e7b9a648c035eeff83cfe2d345c5da65d70_prof);

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
</ul>", "@AvanzuAdminTheme/Sidebar/menu.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Sidebar/menu.html.twig");
    }
}
