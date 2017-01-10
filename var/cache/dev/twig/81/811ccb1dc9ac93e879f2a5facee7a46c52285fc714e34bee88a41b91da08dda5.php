<?php

/* @AvanzuAdminTheme/Sidebar/menu.html.twig */
class __TwigTemplate_ef47628028e3b8be7d90ac8b5016f7bce18b4d8d7ef699e8229d6b5ef43dc7c5 extends Twig_Template
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
        $__internal_58c9a46df78b5522b769737a298ab6d336f5ab91e35064fc112422fc5949b9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c9a46df78b5522b769737a298ab6d336f5ab91e35064fc112422fc5949b9a8->enter($__internal_58c9a46df78b5522b769737a298ab6d336f5ab91e35064fc112422fc5949b9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/menu.html.twig"));

        $__internal_9e572f92f85c79bce101b79106c730fb8fd60d9e1a80610f8a5efba7bad2be61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e572f92f85c79bce101b79106c730fb8fd60d9e1a80610f8a5efba7bad2be61->enter($__internal_9e572f92f85c79bce101b79106c730fb8fd60d9e1a80610f8a5efba7bad2be61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/menu.html.twig"));

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
        
        $__internal_58c9a46df78b5522b769737a298ab6d336f5ab91e35064fc112422fc5949b9a8->leave($__internal_58c9a46df78b5522b769737a298ab6d336f5ab91e35064fc112422fc5949b9a8_prof);

        
        $__internal_9e572f92f85c79bce101b79106c730fb8fd60d9e1a80610f8a5efba7bad2be61->leave($__internal_9e572f92f85c79bce101b79106c730fb8fd60d9e1a80610f8a5efba7bad2be61_prof);

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
