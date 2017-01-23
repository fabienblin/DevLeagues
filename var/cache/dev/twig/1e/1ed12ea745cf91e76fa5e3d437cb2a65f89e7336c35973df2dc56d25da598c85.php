<?php

/* @SonataAdmin/Button/edit_button.html.twig */
class __TwigTemplate_513d48aa31d2d42ca4a80f3af6251b039ff3c716e4c3ea20e5b147b425287782 extends Twig_Template
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
        $__internal_1d32840a0e4b38ae2ae9334396268a6a338c66d8903092eb7e7cadacf72b6889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d32840a0e4b38ae2ae9334396268a6a338c66d8903092eb7e7cadacf72b6889->enter($__internal_1d32840a0e4b38ae2ae9334396268a6a338c66d8903092eb7e7cadacf72b6889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/edit_button.html.twig"));

        $__internal_c239c3bb3b4c364ceb54b466d7bfa2c4a448e604a3e0f8e338cfb0b0d1b305d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c239c3bb3b4c364ceb54b466d7bfa2c4a448e604a3e0f8e338cfb0b0d1b305d1->enter($__internal_c239c3bb3b4c364ceb54b466d7bfa2c4a448e604a3e0f8e338cfb0b0d1b305d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_1d32840a0e4b38ae2ae9334396268a6a338c66d8903092eb7e7cadacf72b6889->leave($__internal_1d32840a0e4b38ae2ae9334396268a6a338c66d8903092eb7e7cadacf72b6889_prof);

        
        $__internal_c239c3bb3b4c364ceb54b466d7bfa2c4a448e604a3e0f8e338cfb0b0d1b305d1->leave($__internal_c239c3bb3b4c364ceb54b466d7bfa2c4a448e604a3e0f8e338cfb0b0d1b305d1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/edit_button.html.twig";
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/edit_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
