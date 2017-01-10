<?php

/* @SonataAdmin/CRUD/base_list_flat_inner_row.html.twig */
class __TwigTemplate_f0cc42c69df5f50208c994fa329a2e80e56ff1a1d0f9253d3f9271b7849a89b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6827873345c6abcd48a36ac4e94593c4f75bc2c6e88b571376d35f1fb0de96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6827873345c6abcd48a36ac4e94593c4f75bc2c6e88b571376d35f1fb0de96c->enter($__internal_d6827873345c6abcd48a36ac4e94593c4f75bc2c6e88b571376d35f1fb0de96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        $__internal_5fb692f086ab57fc36577257b8a7822e0b0a5ee878cc67ad55f8393ab72312c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb692f086ab57fc36577257b8a7822e0b0a5ee878cc67ad55f8393ab72312c8->enter($__internal_5fb692f086ab57fc36577257b8a7822e0b0a5ee878cc67ad55f8393ab72312c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? $this->getContext($context, "object")), $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? $this->getContext($context, "object")), $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_d6827873345c6abcd48a36ac4e94593c4f75bc2c6e88b571376d35f1fb0de96c->leave($__internal_d6827873345c6abcd48a36ac4e94593c4f75bc2c6e88b571376d35f1fb0de96c_prof);

        
        $__internal_5fb692f086ab57fc36577257b8a7822e0b0a5ee878cc67ad55f8393ab72312c8->leave($__internal_5fb692f086ab57fc36577257b8a7822e0b0a5ee878cc67ad55f8393ab72312c8_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_b531f5cd1d907955200c7f70220a9eb731e7591e2cd5414d96e3a440bdce5665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b531f5cd1d907955200c7f70220a9eb731e7591e2cd5414d96e3a440bdce5665->enter($__internal_b531f5cd1d907955200c7f70220a9eb731e7591e2cd5414d96e3a440bdce5665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        $__internal_eb0b7271aa9becdb2da6c138dbdd3898cad110904edb51e4104a09ae47144b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0b7271aa9becdb2da6c138dbdd3898cad110904edb51e4104a09ae47144b04->enter($__internal_eb0b7271aa9becdb2da6c138dbdd3898cad110904edb51e4104a09ae47144b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_eb0b7271aa9becdb2da6c138dbdd3898cad110904edb51e4104a09ae47144b04->leave($__internal_eb0b7271aa9becdb2da6c138dbdd3898cad110904edb51e4104a09ae47144b04_prof);

        
        $__internal_b531f5cd1d907955200c7f70220a9eb731e7591e2cd5414d96e3a440bdce5665->leave($__internal_b531f5cd1d907955200c7f70220a9eb731e7591e2cd5414d96e3a440bdce5665_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 24,  57 => 23,  55 => 22,  51 => 20,  49 => 19,  43 => 18,  40 => 17,  34 => 14,  31 => 13,  29 => 12,  26 => 11,);
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

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_inner_row.html.twig");
    }
}
