<?php

/* @SonataAdmin/CRUD/base_list_flat_field.html.twig */
class __TwigTemplate_5032f8e3ecef84652cc4bf5149f6208c408f8e1a6a015d9ddf5553fa8f9c480e extends Twig_Template
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
        $__internal_14a43709508c410d6d56dc81bd7ffe8005ff20d6b5d7fcb921cdd7bd313f2664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a43709508c410d6d56dc81bd7ffe8005ff20d6b5d7fcb921cdd7bd313f2664->enter($__internal_14a43709508c410d6d56dc81bd7ffe8005ff20d6b5d7fcb921cdd7bd313f2664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        $__internal_239ec8fd8fe1ca03e2f8dde05493f4017e468d4b94ebc7c0c8ad4cc9f5678d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239ec8fd8fe1ca03e2f8dde05493f4017e468d4b94ebc7c0c8ad4cc9f5678d7e->enter($__internal_239ec8fd8fe1ca03e2f8dde05493f4017e468d4b94ebc7c0c8ad4cc9f5678d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute(        // line 14
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 15
($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(        // line 16
($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())))), 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method")) && $this->getAttribute(        // line 17
($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
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
        
        $__internal_14a43709508c410d6d56dc81bd7ffe8005ff20d6b5d7fcb921cdd7bd313f2664->leave($__internal_14a43709508c410d6d56dc81bd7ffe8005ff20d6b5d7fcb921cdd7bd313f2664_prof);

        
        $__internal_239ec8fd8fe1ca03e2f8dde05493f4017e468d4b94ebc7c0c8ad4cc9f5678d7e->leave($__internal_239ec8fd8fe1ca03e2f8dde05493f4017e468d4b94ebc7c0c8ad4cc9f5678d7e_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_89f50c7cb061e4694d58d50131bafe93dca240cce10e22b7c170669094d854fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f50c7cb061e4694d58d50131bafe93dca240cce10e22b7c170669094d854fd->enter($__internal_89f50c7cb061e4694d58d50131bafe93dca240cce10e22b7c170669094d854fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b515a1a6650e478e997d963f5d0344535f709ecb1b70a520461f7908aba63ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515a1a6650e478e997d963f5d0344535f709ecb1b70a520461f7908aba63ca0->enter($__internal_b515a1a6650e478e997d963f5d0344535f709ecb1b70a520461f7908aba63ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        
        $__internal_b515a1a6650e478e997d963f5d0344535f709ecb1b70a520461f7908aba63ca0->leave($__internal_b515a1a6650e478e997d963f5d0344535f709ecb1b70a520461f7908aba63ca0_prof);

        
        $__internal_89f50c7cb061e4694d58d50131bafe93dca240cce10e22b7c170669094d854fd->leave($__internal_89f50c7cb061e4694d58d50131bafe93dca240cce10e22b7c170669094d854fd_prof);

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
", "@SonataAdmin/CRUD/base_list_flat_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_field.html.twig");
    }
}
