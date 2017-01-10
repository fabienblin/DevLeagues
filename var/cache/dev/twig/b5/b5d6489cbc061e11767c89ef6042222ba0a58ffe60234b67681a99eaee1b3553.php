<?php

/* @SonataAdmin/Button/list_button.html.twig */
class __TwigTemplate_b68398e904511b088d35fe1ee290c568a64987d208b68c03e96d0bbde819ed07 extends Twig_Template
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
        $__internal_dde9cb20f0fb30b80772493e4e7d40681183a6653b1c7a41f6260b63668eea5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde9cb20f0fb30b80772493e4e7d40681183a6653b1c7a41f6260b63668eea5b->enter($__internal_dde9cb20f0fb30b80772493e4e7d40681183a6653b1c7a41f6260b63668eea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        $__internal_24e34c6f0720e033c1c2c3da36571ff62f54b19ea2192499b481d89b5d8d7059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e34c6f0720e033c1c2c3da36571ff62f54b19ea2192499b481d89b5d8d7059->enter($__internal_24e34c6f0720e033c1c2c3da36571ff62f54b19ea2192499b481d89b5d8d7059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_dde9cb20f0fb30b80772493e4e7d40681183a6653b1c7a41f6260b63668eea5b->leave($__internal_dde9cb20f0fb30b80772493e4e7d40681183a6653b1c7a41f6260b63668eea5b_prof);

        
        $__internal_24e34c6f0720e033c1c2c3da36571ff62f54b19ea2192499b481d89b5d8d7059->leave($__internal_24e34c6f0720e033c1c2c3da36571ff62f54b19ea2192499b481d89b5d8d7059_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  30 => 13,  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/list_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Button/list_button.html.twig");
    }
}
