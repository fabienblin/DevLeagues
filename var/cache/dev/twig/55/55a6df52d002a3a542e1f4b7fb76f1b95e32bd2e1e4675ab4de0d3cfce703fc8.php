<?php

/* @SonataAdmin/CRUD/base_list_flat_field.html.twig */
class __TwigTemplate_8db8f9ae76fb86e1d3fa3361ae7cbcf3ac709f8677eb8475db01353010897acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee504d9c76ee3c5de875b1a892a7ce5e5355fb52a4c0a9fa34a39e6fc09fcbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee504d9c76ee3c5de875b1a892a7ce5e5355fb52a4c0a9fa34a39e6fc09fcbbc->enter($__internal_ee504d9c76ee3c5de875b1a892a7ce5e5355fb52a4c0a9fa34a39e6fc09fcbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        $__internal_709194439740a6ffbbc3514ad2f15f76aa3050f74e72c222c1518684585d1a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709194439740a6ffbbc3514ad2f15f76aa3050f74e72c222c1518684585d1a99->enter($__internal_709194439740a6ffbbc3514ad2f15f76aa3050f74e72c222c1518684585d1a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute(        // line 14
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(        // line 16
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
        
        $__internal_ee504d9c76ee3c5de875b1a892a7ce5e5355fb52a4c0a9fa34a39e6fc09fcbbc->leave($__internal_ee504d9c76ee3c5de875b1a892a7ce5e5355fb52a4c0a9fa34a39e6fc09fcbbc_prof);

        
        $__internal_709194439740a6ffbbc3514ad2f15f76aa3050f74e72c222c1518684585d1a99->leave($__internal_709194439740a6ffbbc3514ad2f15f76aa3050f74e72c222c1518684585d1a99_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_7e21176d8d3e7456b98ded10fc44a0d4dce33ccd8bd2e0d6a8e5109fa82dd6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e21176d8d3e7456b98ded10fc44a0d4dce33ccd8bd2e0d6a8e5109fa82dd6cb->enter($__internal_7e21176d8d3e7456b98ded10fc44a0d4dce33ccd8bd2e0d6a8e5109fa82dd6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e4ad0616a7cfa1d5a16ed1b9876e2190f7bf98bfcbc88192edb70180df64b3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ad0616a7cfa1d5a16ed1b9876e2190f7bf98bfcbc88192edb70180df64b3b5->enter($__internal_e4ad0616a7cfa1d5a16ed1b9876e2190f7bf98bfcbc88192edb70180df64b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        
        $__internal_e4ad0616a7cfa1d5a16ed1b9876e2190f7bf98bfcbc88192edb70180df64b3b5->leave($__internal_e4ad0616a7cfa1d5a16ed1b9876e2190f7bf98bfcbc88192edb70180df64b3b5_prof);

        
        $__internal_7e21176d8d3e7456b98ded10fc44a0d4dce33ccd8bd2e0d6a8e5109fa82dd6cb->leave($__internal_7e21176d8d3e7456b98ded10fc44a0d4dce33ccd8bd2e0d6a8e5109fa82dd6cb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  57 => 25,  51 => 23,  47 => 21,  45 => 20,  41 => 19,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  35 => 13,  29 => 12,  26 => 11,);
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

<span class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\">
    {% if
            field_description.options.identifier is defined
        and field_description.options.route is defined
        and admin.isGranted(field_description.options.route.name == 'show' ? 'VIEW' : field_description.options.route.name|upper, object)
        and admin.hasRoute(field_description.options.route.name)
    %}
        <a href=\"{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}\">
            {%- block field %}{{ value }}{% endblock -%}
        </a>
    {% else %}
        {{ block('field') }}
    {% endif %}
</span>
", "@SonataAdmin/CRUD/base_list_flat_field.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_field.html.twig");
    }
}
