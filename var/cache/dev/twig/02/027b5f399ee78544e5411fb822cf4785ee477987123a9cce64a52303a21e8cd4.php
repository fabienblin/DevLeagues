<?php

/* @AvanzuAdminTheme/Breadcrumb/breadcrumb.html.twig */
class __TwigTemplate_ebf08f224190a952b62921b5f19b01e384102beda1e88d66ee0bcc1341630743 extends Twig_Template
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
        $__internal_1099ea45d4d8537e633a0528c54f946c4256f417fea82577a1770a11a861f398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1099ea45d4d8537e633a0528c54f946c4256f417fea82577a1770a11a861f398->enter($__internal_1099ea45d4d8537e633a0528c54f946c4256f417fea82577a1770a11a861f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Breadcrumb/breadcrumb.html.twig"));

        $__internal_c060e31d5e8a1e3359c3e1aed21106dc958844bddd4be05df8aaaa6d8b50e517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c060e31d5e8a1e3359c3e1aed21106dc958844bddd4be05df8aaaa6d8b50e517->enter($__internal_c060e31d5e8a1e3359c3e1aed21106dc958844bddd4be05df8aaaa6d8b50e517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Breadcrumb/breadcrumb.html.twig"));

        // line 1
        echo "<ol class=\"breadcrumb\">
    <li>
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_home");
        echo "\">
            <i class=\"fa fa-dashboard\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 8
        if (($context["active"] ?? $this->getContext($context, "active"))) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["active"] ?? $this->getContext($context, "active")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["item"], "route", array()))) ? ("#") : (((twig_in_filter("/", $this->getAttribute($context["item"], "route", array()))) ? ($this->getAttribute($context["item"], "route", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", array()), $this->getAttribute($context["item"], "routeArgs", array())))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</li>
</ol>";
        
        $__internal_1099ea45d4d8537e633a0528c54f946c4256f417fea82577a1770a11a861f398->leave($__internal_1099ea45d4d8537e633a0528c54f946c4256f417fea82577a1770a11a861f398_prof);

        
        $__internal_c060e31d5e8a1e3359c3e1aed21106dc958844bddd4be05df8aaaa6d8b50e517->leave($__internal_c060e31d5e8a1e3359c3e1aed21106dc958844bddd4be05df8aaaa6d8b50e517_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Breadcrumb/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  47 => 10,  42 => 9,  40 => 8,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"breadcrumb\">
    <li>
        <a href=\"{{ path('avanzu_admin_home') }}\">
            <i class=\"fa fa-dashboard\"></i>
            {{ 'Home'|trans({}, 'AvanzuAdminTheme') }}
        </a>
    </li>
    {% if active %}
        {% for item in active %}
            <li><a href=\"{{ item.route is empty ? '#' : '/' in item.route ? item.route : path(item.route, item.routeArgs) }}\">{{ item.label }}</a></li>
        {% endfor %}
    {% endif %}
    <li class=\"active\">{{ title }}</li>
</ol>", "@AvanzuAdminTheme/Breadcrumb/breadcrumb.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Breadcrumb/breadcrumb.html.twig");
    }
}
