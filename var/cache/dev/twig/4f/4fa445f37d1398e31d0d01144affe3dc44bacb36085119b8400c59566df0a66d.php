<?php

/* @SonataAdmin/CRUD/base_list_flat_inner_row.html.twig */
class __TwigTemplate_df61d7ba9c69df480c76fa86bd118dfccb5c080fb07221fbd6a6e0175a29cb56 extends Twig_Template
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
        $__internal_8fbd32c01407e9f6cf17cf35be4e5daa40fd808e9d9a2aa2cf01c11cfbf58ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbd32c01407e9f6cf17cf35be4e5daa40fd808e9d9a2aa2cf01c11cfbf58ee0->enter($__internal_8fbd32c01407e9f6cf17cf35be4e5daa40fd808e9d9a2aa2cf01c11cfbf58ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        $__internal_812bd6b0bd2bc21fa76db12bd4b0e45b4334777c976ea94e89fed72125aa6996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812bd6b0bd2bc21fa76db12bd4b0e45b4334777c976ea94e89fed72125aa6996->enter($__internal_812bd6b0bd2bc21fa76db12bd4b0e45b4334777c976ea94e89fed72125aa6996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_8fbd32c01407e9f6cf17cf35be4e5daa40fd808e9d9a2aa2cf01c11cfbf58ee0->leave($__internal_8fbd32c01407e9f6cf17cf35be4e5daa40fd808e9d9a2aa2cf01c11cfbf58ee0_prof);

        
        $__internal_812bd6b0bd2bc21fa76db12bd4b0e45b4334777c976ea94e89fed72125aa6996->leave($__internal_812bd6b0bd2bc21fa76db12bd4b0e45b4334777c976ea94e89fed72125aa6996_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_e62473090fc4e5627ab3b00fb9a43de55723162bc0757d395cad32db6a7077b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62473090fc4e5627ab3b00fb9a43de55723162bc0757d395cad32db6a7077b0->enter($__internal_e62473090fc4e5627ab3b00fb9a43de55723162bc0757d395cad32db6a7077b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        $__internal_8b8320615598bcacc1085f0cb49e0950a6415d17589cf8ba7ca075adf0d37ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8320615598bcacc1085f0cb49e0950a6415d17589cf8ba7ca075adf0d37ce2->enter($__internal_8b8320615598bcacc1085f0cb49e0950a6415d17589cf8ba7ca075adf0d37ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_8b8320615598bcacc1085f0cb49e0950a6415d17589cf8ba7ca075adf0d37ce2->leave($__internal_8b8320615598bcacc1085f0cb49e0950a6415d17589cf8ba7ca075adf0d37ce2_prof);

        
        $__internal_e62473090fc4e5627ab3b00fb9a43de55723162bc0757d395cad32db6a7077b0->leave($__internal_e62473090fc4e5627ab3b00fb9a43de55723162bc0757d395cad32db6a7077b0_prof);

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
", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_inner_row.html.twig");
    }
}
