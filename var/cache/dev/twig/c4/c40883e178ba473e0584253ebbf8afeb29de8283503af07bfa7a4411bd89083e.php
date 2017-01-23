<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_01305bc4e7fb5b8b9beb7c5969bcbde090bf252f1b1fa80792c62c66a9141f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c679f7d30706e1101b986d2b9c7bb9430c03ed20739175572449d68036976e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c679f7d30706e1101b986d2b9c7bb9430c03ed20739175572449d68036976e01->enter($__internal_c679f7d30706e1101b986d2b9c7bb9430c03ed20739175572449d68036976e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $__internal_c1cd8fd6cbc5e0462417fa1fa15dda89b4136f6e1071d4a9a683b4262ab00ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cd8fd6cbc5e0462417fa1fa15dda89b4136f6e1071d4a9a683b4262ab00ebb->enter($__internal_c1cd8fd6cbc5e0462417fa1fa15dda89b4136f6e1071d4a9a683b4262ab00ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c679f7d30706e1101b986d2b9c7bb9430c03ed20739175572449d68036976e01->leave($__internal_c679f7d30706e1101b986d2b9c7bb9430c03ed20739175572449d68036976e01_prof);

        
        $__internal_c1cd8fd6cbc5e0462417fa1fa15dda89b4136f6e1071d4a9a683b4262ab00ebb->leave($__internal_c1cd8fd6cbc5e0462417fa1fa15dda89b4136f6e1071d4a9a683b4262ab00ebb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_98d70db106baa38da5e82820ab35cb2f78cb0308d4aed2c96064a1beb57e41a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d70db106baa38da5e82820ab35cb2f78cb0308d4aed2c96064a1beb57e41a7->enter($__internal_98d70db106baa38da5e82820ab35cb2f78cb0308d4aed2c96064a1beb57e41a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5e8f2f3226ec3e312419b0421a315f426bf0f74fd10db314d2ed3916b410625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8f2f3226ec3e312419b0421a315f426bf0f74fd10db314d2ed3916b410625c->enter($__internal_5e8f2f3226ec3e312419b0421a315f426bf0f74fd10db314d2ed3916b410625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_5e8f2f3226ec3e312419b0421a315f426bf0f74fd10db314d2ed3916b410625c->leave($__internal_5e8f2f3226ec3e312419b0421a315f426bf0f74fd10db314d2ed3916b410625c_prof);

        
        $__internal_98d70db106baa38da5e82820ab35cb2f78cb0308d4aed2c96064a1beb57e41a7->leave($__internal_98d70db106baa38da5e82820ab35cb2f78cb0308d4aed2c96064a1beb57e41a7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "@SonataAdmin/CRUD/list__select.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
