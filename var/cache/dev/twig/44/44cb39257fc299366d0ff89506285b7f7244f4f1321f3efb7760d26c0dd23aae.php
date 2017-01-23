<?php

/* AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig */
class __TwigTemplate_2c1241cac5303a3cb26b9a22c7b371ece66b421b4c5e1e648a8a1e7a870649d6 extends Twig_Template
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
        $__internal_3e85b2444c3db98f819d71b46c413a42ab3a3038f5b49466737de139f7a1c578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e85b2444c3db98f819d71b46c413a42ab3a3038f5b49466737de139f7a1c578->enter($__internal_3e85b2444c3db98f819d71b46c413a42ab3a3038f5b49466737de139f7a1c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig"));

        $__internal_a4d16943bd098f993d00d5de6e36614c81179368deaa065662f08666c4dcc6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d16943bd098f993d00d5de6e36614c81179368deaa065662f08666c4dcc6b5->enter($__internal_a4d16943bd098f993d00d5de6e36614c81179368deaa065662f08666c4dcc6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig"));

        // line 1
        echo "<ol class=\"breadcrumb DL_no-margin-navbar\">
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
</ol>
";
        
        $__internal_3e85b2444c3db98f819d71b46c413a42ab3a3038f5b49466737de139f7a1c578->leave($__internal_3e85b2444c3db98f819d71b46c413a42ab3a3038f5b49466737de139f7a1c578_prof);

        
        $__internal_a4d16943bd098f993d00d5de6e36614c81179368deaa065662f08666c4dcc6b5->leave($__internal_a4d16943bd098f993d00d5de6e36614c81179368deaa065662f08666c4dcc6b5_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig";
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
        return new Twig_Source("<ol class=\"breadcrumb DL_no-margin-navbar\">
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
</ol>
", "AvanzuAdminThemeBundle:Breadcrumb:breadcrumb.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/Breadcrumb/breadcrumb.html.twig");
    }
}
