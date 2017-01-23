<?php

/* @SonataAdmin/CRUD/base_list_flat_field.html.twig */
class __TwigTemplate_404613e95bcba19c730585d3ec081bd7c82398d9b5e229e28962e036dbdbb278 extends Twig_Template
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
        $__internal_dbd5b3df9883faae0ad5efd039677e5ac58c4fe9c3e13b639c84a28f2ea18bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd5b3df9883faae0ad5efd039677e5ac58c4fe9c3e13b639c84a28f2ea18bb1->enter($__internal_dbd5b3df9883faae0ad5efd039677e5ac58c4fe9c3e13b639c84a28f2ea18bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        $__internal_9c495f0d044996fee7fc7779a356b57c117386b65efb98d8b4943e0180a4cb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c495f0d044996fee7fc7779a356b57c117386b65efb98d8b4943e0180a4cb34->enter($__internal_9c495f0d044996fee7fc7779a356b57c117386b65efb98d8b4943e0180a4cb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

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
        
        $__internal_dbd5b3df9883faae0ad5efd039677e5ac58c4fe9c3e13b639c84a28f2ea18bb1->leave($__internal_dbd5b3df9883faae0ad5efd039677e5ac58c4fe9c3e13b639c84a28f2ea18bb1_prof);

        
        $__internal_9c495f0d044996fee7fc7779a356b57c117386b65efb98d8b4943e0180a4cb34->leave($__internal_9c495f0d044996fee7fc7779a356b57c117386b65efb98d8b4943e0180a4cb34_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_6b24749dfa7389a66b7222e8a7a23afa461ecb81efa8294bbd270d0ba32a82b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b24749dfa7389a66b7222e8a7a23afa461ecb81efa8294bbd270d0ba32a82b7->enter($__internal_6b24749dfa7389a66b7222e8a7a23afa461ecb81efa8294bbd270d0ba32a82b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7405af034cb946671db7f06edbacce1349d25c82f060e3e1faa9e2a6c373065d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7405af034cb946671db7f06edbacce1349d25c82f060e3e1faa9e2a6c373065d->enter($__internal_7405af034cb946671db7f06edbacce1349d25c82f060e3e1faa9e2a6c373065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        
        $__internal_7405af034cb946671db7f06edbacce1349d25c82f060e3e1faa9e2a6c373065d->leave($__internal_7405af034cb946671db7f06edbacce1349d25c82f060e3e1faa9e2a6c373065d_prof);

        
        $__internal_6b24749dfa7389a66b7222e8a7a23afa461ecb81efa8294bbd270d0ba32a82b7->leave($__internal_6b24749dfa7389a66b7222e8a7a23afa461ecb81efa8294bbd270d0ba32a82b7_prof);

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
