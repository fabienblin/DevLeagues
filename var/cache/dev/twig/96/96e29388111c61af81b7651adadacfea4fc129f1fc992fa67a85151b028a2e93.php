<?php

/* @DevLeagues/Sidebar/menu.html.twig */
class __TwigTemplate_6ce2ca111007c122fef46445cbace82bf5d56cf5581e7e048b052f0247f78306 extends Twig_Template
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
        $__internal_83055e299bba2fd584432c9c6422fa63c21a11a2c12e3857a7a225ba8bb9c973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83055e299bba2fd584432c9c6422fa63c21a11a2c12e3857a7a225ba8bb9c973->enter($__internal_83055e299bba2fd584432c9c6422fa63c21a11a2c12e3857a7a225ba8bb9c973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Sidebar/menu.html.twig"));

        $__internal_4917156506225b27e60906b1eff245b507937bc1e6c13e97b15b502bdc2ebf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4917156506225b27e60906b1eff245b507937bc1e6c13e97b15b502bdc2ebf78->enter($__internal_4917156506225b27e60906b1eff245b507937bc1e6c13e97b15b502bdc2ebf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Sidebar/menu.html.twig"));

        // line 1
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@DevLeagues/Sidebar/menu.html.twig", 2);
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
        echo "</ul>
";
        
        $__internal_83055e299bba2fd584432c9c6422fa63c21a11a2c12e3857a7a225ba8bb9c973->leave($__internal_83055e299bba2fd584432c9c6422fa63c21a11a2c12e3857a7a225ba8bb9c973_prof);

        
        $__internal_4917156506225b27e60906b1eff245b507937bc1e6c13e97b15b502bdc2ebf78->leave($__internal_4917156506225b27e60906b1eff245b507937bc1e6c13e97b15b502bdc2ebf78_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Sidebar/menu.html.twig";
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
</ul>
", "@DevLeagues/Sidebar/menu.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Sidebar/menu.html.twig");
    }
}
